<div class="offcanvas w-25 offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h3 class="offcanvas-title fw-bold" id="offcanvasExampleLabel">Create Member</h3>
        <div class="rotate-img">
            <img src="https://cdn1.iconfinder.com/data/icons/everyday-5/64/cross_delete_stop_x_denied_stopped-256.png"
                width="40px" height="40px" data-bs-dismiss="offcanvas" aria-label="Close" style="cursor: grab;">
        </div>
    </div>
    <div class="offcanvas-body">
        <form action="{{ route('member.store') }}" method="post" class="form-group mt-4">
            @csrf

            <div class="row gap-4">
                <div>
                    <label for=""> Full Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Input Name">
                </div>
                <div>
                    <label for="">Bio: </label>
                    <input type="text" name="bio" class="form-control" placeholder="Input bio">
                </div>
                <div>
                    <label for="">Image:</label>
                    <input type="file" name="profile" class="form-control" placeholder="Input profile">
                </div>
                <div>
                    <label for="">Position:</label>
                    <select class="custom-select w-100 p-2" name="member_position_id">

                    </select>
                    {{-- <input type="text" name="member_position_id" class="form-control" placeholder="Input position"> --}}

                </div>
                <div>
                    <label for="">From Team:</label>
                    <select class="custom-select w-100 p-2" name="team_id">

                    </select>

                    {{-- <input type="text" name="team_id" class="form-control" placeholder="Input team"> <br><br> --}}
                </div> <br><br>
            </div>

            <button type="submit" class="btn btn-primary"> Submit </button>
        </form>
    </div>
</div>
