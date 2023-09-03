@extends('components.general')
@extends('components.header')
@extends('components.sidebar')

<main id="main" class="main">
    <a class="btn btn-success" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
        aria-controls="offcanvasExample">
        Add Member
    </a>

    <table class="table table-hover mt-3">
        <thead>
            <tr align="center" class="fw-bold">
                <td>ID</td>
                <td>Name</td>
                <td>Bio</td>
                <td>Position</td>
                <td>Team</td>
                <td>Photo</td>
                <td>Action</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($data as $members)
                <tr align="center" class="fw-bold">

                    <td>{{ $members->id }}</td>
                    <td>{{ $members->name }}</td>
                    <td>{{ $members->bio }}</td>
                    <td>{{ $members->member_position_id }}</td>
                    <td>{{ $members->team_id }}</td>
                    <td><img src="{{ $members->profile }}" alt="" width="50px" height="50px"></td>


                    <td class="d-flex gap-2 justify-content-center">

                        <a href="{{ route('member.edit', $members->id) }}" class="btn btn-success"> Edit </a>
                        <a href="{{ route('member.destroy', $members->id) }}" class="btn btn-danger"> Delete </a>


                        {{-- <form action="{{ route('member.destroy', $members->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger"> Delete </button>


                        </form> --}}
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>



    @include('AdminModules.Member.create')
</main>
