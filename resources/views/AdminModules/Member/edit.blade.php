{{-- <form action="{{ route('member.update', $members->id) }}" method="POST" enctype="multipart/form-data"
    class="form-group mt-4">
    @csrf
    @method('PATCH')

    <div class="offcanvas w-25 offcanvas-end" tabindex="-1" id="editMember-{{ $members->id }}"
        aria-labelledby="editMemberLabel">
        <div class="offcanvas-header">
            <h3 class="offcanvas-title fw-bold" id="editMemberLabel">Edit Member</h3>
            <div class="rotate-img">
                <img src="https://cdn1.iconfinder.com/data/icons/everyday-5/64/cross_delete_stop_x_denied_stopped-256.png"
                    width="40px" height="40px" data-bs-dismiss="offcanvas" aria-label="Close" style="cursor: grab;">
            </div>
        </div>
        <div class="offcanvas-body">
            <div class="row gap-4">
                <div>
                    <label for=""> MemberID:</label>
                    <input type="text" class="form-control" value="{{ $members->id }}" readonly>
                </div>
                <div>
                    <label for=""> First Name:</label>
                    <input type="text" class="form-control" value="{{ $members->first_name }}">
                </div>
                <div>
                    <label for=""> Last Name:</label>
                    <input type="text" class="form-control" value="{{ $members->last_name }}">
                </div>
                <div>
                    <label for="">Bio: </label>
                    <input type="text" class="form-control" value="{{ $members->bio }}">
                </div>
                <div>
                    <label for="">Image:</label>
                    <input type="file"class="form-control">
                </div>
                <div>
                    <label for="">Position:</label>
                    <select class="custom-select w-100 p-2">
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
                </div> <br>
            </div>

            <button class=" btn btn-danger" data-bs-dismiss="offcanvas" type="button"> Cancel </button>
            <button type="submit" class="btn btn-success"> Edit </button>

        </div>

    </div>
</form> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <form action="{{ route('member.update', $data->id) }}" method="POST" enctype="multipart/form-data"
        class="form-group mt-4 container rounded-4 p-5 shadow" style="border: 1px solid blue">
        <h3> Update Member</h3>
        @csrf
        @method('PATCH')
        <div class="row gap-4 mt-5">
            <div>
                <label for=""> MemberID:</label>
                <input type="text" name="id" class="form-control" value="{{ $data->id }}" readonly>
            </div>
            <div>
                <label for=""> First Name:</label>
                <input type="text" name="first_name" class="form-control" value="{{ $data->first_name }}">
            </div>
            <div>
                <label for=""> Last Name:</label>
                <input type="text" name="last_name" class="form-control" value="{{ $data->last_name }}">
            </div>
            <div>
                <label for="">Bio: </label>
                <input type="text" name="bio" class="form-control" value="{{ $data->bio }}">
            </div>
            <div>
                <label for="">Image:</label>
                <input type="file"class="form-control">
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
            </div> <br>
        </div>

        <a href="{{ route('member.index') }}" class=" btn btn-danger" type="button"> Cancel </a>
        <button type="submit" class="btn btn-success"> Update </button>



    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>

</html>
