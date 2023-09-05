<div class="offcanvas w-25 offcanvas-end h-50" tabindex="-1" id="position" aria-labelledby="positionLabel">
    <div class="offcanvas-header">
        <h3 class="offcanvas-title fw-bold" id="positionLabel">Create Position</h3>
        <div class="rotate-img">
            <img src="https://cdn1.iconfinder.com/data/icons/everyday-5/64/cross_delete_stop_x_denied_stopped-256.png"
                width="40px" height="40px" data-bs-dismiss="offcanvas" aria-label="Close" style="cursor: grab;">
        </div>
    </div>
    <div class="offcanvas-body">
        <form action="{{ route('position.store') }}" method="post" class="form-group mt-4">
            @csrf

            <div class="row gap-4">
                <div>
                    <label for=""> Position Name:</label>
                    <input type="text" name="title" class="form-control" placeholder="Title Name">
                </div> <br>
            </div>

            <button type="submit" class="btn btn-primary"> Submit </button>
        </form>
    </div>
</div>
