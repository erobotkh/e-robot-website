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

<div class="departementSection w-full flex rounded-xl flex-col items-center justify-center p-[15px] rounded-sm">
    <div class="departementContainer w-full">
        <div class="departementCard w-full h-[100vh] cursor-pointer relative shadow-xl ">
            <div class="w-full h-full">
                <div class="departementImage w-full h-[55%] relative ">
                                
                    <img class="w-full h-full object-fit-cover" src="{{asset($image)}}" alt="">
                </div>
                            
                <div class="departementDetail  w-[70%] bg-white absolute top-[65%] translate-x-[-50%] translate-y-[-50%] left-[50%] pt-[10px] pl-[20px] pb-[30px] pr-[20px] flex flex-col items-center hover:rounded-md hover:shadow-md">
                    <div class="departementSubtitle font-weight-[700] pb-[20px] text-[#DC2626] text-[28px]"  style="font-family: 'Battambang', cursive;">{{$department}}</div>
                    <article class="aboutdepartement text-center">{{$description}}</article>
                </div>
                            
            </div>
        </div>             
    </div>
</div>
