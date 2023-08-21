@props(['department', 'description', 'teamLeader', 'teamMember', 'image'])

<div class="w-100 rounded-xl pb-8 shadow-lg hover:shadow-xl border">
    <a href="text-decoration-none w-100 pb-8 opacity-75">
        <div class="w-100 h-[175px]  rounded relative">
            <img class="w-full h-full rounded-xl" src="{{asset($image)}}" alt="">
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