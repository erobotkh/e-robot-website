<div class="offcanvas w-25 offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Create Member</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form action="{{ route('member.store') }}" method="post" class="form-group mt-4">
            @csrf
            <input type="text" name="name" class="form-control" placeholder="Input Name"> <br>
            <input type="text" name="bio" class="form-control" placeholder="Input bio"> <br>
            <input type="file" name="profile" class="form-control" placeholder="Input profile"> <br>
            <input type="text" name="member_position_id" class="form-control" placeholder="Input position"> <br>
            <input type="text" name="team_id" class="form-control" placeholder="Input team"> <br><br>


            <button type="submit" class="btn btn-primary"> Submit </button>
        </form>
    </div>
</div>
