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
                <td>Cover</td>
                <td>Action</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($team as $item)
                <tr align="center" class="fw-bold">

                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->bio }}</td>

                    <?php
                        $item->cover = env('DO_URL').$item->cover

                    ?>

                    <td><img style="width: 80px" src="{{ $item->cover }}" alt=""></td>

                    <td class="d-flex gap-2 justify-content-center">
                        <div>
                            <a href="{{ route('team.edit', $item->id) }}" class="btn btn-success"> Edit </a>
                        </div>
                        <div>
                            <form action="{{ route('team.destroy', $item->id) }}" method="post">
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



    @include('AdminModules.Team.create')
</main>
