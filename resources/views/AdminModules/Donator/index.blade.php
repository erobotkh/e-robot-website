@extends('components.general')
@extends('components.header')
@extends('components.sidebar')

@section('site-title')
    E-Robot | Dashboard-Donator
@endsection
@section('content')
    @if (Session::has('create_success'))
        <script>
            $(document).ready(function() {
                swal("Donator was added!", {
                    buttons: false,
                    timer: 2000,
                });
            })
        </script>
    @endif
    @if (Session::has('update_success'))
        <script>
            $(document).ready(function() {
                swal("Donator was updated!", {
                    buttons: false,
                    timer: 2000,
                });
            })
        </script>
    @endif
    @if (Session::has('delete_success'))
        <script>
            $(document).ready(function() {
                swal("Donator was deleted!", {
                    buttons: false,
                    timer: 2000,
                });
            })
        </script>
    @endif
    @if (Session::has('error'))
        <script>
            $(document).ready(function() {
                swal("Error, please check again!", {
                    buttons: false,
                    timer: 2000,
                });
            })
        </script>
    @endif
    <main id="main" class="main">
        <div class="d-flex align-items-center justify-content-between  ">
            <div class="pagetitle">
                <h1>Donator</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/admin">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Donator</li>
                    </ol>
                </nav>
            </div>


            {{-- filter --}}
            <div class="filterSection rounded  d-flex align-items-center justify-content-center gap-5">
                <button class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#add_card">
                    Add Donator
                </button>
                <div class="filterSection d-flex flex-row-reverse position-relative">
                    <button class="btn btn-outline-danger dropdown-toggle"  role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Filter
                    </button>

                    <ul class="dropdown-menu position-absolute" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="/admin/donator?type=">All</a></li>
                    <li><a class="dropdown-item" href="/admin/donator?type=dollar">Dollar $</a></li>
                    <li><a class="dropdown-item" href="/admin/donator?type=reil">Reil ៛</a></li>
                    </ul>
                </div>

            </div>
        </div>


        <hr style="border: 2px solid ">

        {{-- view information of donation card --}}
        <table class="table table-hover table-striped  mt-3 table-bordered ">
            <thead>
                <tr style="text-align: center">

                    <th>Name</th>
                    <th>Amount</th>

                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>


                @foreach ($allDonator as $items)
                    <tr class="align-items-center justify-content-center">

                        <td>{{ $items->name }}</td>
                        @if ($items->currency_type == "dollar")
                            <td>{{ $items->amount }} $</td>

                        @else

                            <td>{{ $items->amount }} ៛</td>

                        @endif
                        <td class="d-flex gap-2 py-3 justify-content-center">
                            <button class="btn btn-warning" data-bs-toggle="modal" data-value="{{ $items->id }}"
                                data-bs-target="#{{ $items->id }}_showUpdate" id="btn-update"> Edit </button>
                            <button class=" btn btn-danger" data-bs-toggle="modal" data-value="{{ $items->id }}"
                                data-bs-target="#showDelete" id="btn-delete"> Delete</button>

                        </td>

                        {{-- update Modal --}}
                        <div class="modal fade" id="{{ $items->id }}_showUpdate" tabindex="-1"
                            aria-labelledby="Update_Card">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="Update_Card">Edit Donator</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <form action="{{ route('updateDonator') }}" method="POST"
                                            enctype="multipart/form-data" class="form">
                                            @csrf

                                            <div class="mb-3">
                                                <label for="update_name" class="form-label fw-bold ">Name</label>
                                                <input type="text" class="form-control" id="update_name"
                                                     name="name"
                                                    value="{{ $items->name }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="update_amount" class="form-label fw-bold ">Amount</label>
                                                <input type="text" class="form-control" id="update_amount"
                                                     name="amount"
                                                    value="{{ $items->amount }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="update_currency_type" class="form-label fw-bold ">Currency type</label>

                                                <?php
                                                    $dollar = $reil ='';

                                                    if ($items->currency_type == "dollar"){
                                                        $dollar ='selected';

                                                    }else{
                                                        $reil ='selected';
                                                    }
                                                ?>

                                                <select class="form-select" name="update_currency_type" id="update_currency_type">
                                                    <option value="dollar" <?php echo $dollar ?>>$</option>
                                                    <option value="reil" <?php echo $reil ?>>៛</option>

                                                </select>
                                            </div>
                                            <hr>
                                            <div class="mb-3">
                                                <input type="text" name="update_id" id="update_id"
                                                    value="{{ $items->id }}">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success">Update </button>
                                            </div>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <!-- add new donator Modal -->
        <div class="modal fade" id="add_card" tabindex="-1" aria-labelledby="Add_Card" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="Add_Card">New Donator</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form action="{{ route('storeDonator') }}" method="POST" enctype="multipart/form-data"
                            class="form">
                            @csrf

                            <div class="mb-3">
                                <label for="donatorExcel" class="form-label fw-bold ">Import Excel File</label>
                                <input type="file" class="form-control" id="donatorExcel"
                                    name="donatorExcel" >
                            </div>
                            <hr>

                            <div class="mb-3">
                                <label for="add_name" class="form-label fw-bold ">Name</label>
                                <input type="text" class="form-control" id="add_name"
                                    name="add_name" >
                            </div>
                            <div class="mb-3">
                                <label for="add_amount" class="form-label fw-bold ">Amount</label>
                                <input type="text" class="form-control" id="add_amount"
                                    name="add_amount" >
                            </div>
                            <div class="mb-3">
                                <label for="add_amount" class="form-label fw-bold ">Currency type</label>
                                <select name="add_currency" class="form-select" id="add_currency">
                                    <option value="dollar">$</option>
                                    <option value="reil">៛</option>
                                </select>
                            </div>



                            <hr>
                            <div class="mb-3">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Save </button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <!--romove Modal -->
        <div class="modal fade" id="showDelete" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="delete">Remove donator</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        Do you really want to delete?
                    </div>

                    <div class="m-3">
                        <form action="{{ route('deleteDonator') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="remove_id" id="remove_id">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="subumit" class="btn btn-primary">Yes</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection


 {{-- jquery  --}}
 <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js') }}"
 integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
 crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 {{-- sweet alert --}}
 <script src="{{ url('https://unpkg.com/sweetalert/dist/sweetalert.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $('body').on('click', '#btn-delete', function() {
            $remove_id = $(this).attr('data-value');
            $('#remove_id').val($remove_id);
        });


    })
</script>
