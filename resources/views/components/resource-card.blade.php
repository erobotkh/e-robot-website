@props(['title','image','description','link'])

<div class="p-4 border shadow-xl rounded">
    <div class="w-100 h-[150px]"><img class="w-full h-full object-fit" src="{{$image}}"/> </div>
    <h2 class="font-semibold text-2xl text-center uppercase mb-5 mt-6">{{$title}}</h2>
    <p class="text-center line-clamp-4 mb-7">{{$description}}.</p>
    <div>
        <a href="{{$link}}">
            <button class="border border-black px-4 py-3 mx-auto flex gap-2 items-center hover:border-red-600 hover:text-red-600 " >Learn More
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                </svg>
            </button>   
        </a>
    </div>
</div>