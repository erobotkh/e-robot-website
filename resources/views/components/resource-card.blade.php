@props(['title','image','description','subTitle','link'])

<div class="border hover:shadow-2xl shadow-xl rounded flex flex-col">
    <div class="w-full h-[200px]"><img class="w-full h-full " src="{{ $image }}" /> </div>
    <div class="p-4 flex-1 flex flex-col items-center justify-between">
        <div>
            <h2 class="font-bold text-xl text-center uppercase mb-5 mt-6 text-gray-700" style="font-family:Battambang">
                {{ $title }}</h2>
            <div class="text-center text-md text-gray-600 line-clamp-3 mb-7" style="font-family:Battambang">{!!
                $subTitle
                !!}</div>
        </div>
        <div>
            <a href="{{ $link }}">
                <button
                    class="border border-black px-4 py-3 mx-auto flex gap-2 hover:gap-5 transition-all items-center hover:border-red-600 hover:text-red-600 ">Learn
                    More
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                    </svg>
                </button>
            </a>
        </div>
    </div>
</div>
