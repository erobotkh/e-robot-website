<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style type="text/tailwindcss">
    @layer utilities {
        body{font-family: 'kantumruy pro','typography';}
        }
        .like-button.active svg path {   
        fill: #B30F10;
        }
</style>

<body>
    <div class="md:flex md:p-5 ">
        <div class="md:w-1/2 flex">
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
                        src="https://unctad.org/sites/default/files/2021-02/tir2021_launchevent_1200x675.jpg" alt="">
                </div>
            </div>
            <div id="arrow-right" class="arrow cursor-pointer"><img
                    src="https://www.svgrepo.com/show/384728/rounded-square-arrow-indicator-right.svg" alt=""
                    class="w-[50px] mt-[100px]"></div>
        </div>
        <div class="md:w-1/2 p-5">
            <div class="flex">
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
            </div>
            <div>
                <a href="#" class="like-button">
                    <button type=""
                        class="px-2 py-1 border-2 border-solid border-[#504441] flex rounded-lg hover:bg-[#D4C3BF]">
                        <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                        </svg>
                        Like
                    </button>
                </a>
                <div class="flex my-3">
                    <img src="https://img.freepik.com/premium-photo/japanese-girl-cherry-blossom-tree-landscape-anime-manga-illustration_691560-7776.jpg"
                        alt="" class="w-[50px] h-[50px] rounded-full">
                    <div class="flex">
                        <input type="text" placeholder="Write a Comment..."
                            class="px-2 py-2 mt-1 ml-3 rounded-md bg-[#F9EEEC] w-[400px]">
                        <button class="px-7 py-2 mt-1 ml-3 rounded-md bg-[#B30F10] font-bold text-white">Post</button>
                    </div>
                </div>
                <div class="font-bold text-lg">
                    Comments
                </div>
                <div class="flex bg-[#F9EEEC] p-2 rounded-md mb-1">
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
                <div class="flex bg-[#F9EEEC] p-2 rounded-md mb-1">
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
                <div class="flex bg-[#F9EEEC] p-2 rounded-md mb-1">
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
</script>

</html>