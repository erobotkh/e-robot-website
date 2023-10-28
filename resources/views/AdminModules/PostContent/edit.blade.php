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
    <form action="{{ route('postContent.update', $data->id) }}" method="POST" enctype="multipart/form-data"
        class="form-group mt-4 container rounded-4 p-5 shadow" style="border: 1px solid blue">
        <h3> Update Post Content</h3>
        @csrf
        @method('PATCH')
        <div class="row gap-4 mt-5">
            <div>
                <label for=""> PostContentID:</label>
                <input type="text" name="id" class="form-control" value="{{ $data->id }}" readonly>
            </div>
            <div>
                <label for=""> Title:</label>
                <input type="text" name="title" class="form-control" value="{{ $data->title }}">
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
                <textarea name="discription" class="form-control" value="{{ $data->discription }}" rows="10"></textarea>
            </div> <br>
        </div>

        <a href="{{ route('postContent.index') }}" class=" btn btn-danger" type="button"> Cancel </a>
        <button type="submit" class="btn btn-success"> Update </button>


</body>

</html>
