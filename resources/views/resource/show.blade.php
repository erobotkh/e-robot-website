<x-layout>
    <div class="md:w-[85%] lg:w-[75%] mx-auto p-4 lg:p-8 ">
        <main class="w-full shadow-xl p-4 md:p-8 1">
            <div class="text-xl text-center md:text-3xl text-gray-800 font-bold  uppercase"
                style="font-family:Battambang">{{ $resource->title }}
            </div>
            <div class="flex items-center italic justify-center gap-3 text-center mt-6">
                <div class="text-center text-gray-500 "><span class="font-semibold">Published on:</span>
                    {{ $resource->date }},</div>
                <div class="text-center text-gray-500  ">
                    <span class="font-semibold">Category:</span> {{ $resource->category->category_name }}
                </div>

            </div>
            <br>
            <hr>
            <br>
            <div class="md:hidden flex flex-col gap-3 items-center text-red-600">
                <i>Share this resource: </i>
                <!-- AddToAny BEGIN -->
                <div class="a2a_kit a2a_kit_size_32 a2a_default_style ">
                    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                    <a class="a2a_button_facebook"></a>
                    <a class="a2a_button_line"></a>
                    <a class="a2a_button_pinterest"></a>
                    <a class="a2a_button_telegram"></a>
                    <a class="a2a_button_facebook_messenger"></a>
                </div>
                <script async src="https://static.addtoany.com/menu/page.js"></script>
                <!-- AddToAny END -->
            </div>
            <div class="mx-auto my-5"> <img src="{{ $resource->image }}" alt="cover image"
                    class="block mx-auto w-full max-h-[400px] rounded" />
            </div>


            <div id="resource_description" class="text-gray-700">{!! $resource->description !!}</div>

        </main>

        <div class="mb-5">
            <h1 class="font-bold text-2xl uppercase pb-4 border-b-2 border-red-600 my-10 text-red-600">Related Resources
            </h1>
            <div class="grid auto-rows-auto md:grid-cols-3 sm:gap-1 md:gap-3 lg:gap-6">
                @foreach($related_resources as $resource)
                    <x-resource-card title="{{ $resource->title }}" image="{{ $resource->image }}"
                        description="{{ $resource->description }}" subTitle="{{ $resource->sub_title }}"
                        link="{{ route('resource.show', $resource) }}" />
                @endforeach
            </div>
        </div>

        <div class="hidden md:flex flex-col gap-3 items-center text-red-600 fixed top-[200px] left-4">

            <!-- AddToAny BEGIN -->
            <div class="a2a_kit a2a_kit_size_32 a2a_default_style a2a_vertical_style" data-a2a-scroll-show="100,20">
                <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                <a class="a2a_button_facebook"></a>
                <a class="a2a_button_line"></a>
                <a class="a2a_button_pinterest"></a>
                <a class="a2a_button_telegram"></a>
                <a class="a2a_button_facebook_messenger"></a>
            </div>
            <script async src="https://static.addtoany.com/menu/page.js"></script>
            <!-- AddToAny END -->
        </div>

    </div>


</x-layout>
