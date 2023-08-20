@props(['department', 'description', 'image'])

<div class="w-100 rounded-xl pb-8 shadow-lg hover:shadow-xl border">
    <a href="text-decoration-none w-100 pb-8 opacity-75">
        <div class="w-100 rounded relative">
            <img class="w-full h-full rounded-xl" src="/images/activity4.jpg" alt="">
       
        </div>
        
        <div class="w-100 relative">
   
            <div class="text-red-600 py-[10px] pl-[40%] font-semibold uppercase text-2xl">
                {{$department}}
            </div>
        </div>

        <article class="px-8 line-clamp-4">{{$description}}</article>
    </a>
</div>