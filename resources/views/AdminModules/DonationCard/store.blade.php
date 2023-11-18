@extends('components.general')


<div class="container-fluid">
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
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Save </button>
        </div>
    </form>
</div>
