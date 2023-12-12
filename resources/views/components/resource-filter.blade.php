@props(['categories'])
    <form id="myForm" action="{{ route('admin.resource.index') }}" class="flex items-center w-full">
        <select id="filter" name="filter"
            class="border-2 h-10 border-gray-300 outline-none cursor-pointer text-sm rounded-l-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
            <option value="default" selected>Filterd By</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
            @endforeach
        </select>
        <button
            class=" rounded-r-md h-10 px-3 text-white font-bold bg-blue-400 text-green-800 uppercase">Filter</button>

    </form>

