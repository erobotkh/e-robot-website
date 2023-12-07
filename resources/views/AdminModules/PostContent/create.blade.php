<div class="offcanvas  offcanvas-end " tabindex="-1" id="postContent" aria-labelledby="teamLabel">
    <div class="offcanvas-header">
        <h3 class="offcanvas-title fw-bold" id="teamLabel">Create Post Content</h3>
        <div class="rotate-img">
            <img src="https://cdn1.iconfinder.com/data/icons/everyday-5/64/cross_delete_stop_x_denied_stopped-256.png"
                width="40px" height="40px" data-bs-dismiss="offcanvas" aria-label="Close" style="cursor: grab;">
        </div>
    </div>
    <div class="offcanvas-body">
        <form action="{{ route('postContent.store') }}" method="post" enctype="multipart/form-data"
            class="form-group mt-4">
            @csrf

            <div class="row gap-4">
                <div>
                    <label for=""> Title Name:</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div>
                    <label for="">Category:</label>
                    <select class="custom-select w-100 p-2" name="category_id">
                        @php
                            $category = DB::table('categories')->get();
                        @endphp

                        @foreach ($category as $categories)
                            <option value="{{ $categories->id }}">{{ $categories->category_name }}</option>
                        @endforeach

                    </select>
                </div>

                <div>
                    <label for=""> Description:</label>
                    <textarea name="description" class="form-control" rows="10"></textarea>
                </div>

                <div>
                    <label for="">Image:</label>
                    <input type="file" name="image_name" class="form-control" placeholder="Input profile">
                </div> <br>

            </div>

            <button type="submit" class="btn btn-primary"> Submit </button>
        </form>
    </div>
</div>
