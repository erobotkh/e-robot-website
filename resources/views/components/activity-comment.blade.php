{{-- @props(['comments','firstname','lastname','date','sub_comment','sub_profile','sub_name','sub_date']) --}}
@props(['comments','firstname','lastname','date','sub_comment','profile'])

<div class=" py-2 px-3 rounded-md my-3 " >
    <div class="flex items-center ">
        {{-- <img src=" https://img.freepik.com/premium-photo/japanese-girl-cherry-blossom-tree-landscape-anime-manga-illustration_691560-7776.jpg"
            alt="" class="w-[45px] h-[45px] rounded-full mr-3"> --}}
        <img src="{{$profile}}"
            alt="" class="w-[45px] h-[45px] rounded-full mr-3">
        <div class=" w-full">
            <div class="flex items-center justify-between">
                <h1 class="font-bold text-lg  ">{{$firstname.' '.$lastname}}</h1>
                <h1 class="font-light text-sm">{{$date}}</h1>
            </div>
            <p class="">{{$comments}}</p>

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
    <hr>
    {{-- sub comment --}}


    {{-- <x-activity-subComment sub_comment='{{$sub_comment}}'></x-activity-subComment> --}}


</div>
