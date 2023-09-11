<form action="{{ route('member.destroy', $data->id) }}" method="POST" enctype="multipart/form-data"
    class="form-group mt-4">
    <h3> Are You sure you want to delete this member from your team?</h3>
    @csrf
    @method('DELETE')

    <div class="row gap-4">
        <div>
            <label for=""> ID:</label>
            <input type="text" class="form-control" value="{{ $data->id }}" readonly>
        </div>
    </div><br><br>

    <button type="submit" class="btn btn-primary"> Delete </button>
</form>
