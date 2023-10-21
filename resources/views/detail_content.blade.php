<x-layout>
    <div class="flex gap-5 justify-center">
        <div class="detail_wrapper w-[65vw] px-[10vh] pb-[10vh] mt-[7vh]  bg-white rounded"
            style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px; border-top:red solid 5px;">
            <div class="top_section flex items-center justify-between py-2"
                style="border-bottom:rgba(128, 128, 128, 0.308) solid 1px ">
                <div class="profile_section flex items-center justify-center ">
                    <div class="back-icon mr-2">
                        <a href="/list_content#{{$detailContent->id}}">
                            <i class='bx bx-chevron-left text-5xl'></i>
                        </a>
                    </div>
                    <div class="user_profile mr-3">
                        <a href="#">
                            <img class="border rounded-[50%] border-red-300 w-[45px] h-[45px] object-contain"
                                src="{{ asset('./images/photo_members/sticker-e-robot.png') }}" alt="">

                        </a>
                    </div>
                    <div class="user_name text-xl font-[600]">{{$detailContent->last_name.' '.$detailContent->first_name}} </div>
                </div>

                <div class="create_at text-gray-400 text-sm font-[500]">Posted on: {{ date('d-M-Y', strtotime($detailContent->updated_at)) }}</div>
            </div>
            <div class="title text-2xl font-bold pt-8 pb-5 ">
                <h2>{{$detailContent->title}}</h2>
            </div>
            <div class="image mb-8">
                <img class="w-full h-[80vh] object-cover" src="{{ asset('./images/workshop.jpg') }}" alt="">

            </div>
            <article class="description font-semibold text-md text-justify pb-[5vh]">
                {{$detailContent->discription}}
            </article>
            <div class="activity-like-comment  w-full rounded-b flex items-center justify-between pb-2"
                style="border-bottom:rgba(128, 128, 128, 0.308) solid 1px ">
                {{-- <button
                    class="px-2 py-1 border border-white flex items-center justify-between text-white bg-[#EB0100] flex rounded-md  hover:bg-white hover:text-[#EB0100] hover:border-solid hover:border-red-500">
                    <i class='bx bxs-like text-md'></i>
                    Like
                </button> --}}

                <p class="text-[#EB0100] font-semibold"> {{$detailContent->like_count}} likes . {{$detailContent->comment_count}} comments</p>

            </div>
            {{-- comment section --}}
            <div>
                {{-- comment --}}
                @foreach ($comments as $data)
                    <x-activity-comment comments="{{$data->comment_text}}" firstname='{{$data->first_name}}' lastname='{{$data->last_name}}' date='{{$data->updated_at}}'></x-activity-comment>
                @endforeach

            </div>

        </div>

        {{--related post, thumbnail --}}
        <div class="post_thumbnail w-[20vw] mt-[7vh] rounded sticky top-0">
            <h2 class="text-center text-xl font-bold bg-red-600 text-white py-2 rounded mb-1">Related Post</h2>
            @foreach ($thumbnail as $item)
                <x-activit-thumbnail post_id='{{$item->id}}'  banner='./images/workshop.jpg' post_cate_id='{{$detailContent->category_id}}' title='{{$item->title}}' ca='{{$item->c_name}}'></x-activit-thumbnail>
            @endforeach
        </div>

    </div>
</x-layout>

<script>
    let sliderImages = document.querySelectorAll(".slide"),
        arrowLeft = document.querySelector("#arrow-left"),
        arrowRight = document.querySelector("#arrow-right"),
        current = 0;

    // Clear all images
    function reset() {
        for (let i = 0; i < sliderImages.length; i++) {
            sliderImages[i].style.display = "none";
        }
    }

    // Initial slide
    function startSlide() {
        reset();
        sliderImages[0].style.display = "block";
    }

    // Show previous
    function slideLeft() {
        reset();
        sliderImages[current - 1].style.display = "block";
        current--;
    }

    // Show next
    function slideRight() {
        reset();
        sliderImages[current + 1].style.display = "block";
        current++;
    }

    // Left arrow click
    arrowLeft.addEventListener("click", function() {
        if (current === 0) {
            current = sliderImages.length;
        }
        slideLeft();
    });

    // Right arrow click
    arrowRight.addEventListener("click", function() {
        if (current === sliderImages.length - 1) {
            current = -1;
        }
        slideRight();
    });

    startSlide();

    let button = document.querySelector(".like-button");

    button.addEventListener("click", function(e) {
        e.preventDefault();
        this.classList.toggle("active");
        this.classList.add("animated");
        generateClones(this);
    });

    let ReplyBtn = document.querySelector("#reply-btn");
    let Reply = document.querySelector("#reply");
    ReplyBtn.addEventListener("click", function() {
        Reply.style.display = "flex";
    });
</script>


