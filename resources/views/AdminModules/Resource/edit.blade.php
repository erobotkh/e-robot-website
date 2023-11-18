<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('metronic/dist/assets/plugins/global/plugins.bundle.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('metronic/dist/assets/css/style.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('metronic/dist/assets/css/custom.css') }}" rel="stylesheet"
        type="text/css">

    <script src="{{ asset('metronic/dist/assets/plugins/global/plugins.bundle.js') }}">
    </script>
    <script src="{{ asset('metronic/dist/assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('metronic/dist/assets/plugins/global/plugins.bundle.js') }}">
    </script>

</head>

<body>
    <main class="p-4">

        <form method="POST" action="{{ route('admin.resource.update', $resource) }}"
            class="flex flex-col gap-2">
            @csrf
            @method('PUT')
            <label for="title" class="form-label required fs-5">Title</label>
            <input name="title" class="p-4 form-control" value="{{ $resource->title }}" />
            @error('title')
                <div><span class="text-xs text-red-500">*{{ $message }}</span></div>
            @enderror
            <label for="image" class="form-label required fs-5">Cover Image</label>
            <input name="image" class="p-4 form-control" value="{{ $resource->image }}" />
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
            <textarea name="description" class=" form-control"
                id="description">{{ $resource->description }}</textarea>
            @error('description')
                <div><span class="text-xs text-red-500">*{{ $message }}</span></div>
            @enderror
            <button type="submit" class="bg-green-400 text-white p-4">Update</button>

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

</body>


</html>
