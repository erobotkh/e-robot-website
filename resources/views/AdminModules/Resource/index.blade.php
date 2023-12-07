@extends('components.general')
@extends('components.header')
@extends('components.sidebar')

@section('site-title')
    E-Robot | Resource
@endsection

@section('content')
<main class="p-4 ">

    @if(session()->has('success'))
        <div class="mb-5">{{ session()->get('success') }}</div>
    @endif

    <a href="{{ route('admin.resource.create') }}"
        class="bg-green-500 p-2 rounded text-white mt-5">Create</a>


    <div class="flex flex-col">

        <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead class="bg-white border-b">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    #
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Title
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Category
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Photo
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Description
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Action
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rescources as $data)
                                <tr class="bg-gray-100 border-b">

                                    </td>
                                    <td class="text-sm text-gray-900  px-6 py-4 whitespace-nowrap">
                                        {{ $data->id }}</td>
                                    <td class="text-sm text-gray-900  px-6 py-4 whitespace-nowrap">
                                        {{ $data->title }}</td>
                                    <td class="text-sm text-gray-900  px-6 py-4 whitespace-nowrap">
                                        {{ $data->category->category_name }}</td>
                                    <td class="text-sm text-gray-900  px-6 py-4 whitespace-nowrap">
                                        {{ $data->image }}</td>
                                    <td class="text-sm text-gray-900  px-6 py-4 whitespace-nowrap">{!!
                                        $data->description !!}</td>
                                    <td
                                        class="text-sm text-gray-900  px-6 py-4 whitespace-nowrap flex gap-2 items-center">
                                        <a href="{{ route('admin.resource.show', $data) }}">
                                            <button
                                                class="px-2 py-1.5 bg-yellow-400 rounded text-white">View</button></a>
                                        <a href="{{ route('admin.resource.edit', $data) }}">
                                            <button
                                                class="px-2 py-1.5 bg-green-600 rounded text-white">Edit</button></a>

                                        <form method="POST"
                                            action="{{ route('admin.resource.delete', $data) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="px-2 py-1.5 bg-red-600 rounded text-white">Delete</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection