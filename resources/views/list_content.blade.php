<style>
    .categorySection .category_icon a:hover {
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
        transform: scale(1.05);
    }

</style>
<x-layout>
        {{-- <div class="image_bg"></div> --}}

        <div class="categorySection w-full flex justify-evenly p-10 pb-0">
                @foreach ($category as $item)
                    <div class="category_icon bg-white ">
                        <a href="#{{$item->c_name}}Section " class="w-full flex flex-col items-center justify-center p-2 rounded-md">
                            <div class="icon  w-auto">
                                <?php $item->c_name = strtolower($item->c_name) ?>
                                {{-- <img src="{{url('/images/$item->c_name_icon.png')}}" alt="" class="h-full aspect-square object-contain"> --}}
                            </div>
                            <?php $item->c_name = strtoupper($item->c_name) ?>

                            <div class="name font-bold px-2">{{$item->c_name}}</div>
                        </a>

                    </div>

                @endforeach

        </div>

        <div class="activity-wrapper m-5 ">
            <div class="category">
                @foreach ($category as $item)

                    <div class="category-title" id="{{$item->c_name}}Section">
                        <x-activity-title category="{{$item->c_name}}"></x-activity-title>
                    </div>
                    <div class="activity-card-container grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 gap-5 mt-5 rounded">
                        {{-- <x-activity-card category="knowlegde knowlegde1" post_id="1" banner="./images/workshop.jpg" like="18" comment="27"
                            title="Lorem ipsum dolor sit amet"
                            description="Lorem ipsum dolor sit amet. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, nulla?Lorem ipsum dolor sit amet. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, nulla? Lorem ipsum dolor sit amet. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, nulla?Lorem ipsum dolor sit amet. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, nulla?"></x-activity-card>
                        <x-activity-card category="knowlegde knowlegde2" post_id="1"  banner="./images/workshop.jpg" like="18" comment="27"
                            title="Lorem ipsum dolor sit amet"
                            description="Lorem ipsum dolor sit amet. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, nulla?Lorem ipsum dolor sit amet. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, nulla? Lorem ipsum dolor sit amet. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, nulla?Lorem ipsum dolor sit amet. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, nulla?"></x-activity-card>
                        <x-activity-card category="knowlegde knowlegde3" post_id="1" banner="./images/workshop.jpg" like="18" comment="27"
                            title="Lorem ipsum dolor sit amet"
                            description="Lorem ipsum dolor sit amet. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, nulla?Lorem ipsum dolor sit amet. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, nulla? Lorem ipsum dolor sit amet. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, nulla?Lorem ipsum dolor sit amet. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, nulla?"></x-activity-card> --}}

                        @foreach ($viewActivity as $data)

                            @if ($item->c_id == $data->category_id)
                                <?php $data->image_name = env('DO_URL').$data->image_name ?>
                                <x-activity-card category="{{$item->c_name}} {{$item->c_name.$data->id }}" post_cate_id="{{$data->category_id}}"  post_id="{{$data->id}}" banner="{{$data->image_name}}"
                                    like="{{ $data->like_count }}" comment="{{ $data->comment_count }}"
                                    title="{{ $data->title }}" description="{{ $data->description }}" ></x-activity-card>

                            @endif

                        @endforeach

                    </div>
                    <!-- pagination -->
                    <nav class=" grid justify-items-end mt-5 {{$item->c_name}}Page">
                        <ul class=" inline-flex -space-x-px text-base ">
                            <li>
                                <button id="seeLess{{$item->c_name}}"
                                    class="flex items-center justify-center px-4 lg:h-10 md:h-8 h-[30px] ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Less</button>
                            </li>

                            <li
                                class="flex items-center justify-center px-4 lg:h-10 md:h-8  text-white transition-all duration-200 border border-gray-300 bg-[#EB0100] ">
                                See
                            </li>

                            <li>
                                <button id="seeMore{{$item->c_name}}"
                                    class="flex items-center justify-center px-4 lg:h-10 md:h-8 h-[30px] leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">More</button>
                            </li>
                        </ul>
                    </nav>


                @endforeach



            </div>

        </div>




</x-layout>

<script>
    $(document).ready(function() {

        let numOfCardKnowlegde = $(".knowlegde").length;

        let numMoreKnowlegde = 3;

        function hideCard(category) {
            for (var i = 4; i <= numOfCardKnowlegde; i++) {
                $(category + i).hide();
            }

        }

        function seeMore(category) {
            for (i = 0; i < 3; i++) {
                if (numMoreKnowlegde < (numOfCardKnowlegde)) {
                    numMoreKnowlegde++;
                    $(category + numMoreKnowlegde).fadeIn(300);
                } else {
                    numMoreKnowlegde = numOfCardKnowlegde
                };

            }
        }

        function seeLess(category) {

            for (i = 0; i < 3; i++) {
                if (numMoreKnowlegde <= 3) {
                    numMoreKnowlegde =3
                } else {
                    $(category + numMoreKnowlegde).fadeOut(100);
                    numMoreKnowlegde--;
                }

            }
        }

        // call function section
        hideCard(".knowlegde");
        hideCard(".event");
        hideCard(".workshop");

        $('#seeMoreknowlegde').click(() => {
            seeMore('.knowlegde');

        })



        $('#seeLessknowlegde').click(() => {
            seeLess('.knowlegde');
        })

    })
</script>
