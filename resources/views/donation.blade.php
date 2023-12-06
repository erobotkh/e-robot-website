<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            <div class="text-[#EB0100] font-xl p-2 text-center text-2xl font-bold">OUR PURPOSE
            </div>
        </div>

    </div>

    <div class="text-justify lg:text-lg font-semibold  sm:text-sm md:text-lg">
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
    <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap:0 md:gap-5 ">
        <!-- <div class="grid grid-cols-2 m-3 sm:w-1/2 h-full">
            <div class="bg-[#EBE0DD] p-3 text-center">
                <img src="./images/QRDollar.jpg" alt="" class="rounded-2xl">
                <div class="mt-2 font-bold sm:text-2xl text-xl">
                    <div>003231640</div>
                    <div>Sreymuch UNG</div>
                </div>
                // <a href=""><button class="px-7 py-2 mt-1 ml-3 rounded-md bg-[#EB0100] font-bold text-white mt-3">Donate
                        Now</button></a>
            </div>
            <div class="bg-[#EBE0DD] p-3 text-center">
                <img src="./images/QRDollar.jpg" alt="" class="rounded-2xl">
                <div class="mt-2 font-bold sm:text-2xl text-xl">
                    <div>003231640</div>
                    <div>Sreymuch UNG</div>
                </div>

                // <a href=""><button class=" px-7 py-2 mt-1 ml-3 rounded-md bg-[#EB0100] font-bold text-white
                    mt-3">Donate
                        Now</button></a>
            </div>
        </div> -->

        <div class="card w-full border-0 ">
            <h1 class="text-center m-5 font-bold text-2xl text-red-700">DONATE US</h1>
            {{-- <div class="dollar1 grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 rounded-lg hover:scale-[1.05] hover:transition-[3s] transition-[3s] relative" style="box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;">
                <div class="qrCode p-2 pr-0 w-auto "><img class="rounded-lg w-[100%]" src="/images/QRDollar.jpg" alt=""></div>
                <div class="">
                    <div class="finanaceDetail font-semibold text-[#0d3d54] pt-3  sm:pl-3 gap-2 ">
                        <div id="switch"class=" flex items-center justify-end absolute top-1 right-2 text-[13px]">
                            <div id="" class="accDollar border border-1 px-2 cursor-pointer bg-red-200">US($)</div>
                            <div id="" class=" accKhmer border border-1 px-2 cursor-pointer">KH(៛)</div>
                        </div>
                        <div class="">
                            <h1 class="text-center  font-bold text-[20px] pb-3 pt-5 recipient">Recipient Informations</h1>
                            <div class="account_number text-[15px] ">Account type: <span class=" pl-2 text-[16px] font-bold"> Dollar( $ ) </span></div>
                            <div class="account_number text-[15px]">Account number:<span class=" pl-2 text-[16px] font-bold"> 003231640 </span></div>
                            <div class="account_name text-[15px]">Recipient name:<span class=" pl-2 text-[16px] font-bold"> Sreymuch UNG </span></div>
                            <div class="position text-[15px]">Position: <span class=" pl-2 text-[16px] font-bold">Finance</span></div>
                        </div>

                    </div>
                    <div class="thanks h-[130px] flex items-center justify-evenly">
                        <span class="text-red-600 font-semibold text-2xl">Thank You!</span>
                        <span class="h-full"><img class="h-full" src="/images/photo_members/sticker-e-robot.png" alt=""></span>
                    </div>
                </div>
            </div>

            <div class="reil grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 rounded-lg hover:scale-[1.05] hover:transition-[3s] transition-[3s] relative" style="box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;">
                <div class="qrCode p-2 pr-0w-auto  "><img class="rounded-lg w-[100%]" src="/images/QRReil.jpg" alt=""></div>
                <div class="">
                    <div class="finanaceDetail font-semibold text-[#0d3d54] pt-3 pl-0 sm:pl-3  sm:px-5 gap-2 ">
                        <div id="switch"class=" flex items-center justify-end absolute top-1 right-1 text-[13px]">
                            <div id="" class="accDollar border border-1 px-2 cursor-pointer">US($)</div>
                            <div id="" class=" accKhmer border border-1 px-2 cursor-pointer bg-red-200">KH(៛)</div>
                        </div>
                        <h1 class="text-center font-bold text-[20px] pb-3 pt-5 recipient">Recipient Informations</h1>
                        <div class="account_number text-[15px] lg:pt-0 sm:pt-0 md:pt-5">Account type: <span class=" pl-2 text-[16px] font-bold"> Reil( ៛ ) </span></div>
                        <div class="account_number text-[15px]">Account number:<span class=" pl-2 text-[16px] font-bold"> 003231640 </span></div>
                        <div class="account_name text-[15px]">Recipient name:<span class=" pl-2 text-[16px] font-bold"> Sreymuch UNG </span></div>
                        <div class="position text-[15px]">Position: <span class=" pl-2 text-[16px] font-bold">Finance</span></div>
                    </div>
                    <div class="thanks h-[130px] flex items-center justify-evenly ">
                        <span class="text-red-600 font-semibold text-2xl">Thank You!</span>
                        <span class="h-full"><img class="h-full" src="/images/photo_members/sticker-e-robot.png" alt=""></span>
                    </div>
                </div>
            </div> --}}
            {{-- @props(['acc_type','qr_code','acc_num','recipient_name','recipient_position']) --}}
            @foreach ($info as $data)
                <x-donation-card acc_type='{{$data->acc_type}}' qr_code='/images/{{$data->qr_code}}' acc_num='{{$data->acc_number}}' recipient_name='{{$data->recipient_name}}' recipient_position='{{$data->recipient_position}}' currency_symbol='{{$data->currency_symbol}}'></x-donation-card>
            @endforeach
        </div>
        <div class="  flex flex-col items-center ">
            <h1 class="  mt-5 font-bold text-3xl text-red-700 w-full text-center">Donator<h1>
                    <div class="flex justify-center  md:w-[500px] sm:w-[380px]">
                        <table class="lg:w-[500px] md:w-[500px] sm:w-[380px] text-center text-[15px]  mt-[30px]  table">

                            <th class="p-2 w-[60%]">Name</th>
                            <th class="p-2 w-[40%]">Date</th>
                        </table>
                    </div>

                    <div class="h-[60vh] flex justify-center  overflow-y-scroll md:w-[500px] sm:w-[380px] ">
                        <table class="lg:w-[500px] md:w-[500px] sm:w-[380px] text-center text-[15px]  table table-striped" style="box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;">
                            @foreach ($donator as $data)
                                <tr class="bg-[#fff]">
                                    <td class="p-2 w-[60%]">{{$data->name}}</td>
                                    <td class="p-2 w-[40%]">{{$data->updated_at}}</td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
        </div>
    </div>
    <article class=" w-full text-center pt-[30px] pb-[100px] text-xl text-red-500"><em>" Every donation, big or small, is a step toward a better world."</em></article>

</x-layout>

<script>
    $(document).ready(function(){

        $('.reil').hide();

        $('.reil_btn').click(()=>{
            $('.reil').show();
            $('.dollar').hide();
        })
        $('.dollar_btn').click(()=>{
            $('.dollar').show();
            $('.reil').hide();
        })
    })
</script>
<!-- </html> -->
