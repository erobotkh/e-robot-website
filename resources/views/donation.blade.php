<!-- <!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head> -->
<x-layout>
<style type="text/tailwindcss">
    @layer utilities {
    body{font-family: 'Open Sans','typography';}
        }
        .like-button.active svg path {   
        fill: #B30F10;
        }
</style>
<div class="p-5">
    <div class="w-full grid place-content-center">
        <div class=" ">
            <div class="sm:grid sm:grid-cols-2">
                <img src="./images/charity1.jpg" alt="" class="m-2">
                <img src="./images/charity2.jpg" alt="" class="m-2">
            </div>
            <div class="text-[#EB0100] font-xl p-2 text-center text-2xl font-bold sm:text-3xl">Our purpose
            </div>
        </div>

    </div>

    <div class="text-justify sm:text-xl m-3">
        Welcome to "E-Robot"! We are thrilled to have you here as we embark on a mission to
        make a transformative impact on the lives of young learners in rural Cambodia. Our vision is simple yet
        profound: to bridge the educational gap between urban and rural areas by bringing the wonders of Science,
        Technology, Engineering, and Mathematics (STEM) to every corner of our nation.

        In the heart of Phnom Penh City, students have access to a world of educational opportunities. Many talented
        minds are left behind due to limited resources and access.
        That's where E-Robot comes in.

        Our dedicated team of passionate individuals is committed to changing this narrative. We spend our weekends
        traveling to rural areas, reaching out to eager students who dream of exploring the realms of robotics and STEM.
        Our goal is to ignite their curiosity, nurture their creativity, and provide them with the tools they need to
        succeed.

        However, we can't achieve this alone. We need your support to continue this vision.
    </div>
    <div class="w-full sm:flex ">
        <div class="grid grid-cols-2 m-3 sm:w-1/2 h-full">
            <div class="bg-[#EBE0DD] p-3 text-center">
                <img src="./images/QRDollar.jpg" alt="" class="rounded-2xl">
                <div class="mt-2 font-bold sm:text-2xl text-xl">
                    <div>003231640</div>
                    <div>Sreymuch UNG</div>
                </div>
                <!-- <a href=""><button class="px-7 py-2 mt-1 ml-3 rounded-md bg-[#EB0100] font-bold text-white mt-3">Donate
                        Now</button></a> -->
            </div>
            <div class="bg-[#EBE0DD] p-3 text-center">
                <img src="./images/QRDollar.jpg" alt="" class="rounded-2xl">
                <div class="mt-2 font-bold sm:text-2xl text-xl">
                    <div>003231640</div>
                    <div>Sreymuch UNG</div>
                </div>

                <!-- <a href=""><button class=" px-7 py-2 mt-1 ml-3 rounded-md bg-[#EB0100] font-bold text-white
                    mt-3">Donate
                        Now</button></a> -->
            </div>
        </div>
        <div class="  sm:w-1/2 w-full h-full flex flex-col items-center">
            <h1 class="text-2xl h-[10%] font-bold  py-3">People who donated<h1>
                    <div class=" lg:h-[450px] md:h-[320px] sm:h-[400px] bg-red-400 overflow-y-scroll w-full">
                        <table class="lg:w-[500px] md:w-auto h-full text-center sm:text-xl" style="box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;">
                            <tr class="bg-[#ffff] " >
                                <th class="p-2">Name</th>
                                <th class="p-2">Amount</th>
                                <th class="p-2">Date</th>
                            </tr>
                            <tr class="bg-[#fff]">
                                <td class="p-2">Kimlang</td>
                                <td class="p-2">20 $</td>
                                <td class="p-2">17/03/2023</td>
                            </tr>
                            <tr class="bg-[#fff]">
                                <td class="p-2">Kimlong</td>
                                <td class="p-2">20 $</td>
                                <td class="p-2">17/03/2023</td>
                            </tr>
                            <tr class="bg-[#fff]">
                                <td class="p-2">Farrizart</td>
                                <td class="p-2">20 $</td>
                                <td class="p-2">17/03/2023</td>
                            </tr>
                            <tr class="bg-[#fff]">
                                <td class="p-2">TongMeng</td>
                                <td class="p-2">20 $</td>
                                <td class="p-2">17/03/2023</td>
                            </tr>
                            <tr class="bg-[#fff]">
                                <td class="p-2">Farrizart</td>
                                <td class="p-2">20 $</td>
                                <td class="p-2">17/03/2023</td>
                            </tr>
                            <tr class="bg-[#fff]">
                                <td class="p-2">TongMeng</td>
                                <td class="p-2">20 $</td>
                                <td class="p-2">17/03/2023</td>
                            </tr>
                            <tr class="bg-[#fff]">
                                <td class="p-2">Kimlang</td>
                                <td class="p-2">20 $</td>
                                <td class="p-2">17/03/2023</td>
                            </tr>
                            <tr class="bg-[#fff]">
                                <td class="p-2">Kimlong</td>
                                <td class="p-2">20 $</td>
                                <td class="p-2">17/03/2023</td>
                            </tr>
                            <tr class="bg-[#fff]">
                                <td class="p-2">Farrizart</td>
                                <td class="p-2">20 $</td>
                                <td class="p-2">17/03/2023</td>
                            </tr>
                            <tr class="bg-[#fff]">
                                <td class="p-2">TongMeng</td>
                                <td class="p-2">20 $</td>
                                <td class="p-2">17/03/2023</td>
                            </tr>
                            <tr class="bg-[#fff]">
                                <td class="p-2">Kimlang</td>
                                <td class="p-2">20 $</td>
                                <td class="p-2">17/03/2023</td>
                            </tr>
                            <tr class="bg-[#fff]">
                                <td class="p-2">Kimlong</td>
                                <td class="p-2">20 $</td>
                                <td class="p-2">17/03/2023</td>
                            </tr>
                            <tr class="bg-[#fff]">
                                <td class="p-2">Farrizart</td>
                                <td class="p-2">20 $</td>
                                <td class="p-2">17/03/2023</td>
                            </tr>
                            
                        </table>


                    </div>
        </div>
    </div>
</x-layout>


<!-- </html> -->