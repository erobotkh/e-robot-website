{{-- @extends('components.general') --}}
{{-- @extends('components.header')
@extends('components.sidebar') --}}

{{-- Bootstrap --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

{{-- jquery --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<main id="main" class="main">
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add_card">
        Add card
    </button>

    <!-- add new donation card Modal -->
    <div class="modal fade" id="add_card" tabindex="-1" aria-labelledby="Add_Card" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="Add_Card">New Donation card</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                    <form action="{{ route('storeDonationCard') }}" method="POST" enctype="multipart/form-data" class="form">
                        @csrf

                        <div class="mb-3">
                            <label for="acc_num" class="form-label fw-bold ">Account number</label>
                            <input type="text" class="form-control" id="acc_num" placeholder="00012345678" name="acc_number" required>
                        </div>
                        <div class="mb-3">
                            <label for="acc_type" class="form-label fw-bold" >Account type</label>
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
                            <input type="text" class="form-control" id="recipient_name" placeholder="Mr.ABC" name="recipient_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient_position" class="form-label fw-bold">Position</label>
                            <input type="text" class="form-control" id="recipient_position" placeholder="Financier" name="recipient_position" required>
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


    <table class="table table-hover mt-3">
        <thead>
            <tr >

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

                    <td>{{ $items->acc_number}}</td>
                    <td>{{ $items->acc_type }}</td>
                    <td>{{ $items->currency_symbol }}</td>
                    <td><img style="height:50px" src="{{ '../images/' . $items->qr_code }}" alt=""></td>

                    <td>{{ $items->recipient_name }}</td>
                    <td>{{ $items->recipient_position }}</td>

                    <td class="d-flex gap-2 py-3 justify-content-center">
                        <a href="" class="btn btn-warning"> Edit </a>
                        <button class=" btn btn-danger" data-bs-toggle="modal" data-value="{{ $items->id }}" data-bs-target="#showDelete" id="btn-delete"> Delete</button>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

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
            <div class="modal-footer">
                <form action="{{route('deleteDonationCard')}}" method="POST" >
                    @csrf
                    @method('DELETE')
                    <input type="hidden"  name="remove_id" id="remove_id">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="subumit" class="btn btn-primary" >Yes</button>
                </form>
            </div>
        </div>
        </div>
    </div>
</main>


<script>

    $(document).ready(function(){
        $('body').on('click', '#btn-delete', function() {
            $remove_id = $(this).attr('data-value');
            $('#remove_id').val($remove_id);
        });
    })
</script>
