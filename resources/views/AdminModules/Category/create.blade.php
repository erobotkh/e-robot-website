<div class="offcanvas w-25 offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h3 class="offcanvas-title fw-bold" id="offcanvasExampleLabel">Create Category</h3>
        <div class="rotate-img">
            <img src="https://cdn1.iconfinder.com/data/icons/everyday-5/64/cross_delete_stop_x_denied_stopped-256.png"
                width="40px" height="40px" data-bs-dismiss="offcanvas" aria-label="Close" style="cursor: grab;">
        </div>
    </div>
    <div class="offcanvas-body">
        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row gap-4">
                <div>
                    <label for=""> Category Name:</label>
                    <input type="text" name="category_name" class="form-control">
                </div>
            </div> <br><br>
            <button type="submit" class="btn btn-primary"> Submit </button>

        </form>
    </div>

</div>
