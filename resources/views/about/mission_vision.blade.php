<x-layout>
    <div class="flex flex-col md:flex-row justify-center gap-2 p-8 ">
        <div class="mt-4 p-2 w-full">
            <h1 class="text-5xl font-bold text-center text-red-600">Mission</h1>
            <div class="w-[50%] sm:w-[40%] my-8 mx-auto cursor-pointer hover:w-[45%] transition-all duration-300 ease-in-out">
                <img class="object-fit" src={{asset('./images/mission-erobot.png')}} alt="mission-logo">
            </div>
            <div>
                <p class="text-center">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse aspernatur sit dolorem quisquam optio. Beatae officiis nam nulla amet velit? Ab expedita reiciendis aut impedit quam quod, fuga deserunt praesentium.
                </p>
            </div>
        </div>
        <div class="hidden md:inline-block h-100 w-2  bg-red-300"></div>
        <div class="mt-4 p-2 w-full">
            <h1 class="text-5xl font-bold text-center text-red-600">Vision</h1>
            <div class="w-[50%] sm:w-[40%] my-8 mx-auto cursor-pointer hover:w-[45%] transition-all duration-300 ease-in-out ">
                <img class="object-fit" src={{asset('./images/vision-erobot.png')}} alt="vision-logo">
            </div>
            <div>
                <p class="text-center">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse aspernatur sit dolorem quisquam optio. Beatae officiis nam nulla amet velit? Ab expedita reiciendis aut impedit quam quod, fuga deserunt praesentium.
                  
                </p>
            </div>
        </div>
    </div>
</x-layout>