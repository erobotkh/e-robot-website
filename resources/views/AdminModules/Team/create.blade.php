<div class="offcanvas w-25 offcanvas-end h-50" tabindex="-1" id="team" aria-labelledby="teamLabel">
    <div class="offcanvas-header">
        <h3 class="offcanvas-title fw-bold" id="teamLabel">Create Team</h3>
        <div class="rotate-img">
            <img src="https://cdn1.iconfinder.com/data/icons/everyday-5/64/cross_delete_stop_x_denied_stopped-256.png"
                width="40px" height="40px" data-bs-dismiss="offcanvas" aria-label="Close" style="cursor: grab;">
        </div>
    </div>
    <div class="offcanvas-body">
        <form action="{{ route('team.store') }}" method="post" enctype="multipart/form-data" class="form-group mt-4">
            @csrf

            <div class="row gap-4">
                <div>
                    <label for=""> Team Name:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div>
                    <label for=""> Bio:</label>
                    <input type="text" name="bio" class="form-control" placeholder="Bio">
                </div> <br>

            </div>

            <button type="submit" class="btn btn-primary"> Submit </button>
        </form>
    </div>
</div>
