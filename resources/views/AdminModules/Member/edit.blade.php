

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
                <input type="text" name="id" class="form-control" value="{{ $data->id }}" readonly disabled >
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
                <input type="file"class="form-control" name="profile">

                <?php $data->profile = env('DO_URL').$data->profile ?>

                <img src="{{$data->profile}}" style="width:80px;" alt="">
                <input type="hidden" name="old_profile" value="{{$data->profile}}">
            </div>
            <div>
                <label for="">Position:</label>
                <select class="custom-select w-100 p-2" name="member_position_id">
                    @php
                        $team = DB::table('member_positions')->get();
                    @endphp

                    @foreach ($team as $teams)
                        @if ($teams->id == $data->member_position_id)
                            <option value="{{ $teams->id }}" selected>{{ $teams->title }}</option>

                        @else
                            <option value="{{ $teams->id }}">{{ $teams->title }}</option>

                        @endif
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
                        @if ($teams->id == $data->team_id)
                            <option value="{{ $teams->id }}" selected>{{ $teams->name }}</option>
                        @else
                            <option value="{{ $teams->id }}">{{ $teams->name }}</option>

                        @endif

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
