@props(['department', 'description', 'image'])
<!-- <div class="w-100 rounded-xl pb-8 shadow-lg hover:shadow-xl border">
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
</div> -->

<div class="departementSection w-full rounded-sm">
    <div class="departementContainer w-full">
        <div class="departementCard w-full lg:h-[80vh] md:h-[70vh] cursor-pointer relative shadow-xl ">
            <div class="w-full h-full">
                <div class="departementImage w-full h-[65%] relative ">
                                
                    <img class="w-full h-full object-fit-contain" src="{{asset($image)}}" alt="">
                </div>
                            
                <div class="departementDetail  w-[80%] bg-white absolute top-[70%] translate-x-[-50%] translate-y-[-50%] left-[50%] p-[10px] flex flex-col items-center hover:rounded-md hover:shadow-md">
                    <div class="departementSubtitle font-[700] pb-[10px] text-[#DC2626] lg:text-[28px] md:text-[22px] "  style="font-family: 'Battambang', cursive;">{{$department}}</div>
                    <article class="aboutdepartement text-center lg:line-clamp-none md:line-clamp-4 lg:text-[16px] md:text-[14px]">{{$description}}</article>
                </div>
                            
            </div>
        </div>             
    </div>
</div>
