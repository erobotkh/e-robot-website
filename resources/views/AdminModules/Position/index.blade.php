@extends('components.general')
@extends('components.header')
@extends('components.sidebar')

<main id="main" class="main">
    <a class="btn btn-success" data-bs-toggle="offcanvas" href="#position" role="button" aria-controls="position">
        Add Position
    </a>

    <table class="table table-hover mt-3">
        <thead>
            <tr align="center" class="fw-bold">
                <td>ID</td>
                <td>Title</td>
                <td>Action</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($pos as $item)
                <tr align="center" class="fw-bold">
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td class="d-flex gap-2 justify-content-center">
                        <div>
                            <a href="{{ route('position.edit', $item->id) }}" class="btn btn-success"> Edit </a>
                        </div>
                        <div>
                            <form action="{{ route('position.destroy', $item->id) }}" method="post">
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
    {{-- @include('AdminModules.Position.edit') --}}
    @include('AdminModules.Position.create')
    {{-- @include('AdminModules.Position.delete') --}}

</main>
