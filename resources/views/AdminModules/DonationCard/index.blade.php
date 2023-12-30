@extends('components.general')
@extends('components.header')
@extends('components.sidebar')

@section('site-title')
    E-Robot | Dashboard-Donation
@endsection

@section('content')
    @if (Session::has('create_success'))
    <script>
        $(document).ready(function() {
            swal("Donation card was created!", {
                buttons: false,
                timer: 2000,
            });
        })
    </script>
    @endif
    @if (Session::has('update_success'))
    <script>
        $(document).ready(function() {
            swal("Donation card was updated!", {
                buttons: false,
                timer: 2000,
            });
        })
    </script>
    @endif
    @if (Session::has('delete_success'))
    <script>
        $(document).ready(function() {
            swal("Donation card was deleted!", {
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
        <div class="d-flex align-items-center  justify-content-between  ">
            <div class="pagetitle">
                <h1>Donation</h1>

                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/admin">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Donation</li>
                    </ol>
                </nav>
            </div>
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#add_card">
                Add Card
            </button>
        </div>
        <hr style="border: 2px solid">


        {{-- view information of donation card --}}
        <table class="table table-hover table-striped  mt-3 table-bordered">
            <thead>
                <tr>

                    <th>Account number</th>
                    <th>Account type</th>
                    <th>Symbol</th>
                    <th>QR code</th>
                    <th>Recipient name</th>
                    <th>Position</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>


                @foreach ($CardInfo as $items)
                    <tr class="align-items-center justify-content-center">

                        <td>{{ $items->acc_number }}</td>
                        <td>{{ $items->acc_type }}</td>
                        <td>{{ $items->currency_symbol }}</td>
                        <td><img style="height:50px" src="{{ $items->qr_code }}" alt=""></td>

                        <td>{{ $items->recipient_name }}</td>
                        <td>{{ $items->recipient_position }}</td>

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
                                        <h5 class="modal-title" id="Update_Card">Update Donation card</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <form action="{{ route('editDonationCard') }}" method="POST"
                                            enctype="multipart/form-data" class="form">
                                            @csrf

                                            <div class="mb-3">
                                                <label for="update_acc_num" class="form-label fw-bold ">Account
                                                    number</label>
                                                <input type="text" class="form-control" id="update_acc_num"
                                                    placeholder="00012345678" name="acc_number"
                                                    value="{{ $items->acc_number }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <?php
                                                $option = $items->acc_type;
                                                $reil = $dollar = ' ';
                                                if ($option === 'reil') {
                                                    $reil = 'selected';
                                                }
                                                if ($option === 'dollar') {
                                                    $dollar = 'selected';
                                                }
                                                ?>

                                                <label for="update_acc_type" class="form-label fw-bold">Account type</label>
                                                <select name="acc_type" id="update_acc_type" class="form-select">
                                                    <option value="reil" <?php echo $reil; ?>>Reil ៛</option>
                                                    <option value="dollar" <?php echo $dollar; ?>>Dollar $</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="update_qr_code" class="form-label fw-bold">QR Code </label>
                                                <input class="form-control" type="file" id="update_qr_code"
                                                    name="qr_code">
                                                <img style="height: 80px" src="{{ $items->qr_code }}">
                                                <input type="hidden" value="{{ $items->qr_code }}" name='old_qr_code'>
                                            </div>
                                            <div class="mb-3">
                                                <label for="update_recipient_name" class="form-label fw-bold">Recipient
                                                    name</label>
                                                <input type="text" class="form-control" id="update_recipient_name"
                                                    placeholder="Mr.ABC" name="recipient_name"
                                                    value="{{ $items->recipient_name }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="update_recipient_position"
                                                    class="form-label fw-bold">Position</label>
                                                <input type="text" class="form-control" id="update_recipient_position"
                                                    placeholder="Financier" name="recipient_position"
                                                    value="{{ $items->recipient_position }}" required>
                                            </div>
                                            <hr>
                                            <div class="mb-3">
                                                <input type="hidden" name="update_id" id="update_id"
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

        <!-- add new donation card Modal -->
        <div class="modal fade" id="add_card" tabindex="-1" aria-labelledby="Add_Card" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="Add_Card">New Donation card</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form action="{{ route('storeDonationCard') }}" method="POST" enctype="multipart/form-data"
                            class="form">
                            @csrf

                            <div class="mb-3">
                                <label for="acc_num" class="form-label fw-bold ">Account number</label>
                                <input type="text" class="form-control" id="acc_num" placeholder="00012345678"
                                    name="acc_number" required>
                            </div>
                            <div class="mb-3">
                                <label for="acc_type" class="form-label fw-bold">Account type</label>
                                <select name="acc_type" id="acc_type" class="form-select">
                                    <option value="reil">Reil ៛</option>
                                    <option value="dollar">Dollar $</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="qr_code" class="form-label fw-bold">QR Code </label>
                                <input class="form-control" type="file" id="qr_code" name="qr_code" required>
                            </div>
                            <div class="mb-3">
                                <label for="recipient_name" class="form-label fw-bold">Recipient name</label>
                                <input type="text" class="form-control" id="recipient_name" placeholder="Mr.ABC"
                                    name="recipient_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="recipient_position" class="form-label fw-bold">Position</label>
                                <input type="text" class="form-control" id="recipient_position"
                                    placeholder="Financier" name="recipient_position" required>
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
                        <h5 class="modal-title" id="delete">Delete card</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Do you really want to delete?
                    </div>

                    <div class="m-3">
                        <form action="{{ route('deleteDonationCard') }}" method="POST">
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
