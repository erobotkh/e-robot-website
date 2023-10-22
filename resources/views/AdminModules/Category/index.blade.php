@extends('components.general')
@extends('components.header')
@extends('components.sidebar')

<main id="main" class="main">
    <a class="btn btn-success" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
        aria-controls="offcanvasExample">
        Add Category
    </a>

    <table class="table table-hgober mt-3">
        <thead>
            <tr align="center" class="fw-bold">
                <td>ID</td>
                <td>Category Name</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr align="center" class="fw-bold" style="line-height: 50px">
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->category_name }}</td>

                    <td class="d-flex gap-2 justify-content-center">
                        <div>
                            <a href="{{ route('category.edit', $item->id) }}" class="btn btn-success"> Edit </a>
                        </div>
                        <div>
                            <form action="{{ route('category.destroy', $item->id) }}" method="post">
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
    @include('AdminModules.Category.create')
</main>
