<form action="{{ route('admin.resource.index') }}">
    <div class="flex items-center  mx-auto text-gray-600 flex-1">
        <input class="border-2 rounded-l-md w-full border-gray-300 bg-white h-10 px-5 pr-16 text-sm focus:outline-none"
            type="search" name="search" placeholder="Search">
        <button type="submit" class="bg-blue-400 text-white uppercase font-md font-bold h-10 px-3 rounded-r-md">
            search
        </button>
    </div>
</form>
