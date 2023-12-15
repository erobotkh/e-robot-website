@extends('components.general')
@extends('components.header')
@extends('components.sidebar')

@section('site-title')
E-Robot | Resource
@endsection

@section('content')
<main id="main" class="main">

    <div class="flex justify-between items-center gap-4 border-b-2 border-blue-600 mb-4 pb-3 ">
        <div class="text-3xl font-bold uppercase text-blue-600">
            Update Resource
        </div>
        <a href="{{ route('admin.resource.index') }}">
            <button class="text-white font-bold bg-red-600 rounded-md p-2 px-3">
                ◀️ Back
            </button>
        </a>
    </div>
    <form method="POST" action="{{ route('admin.resource.update', $resource) }}"
        class="flex flex-col gap-2" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="title" class="form-label required fs-5">Title</label>
        <input name="title" class="p-4 form-control" value="{{ $resource->title }}" />
        @error('title')
            <div><span class="text-xs text-red-500">*{{ $message }}</span></div>
        @enderror
        <label for="sub" class="form-label required">Sub Title</label>
        <input name="sub_title" class="p-4 form-control" value="{{ $resource->sub_title }}" />
        @error('sub_title')
            <div><span class="text-xs text-red-500">*{{ $message }}</span></div>
        @enderror
        <label for="image" class="form-label required">Cover Image</label>
        <input type="file" name="image" class="p-4 form-control" accept="image/*" />
        <!-- <input type="file" name="image" id="image" > -->
        @error('image')
            <div><span class="text-xs text-red-500">*{{ $message }}</span></div>
        @enderror

        <label for="image" class="form-label required fs-5">Category</label>
        <!-- <input name="category" class="p-4 form-control" value="{{ $resource->category }}" /> -->
        <select name="category_id" class="p-4 form-control">
            @foreach($categories as $category)
                <option value="{{ $category->id }}"
                    {{ old('category_id', $resource->category_id ) == $category->id ? 'selected' : '' }}>
                    {{ $category->category_name }}
                </option>
            @endforeach
        </select>
        @error('category')
            <div><span class="text-xs text-red-500">*{{ $message }}</span></div>
        @enderror
        <label for="description" class="form-label required fs-5">Description</label>
        <textarea name="description" class=" form-control" id="description">{{ $resource->description }}</textarea>
        @error('description')
            <div><span class="text-xs text-red-500">*{{ $message }}</span></div>
        @enderror
        <button type="submit"
            class="bg-green-500 text-white p-3 font-bold rounded text-xl hover:bg-green-600">Update</button>

</main>
<script
    src="{{ asset('metronic/dist/assets/plugins/custom/ckeditor/ckeditor-classicc.bundle.js') }}">
</script>

<script>
    // Ckeditor
    ClassicEditor
        .create(document.querySelector('#description'), {
            ckfinder: {
                uploadUrl: "{{ route('admin.resource.uploadCkEditor.image',['_token'=> csrf_token()]) }}",
            }
        })
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
            console('error')
        });

</script>

@endsection
