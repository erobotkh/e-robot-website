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
    <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data"
        class="form-group mt-4 container rounded-4 p-5 shadow" style="border: 1px solid blue">
        @csrf
        @method('PATCH')

        <div class="row gap-4 mt-5">
            <div>
                <label for=""> CategoryID:</label>
                <input type="text" name="id" class="form-control" value="{{ $category->id }}" readonly>
            </div>
            <div>
                <label for=""> Category Name:</label>
                <input type="text" name="category_name" class="form-control" value="{{ $category->category_name }}">
            </div>
        </div>
        <a class=" btn btn-danger" href="{{ route('category.index') }}" type="button"> Cancel </a>
        <button type="submit" class="btn btn-success"> Update </button>

    </form>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>
