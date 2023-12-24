@extends('components.general')
@extends('components.header')
@extends('components.sidebar')

@section('site-title')
    E-Robot | Dashboard-User
@endsection
@section('content')
    <main id="main" class="main">
        <div class="d-flex align-items-center justify-content-between  ">
            <div class="pagetitle">
                <h1>Users</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/admin">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </nav>
            </div>


            {{-- filter --}}
            {{-- <div class="filterSection rounded  d-flex align-items-center justify-content-center gap-5">

                <div class="filterSection d-flex flex-row-reverse position-relative">
                    <button class="btn btn-outline-danger dropdown-toggle"  role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Filter
                    </button>

                    <ul class="dropdown-menu position-absolute" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="/admin/donator?type=">All</a></li>
                    <li><a class="dropdown-item" href="/admin/donator?type=dollar">Dollar $</a></li>
                    <li><a class="dropdown-item" href="/admin/donator?type=reil">Reil ៛</a></li>
                    </ul>
                </div>

            </div> --}}
        </div>


        <hr style="border: 2px solid ">
        <div class=" fw-bold d-flex justify-content-between align-items-center  gap-2 " style="font-size: 13px;">
            <div class="totalUser d-inline-block px-4 py-3  border  border-1 border-danger rounded ">
                <span>Total User: {{$countUser}}</span>
            </div>

            <div class="a mt-3">
                <form class="d-flex" action="{{route('searchUser')}}">
                    <input class="form-control me-2" type="search" placeholder="Search by phone number" aria-label="Search" style="width:500px" name="searchKey">
                    <button class="btn btn-outline-danger" type="submit">Search</button>
                  </form>
            </div>
        </div>

        <table class="table table-hover table-striped  mt-3 table-bordered">
            <thead>
                <tr style="text-align: center">

                    <th>Username</th>
                    <th>Phone number</th>
                    <th>Created </th>
                    {{-- <th>Actions</th> --}}

                </tr>
            </thead>
                @foreach ($users as $item)
                    <tr>
                        <td>{{$item->last_name}} {{$item->first_name}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->created_at}}</td>
                    </tr>

                @endforeach
            <tbody>

            </tbody>
        </table>

    </main>
@endsection
