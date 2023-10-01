
@extends('components.general')


<main id="main" class="main">

  <x-flash-message />
  <x-card class="max-w-lg mx-auto mt-5">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1 text-red-600">Update a resource</h2>
      <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, incidunt?</p>
    </header>

    <form method="POST" action="{{ route('resource.update',$resource->id) }}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-6 w-full">
          <label for="title" class="inline-block text-lg mb-2">Resource Title</label>
          <input type="text" class="border border-red-500 rounded p-2 w-full text-black" name="title"
            value="{{$resource->title}}" />
            @error('title')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
      </div>

      <div class="mb-6 w-full">
         <label for="category" class="inline-block text-lg mb-2">Category</label>
         <input type="text" class="border border-red-500 rounded p-2 w-full text-black" name="category"
         value="{{$resource->category}}" />
         @error('category')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
      </div>

      <div class="mb-6 w-full">
         <label for="image" class="inline-block text-lg mb-2">Image</label>
         <input type="file" class="border border-red-500 rounded p-2 w-full text-black" name="image"
       />
       @error('image')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
      </div>

      <div class="mb-6 w-full">
        <label for="description" class="inline-block text-lg mb-2">
            Description
        </label>
        <textarea class="border border-red-500 rounded p-2 w-full text-black" name="description" rows="5"
          placeholder="Describe in detail">{{$resource->description}}</textarea>
          @error('description')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
      </div>

      <div class="mb-6 w-full">
        <button type="submit" class="bg-laravel rounded py-2 px-4 border border-red-600 text-white bg-red-600">
          Update Resource
        </button>
        <a href="/resource" class="text-red-600 ml-4"> Back </a>
      </div>
    </form>
  </x-card>

</main>

