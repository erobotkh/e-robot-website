@props(['department', 'description', 'teamLeader', 'teamMember', 'image' ,'leaderProfile'])

<div class="w-100 rounded-xl pb-8 shadow-lg hover:shadow-xl border">
    <a class="text-decoration-none w-100 pb-8">
        <div class="w-100 h-[175px]  rounded relative">
            <img class="w-full h-full rounded-xl" src="{{asset($image)}}" alt="">
            <div class="grayScreen"></div>
        </div>
        
        <div class="w-100 relative">
            <div class="absolute bg-white rounded-full top-[-30px] left-[5%] w-[100px] h-[100px]">
                <img class="w-full h-full rounded-full border-4 border-white object-fit-contain " src="{{asset($leaderProfile)}}" alt="fff">
            </div>
            <div class="text-gray-600 pt-[10px] pl-[35%] font-semibold text-[20px]">
                {{$teamLeader}}
                <span class="position text-end text-[12px] text-[#dc2626af]">Leader</span>

            </div>
        </div>
        <div class="px-8 mt-[30px] py-3 font-bold text-2xl text-[#DC2626]"><h2>{{$department}}</h2></div>
        <article class="px-8 text-justify">{{$description}}</article>
    </a>
</div>