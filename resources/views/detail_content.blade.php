<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style type="text/tailwindcss">
    @layer utilities {
        body{font-family: 'Open Sans','typography';}
        }
        .like-button.active svg path {   
        fill: #B30F10;
        }
</style>

<body>

    <div class="md:flex md:p-5 ">

        <div class="md:w-1/2 p-5">
            <a href="./list_content">
                <svg class="h-[30px] -ml-10" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                    viewBox="0 0 50 50">
                    <path
                        d="M25,2C12.319,2,2,12.319,2,25s10.319,23,23,23s23-10.319,23-23S37.681,2,25,2z M33.71,32.29c0.39,0.39,0.39,1.03,0,1.42	C33.51,33.9,33.26,34,33,34s-0.51-0.1-0.71-0.29L25,26.42l-7.29,7.29C17.51,33.9,17.26,34,17,34s-0.51-0.1-0.71-0.29	c-0.39-0.39-0.39-1.03,0-1.42L23.58,25l-7.29-7.29c-0.39-0.39-0.39-1.03,0-1.42c0.39-0.39,1.03-0.39,1.42,0L25,23.58l7.29-7.29	c0.39-0.39,1.03-0.39,1.42,0c0.39,0.39,0.39,1.03,0,1.42L26.42,25L33.71,32.29z">
                    </path>
                </svg>
            </a>
            <div class="flex ">
                <div id="arrow-left" class="arrow cursor-pointer"><img
                        src="https://www.svgrepo.com/show/384730/rounded-square-arrow-indicator-left.svg" alt=""
                        class="w-[50px] mt-[100px]">
                </div>
                <div class="w-full">
                    <div class="slide slide1"><img
                            src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png" alt="">
                    </div>
                    <div class="slide slide2"><img
                            src="https://s31606.pcdn.co/wp-content/uploads/2021/04/iStock-1205300906-scaled.jpg" alt="">
                    </div>
                    <div class="slide slide3"><img
                            src="https://unctad.org/sites/default/files/2021-02/tir2021_launchevent_1200x675.jpg"
                            alt="">
                    </div>
                </div>
                <div id="arrow-right" class="arrow cursor-pointer"><img
                        src="https://www.svgrepo.com/show/384728/rounded-square-arrow-indicator-right.svg" alt=""
                        class="w-[50px] mt-[100px]"></div>
            </div>

            <a href="#" class="like-button">
                <button type=""
                    class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                    <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                        xmlns=" http://www.w3.org/2000/svg">
                        <path
                            d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                    </svg>
                    Like
                </button>
            </a>
            <div class="flex justify-between">
                <div class="flex">
                    <img src="https://img.freepik.com/premium-photo/japanese-girl-cherry-blossom-tree-landscape-anime-manga-illustration_691560-7776.jpg"
                        alt="" class="w-[50px] h-[50px] rounded-full">
                    <div>
                        <h1 class="font-bold pt-3 pl-3">Kimlang</h1>
                        <h1 class="font-light text-xs pl-3">1day ago</h1>
                    </div>
                </div>
                <div>
                    <div class="">
                        <button class=" rounded inline-flex " type="button" data-dropdown-toggle="dropdown">

                            <svg class=" w-8 " fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z">
                                </path>
                            </svg>
                        </button>
                        <div class=" hidden bg-white text-base list-none divide-y divide-gray-100 rounded shadow my-4 items-end px-5 -mt-8"
                            id="dropdown">

                            <ul class=" py-1" aria-labelledby="dropdown">
                                <li><a class=" hover:text-blue-600" href="">Edit</a>
                                </li>
                                <li class="">

                                    <div class=" hover:text-red-600">
                                        <button class="btn btn-danger delete">Delete</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-justify">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit adipisci placeat assumenda ea facere
                earum
                cum, dolore recusandae corporis laborum cupiditate, aspernatur ratione dolorum optio, maxime
                possimus
                tempora necessitatibus repellat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                illo voluptatum deserunt sed expedita amet accusamus commodi magnam ullam debitis odit atque quia,
                consequuntur delectus! Placeat magnam voluptatem provident ab.
            </div>
        </div>
        <div class="md:w-1/2 p-5">
            <!-- <div class="flex">
                <img src="https://img.freepik.com/premium-photo/japanese-girl-cherry-blossom-tree-landscape-anime-manga-illustration_691560-7776.jpg"
                    alt="" class="w-[50px] h-[50px] rounded-full">
                <div>
                    <h1 class="font-bold pt-3 pl-3">Kimlang</h1>
                    <h1 class="font-light text-xs pl-3">1day ago</h1>
                </div>
            </div>
            <div>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit adipisci placeat assumenda ea facere earum
                cum, dolore recusandae corporis laborum cupiditate, aspernatur ratione dolorum optio, maxime possimus
                tempora necessitatibus repellat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                illo voluptatum deserunt sed expedita amet accusamus commodi magnam ullam debitis odit atque quia,
                consequuntur delectus! Placeat magnam voluptatem provident ab.
            </div> -->
            <div>
                <div class="flex my-3">
                    <img src="https://img.freepik.com/premium-photo/japanese-girl-cherry-blossom-tree-landscape-anime-manga-illustration_691560-7776.jpg"
                        alt="" class="w-[50px] h-[50px] rounded-full">
                    <div class="flex">
                        <input type="text" placeholder="Write a Comment..."
                            class="px-2 py-2 mt-1 ml-3 rounded-md bg-[#EBE0DD] md:w-[400px] sm:w-[400px] w-[300px]">
                        <button class="px-7 py-2 mt-1 ml-3 rounded-md bg-[#EB0100] font-bold text-white">Post</button>
                    </div>
                </div>
                <div class="font-bold text-lg">
                    Comments
                </div>
                <div class="flex bg-[#EBE0DD] p-2 rounded-md mb-1">
                    <img src="https://img.freepik.com/premium-photo/japanese-girl-cherry-blossom-tree-landscape-anime-manga-illustration_691560-7776.jpg"
                        alt="" class="w-[50px] h-[50px] rounded-full">
                    <div class="">
                        <div class="flex">
                            <h1 class="font-bold pl-3">Kimlang</h1>
                            <h1 class="font-light pl-3">. 1day ago</h1>
                        </div>
                        <p class="pl-3">I think I like this so much</p>
                        <a href="#" id="reply-btn" class="text-xs ml-3">Reply</a>
                        <a href="" class="text-xs text-red-500 ml-3">Delete</a>
                        <div class="flex my-3 hidden" id="reply">
                            <img src="https://img.freepik.com/premium-photo/japanese-girl-cherry-blossom-tree-landscape-anime-manga-illustration_691560-7776.jpg"
                                alt="" class="w-[50px] h-[50px] rounded-full">
                            <div class="flex">
                                <input type="text" placeholder="Write a Comment..."
                                    class="px-2 py-2 mt-1 ml-3 rounded-md bg-[#fff] w-[250px]">
                                <button
                                    class="px-7 py-2 mt-1 ml-3 rounded-md bg-[#EB0100] font-bold text-white">Post</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex bg-[#EBE0DD] p-2 rounded-md mb-1">
                    <img src="https://img.freepik.com/premium-photo/japanese-girl-cherry-blossom-tree-landscape-anime-manga-illustration_691560-7776.jpg"
                        alt="" class="w-[50px] h-[50px] rounded-full">
                    <div class="">
                        <div class="flex">
                            <h1 class="font-bold pl-3">Kimlang</h1>
                            <h1 class="font-light pl-3">. 1day ago</h1>
                        </div>
                        <p class="pl-3">I think I like this so much</p>
                    </div>
                </div>
                <div class="flex bg-[#EBE0DD] p-2 rounded-md mb-1">
                    <img src="https://img.freepik.com/premium-photo/japanese-girl-cherry-blossom-tree-landscape-anime-manga-illustration_691560-7776.jpg"
                        alt="" class="w-[50px] h-[50px] rounded-full">
                    <div class="">
                        <div class="flex">
                            <h1 class="font-bold pl-3">Kimlang</h1>
                            <h1 class="font-light pl-3">. 1day ago</h1>
                        </div>
                        <p class="pl-3">I think I like this so much</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
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
<script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>

</html>