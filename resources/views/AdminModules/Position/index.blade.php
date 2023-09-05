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
            </tr>
        </thead>

        <tbody>
            @foreach ($position as $pos)
                <tr align="center" class="fw-bold">

                    <td>{{ $pos->id }}</td>
                    <td>{{ $pos->title }}</td>

                </tr>
            @endforeach


        </tbody>
    </table>



    @include('AdminModules.Position.create')
</main>
