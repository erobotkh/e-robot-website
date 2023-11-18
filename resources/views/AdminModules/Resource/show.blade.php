<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="container p-5">
        <div>{{ $resource->title }}<div>
                <div>{{ $resource->image }}<div>
                        <div>{{ $resource->category->category_name }}<div>
                                <div>{!! $resource->description !!}<div>
                                    </div>
</body>

</html>
