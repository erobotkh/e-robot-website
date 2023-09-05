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
    <main id="main" class="main mt-5 pt-3 container p-5" style="border: 3px solid rgb(59, 148, 221)">
        <h3> Input Members </h3>
        <form action="{{ route('member.store') }}" method="post" class="form-group mt-4">
            @csrf
            <input type="text" name="name" class="form-control" placeholder="Input Name"> <br>
            <input type="text" name="bio" class="form-control" placeholder="Input bio"> <br>
            <input type="file" name="profile" class="form-control" placeholder="Input profile"> <br>
            <input type="text" name="member_position_id" class="form-control" placeholder="Input position"> <br>
            <input type="text" name="team_id" class="form-control" placeholder="Input team"> <br><br>


            <button type="submit" class="btn btn-primary"> Submit </button>
        </form>
    </main>

</body>

</html>
