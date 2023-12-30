@extends('components.general')
@extends('components.header')
@extends('components.sidebar')

@section('site-title')
    E-Robot | Dashboard-Donator
@endsection
@section('content')
    <main id="main" class="main">
        <form action="{{ route('postContent.update', $data->id) }}" method="POST" enctype="multipart/form-data"
            class="form-group mt-4 container rounded-4 p-5 shadow" style="border: 1px solid blue">
            <h3> Update Post Content</h3>
            @csrf
            @method('PATCH')
            <div class="row gap-4 mt-5">
                <div>
                    <label for=""> Post Content ID</label>
                    <input type="text" name="id" class="form-control" value="{{ $data->id }}" disabled>
                </div>
                <div>
                    <label for=""> Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $data->title }}">
                </div>
                <div>
                    <label for=""> Image</label>
                    <input type="file" name="image_name" class="form-control">
                    <img src="{{ $data->image_name }}" style="width: 80px" alt="">
                    <input type="hidden" name="old_image_name" value="{{ $data->image_name }}">
                </div>

                <div>
                    <label for="">Category</label>
                    <select class="custom-select w-100 p-2" name="category_id">
                        @php
                            $category = DB::table('categories')->get();
                        @endphp

                        @foreach ($category as $categories)
                            @if ($categories->id  == $data->category_id)
                                <option value="{{ $categories->id }}" selected>{{ $categories->category_name }}</option>

                            @else
                                <option value="{{ $categories->id }}">{{ $categories->category_name }}</option>

                            @endif
                        @endforeach
                    </select>
                </div>


                <div>
                    <label for=""> Description:</label>
                    <textarea name="description" class="form-control" rows="10">{{ $data->description }}</textarea>
                </div> <br>
            </div>

            <a href="{{ route('postContent.index') }}" class=" btn btn-danger" type="button"> Cancel </a>
            <button type="submit" class="btn btn-success"> Update </button>

        </form>
    </main>
@endsection
