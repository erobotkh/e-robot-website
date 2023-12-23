<x-layout>
    <div class="px-10 md:px-24 py-10">
        <!-- <h1 class="font-bold text-3xl md:text-5xl text-red-600 uppercase mb-5">History of E-robot</h1> -->
        <!-- <div class='font-bold text-3xl md:text-5xl font-bold py-3 mb-5 border-b-2 border-red-600 rounded text-red-600 uppercase '>History of E-robot</div> -->
        <x-about-title title="History of E-robot"/>
        <div>
            <p class="my-3 text-lg">
                E-Robot is a group that provides the opportunity for young people to participate in social work, and scientific work related to new technologies to study and research. Towards the creation of new specific achievements serving the proper development work of the human society.
            <p class="my-3 text-lg">
                E-Robot was created on September 8, 2018, by our team members in the form of free mutual instruction. And then we started to get some projects related to robotics and we also continued with the work of sharing and developing a series of new technologies.
            </p>

        </div>
        <div class="w-full my-8"><img class="object-fit w-full" src={{asset('./images/erobot-cover.jpg')}} alt=""></div>


        <div class="downloadSection flex items-center justify-center border rounded">
            <div class="section1 border  rounded w-[33.33%] flex">
                <div class="logo border flex items-center justify-center w-[50%] border-[red]">
                    <a href="{{url('/images/logo_erobot-removebg.png')}}" class="" target="_blank" download>
                        <img src="{{url('/images/logo_erobot-removebg.png')}}" alt="">
                    </a>
                </div>
                <div class="border flex items-center justify-center   w-[50%] ">
                    <div class="1 border w-[50%] border-b-[red] "></div>
                    <div class="2 border w-[50%] border-t-[red] "></div>
                </div>

            </div>
            <div class="section2 border  rounded w-[33.33%] border-[red]">
                <div class="top">

                </div>
                <div class="center text-center" style="font-weight: bold">We're glad our Logo, Sticker users.</div>
                <div class="bottom"></div>
            </div>
            <div class="section3 border  rounded w-[33.33%] border-[red]"></div>
        </div>

    </div>
</x-layout>
