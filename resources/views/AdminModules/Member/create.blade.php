<div class="offcanvas w-25 offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h3 class="offcanvas-title fw-bold" id="offcanvasExampleLabel">Add Member</h3>
        <div class="rotate-img">
            <img src="https://cdn1.iconfinder.com/data/icons/everyday-5/64/cross_delete_stop_x_denied_stopped-256.png"
                width="40px" height="40px" data-bs-dismiss="offcanvas" aria-label="Close" style="cursor: grab;">
        </div>
    </div>
    <div class="offcanvas-body">
        <form action="{{ route('member.store') }}" method="POST" enctype="multipart/form-data" class="form-group mt-4">
            @csrf

            <div class="row gap-4">
                <div>
                    <label for=""> First Name:</label>
                    <input type="text" name="first_name" class="form-control" placeholder="Input First Name">
                </div>
                <div>
                    <label for=""> Last Name:</label>
                    <input type="text" name="last_name" class="form-control" placeholder="Input Name">
                </div>
                <div>
                    <label for="">Bio: </label>
                    <input type="text" name="bio" class="form-control" placeholder="Input bio">
                </div>
                <div>
                    <label for="">Profile:</label>
                    <input type="file" name="profile" class="form-control" placeholder="Input profile">
                </div>
                <div>
                    <label for="">Position:</label>
                    <select class="custom-select w-100 p-2" name="member_position_id">
                        @php
                            $team = DB::table('member_positions')->get();
                        @endphp

                        @foreach ($team as $teams)
                            <option value="{{ $teams->id }}">{{ $teams->title }}</option>
                        @endforeach

                    </select>
                </div>
                <div>
                    <label for="">From Team:</label>
                    <select class="custom-select w-100 p-2" name="team_id">
                        @php
                            $team = DB::table('teams')->get();
                        @endphp

                        @foreach ($team as $teams)
                            <option value="{{ $teams->id }}">{{ $teams->name }}</option>
                        @endforeach

                    </select>
                </div>

                <div>
                    <label for="">Facebook link: </label>
                    <input type="text" name="facebook" class="form-control" placeholder="https://......">
                </div>
                <div>
                    <label for="">Telegram link: </label>
                    <input type="text" name="telegram" class="form-control" placeholder="https://......">
                </div>
                <div>
                    <label for="">Link In link: </label>
                    <input type="text" name="linkIn" class="form-control" placeholder="https://......">
                </div>

                <br>
            </div>

            <button type="submit" class="btn btn-success"> Add </button>
        </form>
    </div>
</div>
