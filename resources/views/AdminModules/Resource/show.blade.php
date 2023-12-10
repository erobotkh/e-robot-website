@extends('components.general')
@extends('components.header')
@extends('components.sidebar')

@section('site-title')
E-Robot | Resource
@endsection

@section('content')
<main id="main" class="main">
    <div class="flex justify-between items-center gap-4 border-b-2 border-blue-700  mb-4 pb-3 ">
        <div class="text-3xl font-bold uppercase text-blue-700">
            View Resource
        </div>
        <a href="{{ route('admin.resource.index') }}">
            <button class="text-white font-bold bg-red-600 rounded p-2">
                ◀️ Back
            </button>
        </a>
    </div>

    <div class="container p-5">
        <div class="text-3xl font-bold text-center"> {{ $resource->title }}</div>
        <div class="text-2xl mt-6 text-center"> {!! $resource->sub_title !!}</div>
        <div class="text-2xl mt-6 text-center "> {{ $resource->date }}</div>
        <div class="text-center  text-xl">Category: {{ $resource->category->category_name }}</div>
        <div class="mx-auto"> <img src="{{ $resource->image }}" alt="cover image" class="block mx-auto" /></div>

        <br>
        <hr>
        <br>
        <div>{!! $resource->description !!}</div>
    </div>
</main>
@endsection
