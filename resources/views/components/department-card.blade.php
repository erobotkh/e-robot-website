@props(['department', 'description', 'teamLeader', 'teamMember', 'image'])

<!-- <div class="flex flex-col lg:flex-row gap-5 p-5 hover:p-8 cursor-pointer rounded-xl border-l-4 border-b-2 shadow-xl border-red-600 w-full hover:border-2 hover:border-black transition-all">
    <div class="rounded overflow-hidden lg:w-[30%]"><img class="h-full w-full object-fit" src="{{asset($image)}}" alt="dd"></div>
    <div class="flex flex-col justify-between w-full  gap-4">
        <div>
            <h2 class="text-2xl font-bold text-red-600 uppercase">Department of {{$department}}</h2>
            <p class="text-gray-500 text-xs line-clamp-2 mt-2">{{$description}}</p>
        </div>
        <div class="font-semibold">
            <h3>Team Leader: <span class="text-red-600">{{$teamLeader}}</span></h3>
            <h3>Total number of team member: <span class="text-red-600">{{$teamMember}}</span></h3>
        </div>  
    </div>
</div> -->

<div class="w-100 rounded pb-8 shadow-lg hover:shadow-xl border">
    <a href="text-decoration-none w-100 pb-8 opacity-75">
        <div class="w-100 rounded relative">
            <img class="w-full h-full rounded-xl" src="/images/activity4.jpg" alt="">
            <div class="grayScreen"></div>
        </div>
        
        <div class="w-100 relative">
            <div class="absolute bg-white rounded-full top-[-30px] left-[5%] w-[100px] h-[100px]">
                <img class="w-full h-full rounded-full border-4 border-white " src="/images/blogPost.jpg" alt="fff">
            </div>
            <div class="text-gray-600 pt-[10px] pl-[40%] font-semibold">
                {{$teamLeader}}
            </div>
        </div>
        <div class="px-8 mt-[30px] py-3 font-bold text-2xl"><h2>{{$department}}</h2></div>
        <article class="px-8 line-clamp-4">{{$description}}</article>
    </a>
</div>