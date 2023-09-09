@extends('components.general')
@extends('components.header')
@extends('components.sidebar')

<main id="main" class="main">
    <a class="btn btn-success" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
        aria-controls="offcanvasExample">
        Add Member
    </a>

    {{-- <a href="{{ route('member.create') }}"> Add</a> --}}

    <table class="table table-hover mt-3">
        <thead>
            <tr align="center" class="fw-bold">
                <td>ID</td>
                <td>Full Name</td>
                <td>Position</td>
                <td>Team</td>
                <td>Bio</td>
                <td>Photo</td>
                <td>Action</td>
            </tr>
        </thead>

        <tbody>
            {{-- @foreach ($data as $members) --}}

            @foreach ($data as $members)
                <tr align="center" class="fw-bold" style="line-height: 50px">
                    <td>{{ $members->id }}</td>
                    <td>{{ $members->first_name . ' ' . $members->last_name }}</td>
                    <td>{{ $members->title }}</td>
                    <td>{{ $members->name }}</td>
                    <td>{{ $members->bio }}</td>
                    <td><img style="width: 50px; height: 50px" src="{{ 'images/' . $members->profile }}" alt="">
                    </td>

                    <td class="d-flex gap-2 justify-content-center">
                        <div>
                            <a href="{{ route('member.edit', $members->id) }}" class="btn btn-success"> Edit </a>
                        </div>
                        <div>
                            <form action="{{ route('member.destroy', $members->id) }}" method="post">
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



    @include('AdminModules.Member.create')
    {{-- @include('AdminModules.Member.edit') --}}
</main>
