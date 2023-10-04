{{-- @props(['sub_comment','sub_profile','sub_name','sub_date']) --}}
@props(['sub_comment'])
<div class="sub-comment ml-[5%]">
    <div class="flex items-center">
        <img src="https://img.freepik.com/premium-photo/japanese-girl-cherry-blossom-tree-landscape-anime-manga-illustration_691560-7776.jpg"
            alt="" class="w-[35px] h-[35px] rounded-full mr-3">
        <div class=" w-full">
            <div class="flex items-center justify-between">
                <h1 class="font-bold text-lg ">Kimlang</h1>
                <h1 class="font-light text-[12px] ">10 Aug 2023</h1>
            </div>
            <p class=" text-sm">{{$sub_comment}}</p>

            {{-- <div class="flex my-3 hidden" id="reply">
                <img src="https://img.freepik.com/premium-photo/japanese-girl-cherry-blossom-tree-landscape-anime-manga-illustration_691560-7776.jpg"
                    alt="" class="w-[50px] h-[50px] rounded-full">
                <div class="flex">
                    <input type="text" placeholder="Write a Comment..."
                        class="px-2 py-2 mt-1 ml-3 rounded-md bg-[#fff] w-[250px]">
                    <button
                        class="px-7 py-2 mt-1 ml-3 rounded-md bg-[#EB0100] font-bold text-white">Post</button>
                </div>
            </div> --}}
        </div>
    </div>

</div>
