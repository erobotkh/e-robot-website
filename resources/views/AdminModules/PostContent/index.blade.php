@extends('components.general')
@extends('components.header')
@extends('components.sidebar')

<main id="main" class="main">
    <a class="btn btn-success" data-bs-toggle="offcanvas" href="#postContent" role="button" aria-controls="postContent">
        Add Post Content
    </a>

    <table class="table table-hover mt-3 table-striped ">
        <thead>
            <tr align="center" class="fw-bold">
                <td>ID</td>
                <td>Title</td>
                <td>Category</td>
                <td>Photo</td>
                <td>Description</td>
                <td>Action</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($data as $item)
                <tr align="center" >
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->category_name }}</td>
                    <?php $item->image_name = env('DO_URL').$item->image_name ?>

                    <td><img style="width: 80px" src="{{ $item->image_name }}" alt=""></td>

                    <td>{{ $item->description }}</td>
                    <td class="d-flex gap-2 justify-content-center">
                        <div>
                            <a href="{{ route('postContent.edit', $item->id) }}" class="btn btn-success"> Edit </a>
                        </div>
                        <div>
                            <form action="{{ route('postContent.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"> Delete </button>
                            </form>
                        </div>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @include('AdminModules.PostContent.create')
</main>
