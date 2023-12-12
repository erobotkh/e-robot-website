@extends('components.general')
@extends('components.header')
@extends('components.sidebar')

@section('site-title')
E-Robot | Resource
@endsection

@section('content')
<main id="main" class="main">

    @if(session()->has('success'))
        <div
            class="mb-5 inline-block text-green-600 font-bold bg-transparent border-[1px] border-red-500 rounded-md p-3 ">
            <span class="mr-2">🔔</span>{{ session()->get('success') }}</div>
    @endif

    <div class="flex justify-between items-center gap-4 border-b-2 border-blue-600  mb-4 pb-2">
        <div class="text-3xl font-bold uppercase text-blue-600">
            Resource
        </div>
        <a href="{{ route('admin.resource.create') }}"
            class="p-2 border-[2px] rounded  text-md uppercase font-bold text-xl"> ➕ new</a>
    </div>

    <div class="flex items-center justify-between gap-6 mb-4">
        <div class="flex-1">
            <x-resource-search />
        </div>
        <div>
            <x-resource-sort />
        </div>
        <div>
            <x-resource-filter :categories="$categories" />
        </div>
    </div>


    <div class="flex flex-col">

        <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead class="bg-white border-b font-bold">
                            <tr>
                                <th scope="col" class="text-md outline-none px-6 py-4 text-left">
                                    #
                                </th>
                                <th scope="col" class="text-md outline-none px-6 py-4 text-left">
                                    Title
                                </th>

                                <th scope="col" class="text-md outline-none px-6 py-4 text-left">
                                    Category
                                </th>
                                <th scope="col" class="text-md outline-none px-6 py-4 text-left">
                                    Photo
                                </th>

                                <th scope="col" class="text-md text-center outline-none px-6 py-4 text-left">
                                    Action
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @if($resources->count() == 0)
                                <tr class="bg-gray-100 border-b">
                                    <td class="text-md  text-center text-red-600 font-bold text-xl px-6 py-4 whitespace-nowrap"
                                        colspan="5">
                                        No Data</td>
                                </tr>
                            @endif
                            @php
                                $i = 1;
                            @endphp
                            @foreach($resources as $data)
                                <tr class="bg-gray-100 border-b">
                                    <td class="text-md outline-none  px-6 py-4 whitespace-nowrap">
                                        {{ $i }}</td>
                                    <td class="text-md outline-none  px-6 py-4 whitespace-nowrap">
                                        {{ $data->title }}</td>

                                    <td class="text-md outline-none  px-6 py-4 whitespace-nowrap">
                                        {{ $data->category->category_name }}</td>
                                    <td class="text-md outline-none  px-6 py-4 whitespace-nowrap">
                                        <div><img class="w-[60px] h-[40px]" src="{{ $data->image }}" /></div>
                                    </td>
                                    <td
                                        class="text-sm outline-none  px-6 py-4 whitespace-nowrap flex justify-center gap-2 items-center">
                                        <a href="{{ route('admin.resource.show', $data) }}">
                                            <button
                                                class="px-2 py-1.5 bg-yellow-400 rounded-md text-white">View</button></a>
                                        <a href="{{ route('admin.resource.edit', $data) }}">
                                            <button
                                                class="px-2 py-1.5 bg-green-600 rounded-md text-white">Edit</button></a>

                                        <button class="px-2 py-1.5 bg-red-600 rounded-md text-white"
                                            data-bs-toggle="modal" data-value="{{ $data->id }}"
                                            data-bs-target="#showDelete" id="btn-delete">
                                            Delete</button>
                                        <!--romove Modal -->
                                        <div class="modal fade" id="showDelete" tabindex="-1" aria-labelledby="delete"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="delete">Remove donator</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        Do you really want to delete?
                                                    </div>

                                                    <div class="m-3 p-4 flex items-center gap-4">
                                                        <form method="POST" class="m-0 p-0"
                                                            action="{{ route('admin.resource.delete', $data) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="px-3 py-2 bg-red-600 border-2  border-red-600 rounded-md text-white">Delete</button>
                                                        </form>
                                                        <button type="button" data-bs-dismiss="modal" aria-label="Close"
                                                            class="px-3 py-2 border-2 border-green-600 text-green-500 rounded">Cancle</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-5"> {{ $resources->links() }}</div>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection
