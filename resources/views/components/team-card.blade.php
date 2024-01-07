@props(['department', 'description', 'teamLeader', 'teamMember', 'image' ,'leaderProfile'])

<div class="w-full rounded-xl shadow-lg hover:shadow-xl border" style="min-height: 40vh; max-height:60vh">
    <a class="text-decoration-none w-full">
        <div class="w-full h-[45%]  rounded relative">
            <img class="w-full h-full rounded-xl " src="{{$image}}" alt="">
            <div class="grayScreen"></div>
        </div>

        <div class="w-full relative">
            <div class="absolute bg-white rounded-full top-[-50px] left-[5%] w-[100px] h-[100px]">
                <img class="w-full h-full rounded-full border-4 border-white object-cover " src="{{$leaderProfile}}" alt="fff">
            </div>
            <div class="text-gray-600  pl-[35%] font-semibold text-[20px] uppercase">
                {{$teamLeader}}
                <div class="position  text-[12px] text-[#dc2626af]">Leader</div>

            </div>
        </div>
        <div class="  px-8 mt-[10px] pb-1 font-bold  text-xl text-[#DC2626] uppercase"><h2>{{$department}}</h2></div>
        <article class="px-8 mb-4 text-justify line-clamp-4">{{$description}}</article>
    </a>
</div>
