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
<div>
    <h1 class="text-3xl text-center font-bold bg-[#EB0100] text-white">Donate to Us</h1>
    <div class="sm:flex md:flex w-full p-5 block">
        <div class="sm:w-1/2 md:w-1/2 w-full">
            <div class="flex ">
                <div id="arrow-left" class="arrow cursor-pointer "><img
                        src="https://www.svgrepo.com/show/384730/rounded-square-arrow-indicator-left.svg" alt=""
                        class="w-[50px] mt-[100px] ">
                </div>
                <div class="w-full ">
                    <div class="slide slide1 "><img
                            src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png" alt="">
                        <div class="text-[#EB0100] font-xl p-2 text-center text-2xl font-bold">The caption of image 1
                        </div>
                    </div>
                    <div class="slide slide2"><img
                            src="https://s31606.pcdn.co/wp-content/uploads/2021/04/iStock-1205300906-scaled.jpg" alt="">
                        <div class="text-[#EB0100] font-xl p-2 text-center text-2xl font-bold">The caption of image 2
                        </div>

                    </div>
                    <div class="slide slide3"><img
                            src="https://unctad.org/sites/default/files/2021-02/tir2021_launchevent_1200x675.jpg"
                            alt="">
                        <div class="text-[#EB0100] font-xl p-2 text-center text-2xl font-bold">The caption of image 3
                        </div>
                    </div>
                </div>
                <div id="arrow-right" class="arrow cursor-pointer"><img
                        src="https://www.svgrepo.com/show/384728/rounded-square-arrow-indicator-right.svg" alt=""
                        class="w-[50px] mt-[100px]"></div>
            </div>
            <div class="text-justify">
                ipsum dolor sit amet, consectetur adipisicing elit. Fugiat accusamus veritatis, nesciunt deserunt
                quibusdam amet vero nostrum blanditiis maxime nulla eligendi accusantium sapiente dignissimos saepe a
                earum
                fuga
                consequatur quisquam?Lorem
            </div>
        </div>
        <div class="sm:w-1/2 md:w-1/2 w-full">
            <div class="grid grid-cols-2 m-3">
                <div class="bg-[#EBE0DD] p-3 text-center">
                    <img src="./images/QRDollar.jpg" alt="">
                    <a href=""><button
                            class="px-7 py-2 mt-1 ml-3 rounded-md bg-[#EB0100] font-bold text-white mt-3">Donate
                            Now</button></a>
                </div>
                <div class="bg-[#EBE0DD] p-3 text-center">
                    <img src="./images/QRDollar.jpg" alt="">
                    <a href=""><button
                            class="px-7 py-2 mt-1 ml-3 rounded-md bg-[#EB0100] font-bold text-white mt-3">Donate
                            Now</button></a>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h1 class="text-2xl font-bold text-center py-3">People who donated<h1>
                <table class="flex place-content-center py-3">
                    <tr>
                        <th class="p-2 border-2 border-solid border-[#EB0100]">Name</th>
                        <th class="p-2 border-2 border-solid border-[#EB0100]">Amount</th>
                        <th class="p-2 border-2 border-solid border-[#EB0100]">Method of Donation</th>
                    </tr>
                    <tr>
                        <td class="p-2 border-2 border-solid border-[#EB0100]">So Kimlang</td>
                        <td class="p-2 border-2 border-solid border-[#EB0100]">20 $</td>
                        <td class="p-2 border-2 border-solid border-[#EB0100]">ABA ($)</td>
                    </tr>
                    <tr>
                        <td class="p-2 border-2 border-solid border-[#EB0100]">Chann Kimlong</td>
                        <td class="p-2 border-2 border-solid border-[#EB0100]">20 $</td>
                        <td class="p-2 border-2 border-solid border-[#EB0100]">Cash</td>
                    </tr>
                    <tr>
                        <td class="p-2 border-2 border-solid border-[#EB0100]">Meth Farrizart</td>
                        <td class="p-2 border-2 border-solid border-[#EB0100]">30 $</td>
                        <td class="p-2 border-2 border-solid border-[#EB0100]">ABA ($)</td>
                    </tr>
                    <tr>
                        <td class="p-2 border-2 border-solid border-[#EB0100]">Hai TongMeng</td>
                        <td class="p-2 border-2 border-solid border-[#EB0100]">30 $</td>
                        <td class="p-2 border-2 border-solid border-[#EB0100]">Cash</td>
                    </tr>
                    </tr>
                </table>
    </div>

</div>
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
</script>

</html>