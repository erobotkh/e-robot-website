@extends('components.general')
@extends('components.header')
@extends('components.sidebar')

<main id="main" class="main">
    <a class="btn btn-success" data-bs-toggle="offcanvas" href="#team" role="button" aria-controls="team">
        Add Team
    </a>

    <table class="table table-hover mt-3">
        <thead>
            <tr align="center" class="fw-bold">
                <td>ID</td>
                <td>Team</td>
                <td>Bio</td>
            </tr>
        </thead>

        {{-- <tbody>
            @foreach ($data as $teams)
                <tr align="center" class="fw-bold">

                    <td>{{ $teams->id }}</td>
                    <td>{{ $teams->team }}</td>
                    <td>{{ $teams->bio }}</td>

                </tr>
            @endforeach


        </tbody> --}}
    </table>



    @include('AdminModules.Team.create')
</main>
