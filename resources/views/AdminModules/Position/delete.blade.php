<div class="offcanvas w-25 offcanvas-end" tabindex="-1" id="deletePosition-{{ $pos->id }}"
    aria-labelledby="deletePositionLabel">
    <div class="offcanvas-header">
        <h3 class="offcanvas-title fw-bold" id="deletePositionLabel">Delete Position</h3>
        <div class="rotate-img">
            <img src="https://cdn1.iconfinder.com/data/icons/everyday-5/64/cross_delete_stop_x_denied_stopped-256.png"
                width="40px" height="40px" data-bs-dismiss="offcanvas" aria-label="Close" style="cursor: grab;">
        </div>
    </div>
    <div class="offcanvas-body">
        <form action="{{ route('position.destroy', $pos->id) }}" method="POST" enctype="multipart/form-data"
            class="form-group mt-4">
            @csrf
            @method('DELETE')

            <div class="row gap-4">
                <div>
                    <label for=""> ID:</label>
                    <input type="text" class="form-control" value="{{ $pos->id }}" readonly>
                </div>
                <div>
                    <label for=""> Title:</label>
                    <input type="text" name="title" class="form-control" value="{{ $pos->title }}">
                </div>
            </div><br><br>

            <button type="submit" class="btn btn-primary"> Delete </button>
        </form>
    </div>
</div>
