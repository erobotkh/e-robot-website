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

        <form method="POST" action="{{ route('admin.resource.store') }}" class="flex flex-col gap-2">
            @csrf

            <label for="title" class="form-label required">Title</label>
            <input name="title" class="p-4 form-control" value="{{ old('title') }}" />
            @error('title')
                <div><span class="text-xs text-red-500">*{{ $message }}</span></div>
            @enderror
            <label for="image" class="form-label required">Cover Image</label>
            <input name="image" type="file" class="p-4 form-control"  />
            @error('image')
                <div><span class="text-xs text-red-500">*{{ $message }}</span></div>
            @enderror
            <label for="category_id" class="form-label required">Category</label>
            <!-- <input name="category" class="p-4 form-control" value="{{ old('category') }}" /> -->
            <select name="category_id" class="p-4 form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->category_name }}
                    </option>
                @endforeach
            </select>
            @error('category')
                <div><span class="text-xs text-red-500">*{{ $message }}</span></div>
            @enderror
            <label for="description" class="form-label required">Description</label>
            <textarea name="description" class=" form-control"
                id="description">{{ old('description') }}</textarea>
            @error('description')
                <div><span class="text-xs text-red-500">*{{ $message }}</span></div>
            @enderror
            <button type="submit" class="bg-green-400 text-white p-4">Create</button>
        </form>

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
