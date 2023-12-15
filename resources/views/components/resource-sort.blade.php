<form action="{{ route('admin.resource.index') }}" class="flex items-center w-full">
    <select id="filter" name="sort"
        class="border-2 h-10 border-gray-300 outline-none cursor-pointer text-sm rounded-l-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
        <option selected value="default">Sorted By</option>

        <option value="titleA-Z">Title (A-Z)</option>
        <option value="titleZ-A">Title (Z-A)</option>
        <option value="latest">Latest Created</option>
        <option value="oldest">Oldest Created</option>


    </select>
    <button class=" rounded-r-md h-10 px-3 text-white font-bold bg-blue-400 text-green-800 uppercase ">Sort</button>

</form>
