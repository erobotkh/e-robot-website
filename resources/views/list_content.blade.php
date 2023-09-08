<style>
    .categorySection .category_icon a:hover{
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
        transform: scale(1.05);
    }
</style>
<x-layout>
    <div>
        <div class="categorySection w-full flex justify-evenly p-10 pb-0">
            <div class="category_icon h-[100px] w-[100px] bg-white ">
                <a href="#programSection " class="w-full h-[80%] flex flex-col items-center justify-center p-5 rounded-md" >
                    <div class="icon h-2/3 w-auto">
                        <img src="/images/program_icon.png" alt="" class="h-full aspect-square object-contain">
                    </div>                                          
                    <div class="name">Programs</div>
                </a>
                
            </div>
            <div class="category_icon h-[100px] w-[100px] bg-white   ">
                <a href="#eventSection " class="w-full h-[80%] flex flex-col items-center justify-center p-5 rounded-md" >
                    <div class="icon h-2/3 w-auto">
                        <img src="/images/event_icon.png" alt="" class="h-full aspect-square object-contain">
                    </div>                                          
                    <div class="name">Events</div>
                </a>
                
            </div>
            <div class="category_icon h-[100px] w-[100px] bg-white   ">
                <a href="#KnowledgeSection " class="w-full h-[80%] flex flex-col items-center justify-center p-5 rounded-md" >
                    <div class="icon h-2/3 w-auto">
                        <img src="/images/knowlage_icon.png" alt="" class="h-full aspect-square object-contain">
                    </div>                                          
                    <div class="name">Knowlages</div>
                </a>
                
            </div>
            <div class="category_icon h-[100px] w-[100px] bg-white   ">
                <a href="#activitySection " class="w-full h-[80%] flex flex-col items-center justify-center p-5 rounded-md" >
                    <div class="icon h-2/3 w-auto">
                        <img src="/images/activity_icon.png" alt="" class="h-full aspect-square object-contain">
                    </div>                                          
                    <div class="name">Activity</div>
                </a>
                
            </div>
            
        </div>
    </div>
    <div>
        <div class="p-5 ">
            <!-- Category1 -->
            <div class="knowlage_category">
                <div class="text-[33px] text-[#EB0100] font-bold pb-5" id="KnowledgeSection"  style="font-family: 'Battambang', cursive;">Knowledge</div>
                <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-10 ">

                    <div
                        class="w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                        <a href="/detail_content" class=" w-full h-[80%]">
                            <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                        alt=""
                                        class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                </div>
                                <div class="p-5">
                                    <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">This is the title</h1>
                                    <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                </div>
                            </div>
                        </a>
                        <hr>
                        <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                            <div class="flex justify-between  ">
                                <a href="#" class="like-button">
                                    <button type=""
                                        class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                        <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                            xmlns=" http://www.w3.org/2000/svg">
                                            <path
                                                d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                        </svg>
                                        Like
                                    </button>
                                </a>
                                <a href="#" class="">
                                    <button type=""
                                        class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                            height="20" width="20" class="fill-[#fff] mr-3">
                                            <path
                                                d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                        </svg>
                                        Comment
                                    </button>
                                </a>
                            </div>
                            <div>
                                <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                        <a href="/detail_content" class=" w-full h-[80%]">
                            <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                        alt=""
                                        class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                </div>
                                <div class="p-5">
                                    <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">This is the title</h1>
                                    <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                </div>
                            </div>
                        </a>
                        <hr>
                        <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                            <div class="flex justify-between  ">
                                <a href="#" class="like-button">
                                    <button type=""
                                        class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                        <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                            xmlns=" http://www.w3.org/2000/svg">
                                            <path
                                                d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                        </svg>
                                        Like
                                    </button>
                                </a>
                                <a href="#" class="">
                                    <button type=""
                                        class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                            height="20" width="20" class="fill-[#fff] mr-3">
                                            <path
                                                d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                        </svg>
                                        Comment
                                    </button>
                                </a>
                            </div>
                            <div>
                                <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                        <a href="/detail_content" class=" w-full h-[80%]">
                            <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                        alt=""
                                        class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                </div>
                                <div class="p-5">
                                    <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">This is the title</h1>
                                    <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                </div>
                            </div>
                        </a>
                        <hr>
                        <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                            <div class="flex justify-between  ">
                                <a href="#" class="like-button">
                                    <button type=""
                                        class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                        <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                            xmlns=" http://www.w3.org/2000/svg">
                                            <path
                                                d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                        </svg>
                                        Like
                                    </button>
                                </a>
                                <a href="#" class="">
                                    <button type=""
                                        class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                            height="20" width="20" class="fill-[#fff] mr-3">
                                            <path
                                                d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                        </svg>
                                        Comment
                                    </button>
                                </a>
                            </div>
                            <div>
                                <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                        <a href="/detail_content" class=" w-full h-[80%]">
                            <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                        alt=""
                                        class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                </div>
                                <div class="p-5">
                                    <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">This is the title</h1>
                                    <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                </div>
                            </div>
                        </a>
                        <hr>
                        <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                            <div class="flex justify-between  ">
                                <a href="#" class="like-button">
                                    <button type=""
                                        class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                        <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                            xmlns=" http://www.w3.org/2000/svg">
                                            <path
                                                d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                        </svg>
                                        Like
                                    </button>
                                </a>
                                <a href="#" class="">
                                    <button type=""
                                        class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                            height="20" width="20" class="fill-[#fff] mr-3">
                                            <path
                                                d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                        </svg>
                                        Comment
                                    </button>
                                </a>
                            </div>
                            <div>
                                <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                            </div>
                        </div>
                    </div>

                    <div
                        id="dropMoreKnowlage1" class="knowlageCard w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                        <a href="/detail_content" class=" w-full h-[80%]">
                            <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                        alt=""
                                        class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                </div>
                                <div class="p-5">
                                    <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">This is the title</h1>
                                    <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                </div>
                            </div>
                        </a>
                        <hr>
                        <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                            <div class="flex justify-between  ">
                                <a href="#" class="like-button">
                                    <button type=""
                                        class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                        <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                            xmlns=" http://www.w3.org/2000/svg">
                                            <path
                                                d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                        </svg>
                                        Like
                                    </button>
                                </a>
                                <a href="#" class="">
                                    <button type=""
                                        class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                            height="20" width="20" class="fill-[#fff] mr-3">
                                            <path
                                                d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                        </svg>
                                        Comment
                                    </button>
                                </a>
                            </div>
                            <div>
                                <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                            </div>
                        </div>
                    </div>

                    <div
                        id="dropMoreKnowlage2" class="knowlageCard w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                        <a href="/detail_content" class=" w-full h-[80%]">
                            <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                        alt=""
                                        class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                </div>
                                <div class="p-5">
                                    <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">This is the title</h1>
                                    <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                </div>
                            </div>
                        </a>
                        <hr>
                        <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                            <div class="flex justify-between  ">
                                <a href="#" class="like-button">
                                    <button type=""
                                        class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                        <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                            xmlns=" http://www.w3.org/2000/svg">
                                            <path
                                                d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                        </svg>
                                        Like
                                    </button>
                                </a>
                                <a href="#" class="">
                                    <button type=""
                                        class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                            height="20" width="20" class="fill-[#fff] mr-3">
                                            <path
                                                d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                        </svg>
                                        Comment
                                    </button>
                                </a>
                            </div>
                            <div>
                                <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                            </div>
                        </div>
                    </div>

                    <div
                        id="dropMoreKnowlage3" class="knowlageCard w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                        <a href="/detail_content" class=" w-full h-[80%]">
                            <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                        alt=""
                                        class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                </div>
                                <div class="p-5">
                                    <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">This is the title</h1>
                                    <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                </div>
                            </div>
                        </a>
                        <hr>
                        <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                            <div class="flex justify-between  ">
                                <a href="#" class="like-button">
                                    <button type=""
                                        class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                        <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                            xmlns=" http://www.w3.org/2000/svg">
                                            <path
                                                d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                        </svg>
                                        Like
                                    </button>
                                </a>
                                <a href="#" class="">
                                    <button type=""
                                        class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                            height="20" width="20" class="fill-[#fff] mr-3">
                                            <path
                                                d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                        </svg>
                                        Comment
                                    </button>
                                </a>
                            </div>
                            <div>
                                <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                            </div>
                        </div>
                    </div>

                    <div
                        id="dropMoreKnowlage4" class="knowlageCard w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                        <a href="/detail_content" class=" w-full h-[80%]">
                            <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                        alt=""
                                        class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                </div>
                                <div class="p-5">
                                    <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">This is the title</h1>
                                    <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                </div>
                            </div>
                        </a>
                        <hr>
                        <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                            <div class="flex justify-between  ">
                                <a href="#" class="like-button">
                                    <button type=""
                                        class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                        <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                            xmlns=" http://www.w3.org/2000/svg">
                                            <path
                                                d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                        </svg>
                                        Like
                                    </button>
                                </a>
                                <a href="#" class="">
                                    <button type=""
                                        class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                            height="20" width="20" class="fill-[#fff] mr-3">
                                            <path
                                                d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                        </svg>
                                        Comment
                                    </button>
                                </a>
                            </div>
                            <div>
                                <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                            </div>
                        </div>
                    </div>
                    


                </div>
                <!-- pagination -->
                <nav class=" grid justify-items-end mt-5 knowlagePage">
                    <ul class=" inline-flex -space-x-px text-base h-10">
                        <li>
                            <button id="seeLessKnowlage"
                                class="flex items-center justify-center px-4 h-10 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Less</button>
                        </li>
                        
                        <li
                            class="flex items-center justify-center px-4 h-10 text-white transition-all duration-200 border border-gray-300 bg-[#EB0100] ">See
                        </li>
                        
                        <li>
                            <button id="seeMoreKnowlage"
                                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">More</button>
                        </li>
                    </ul>
                </nav>
            </div>
            

            


            <!-- Category2 -->
            <div class="event_category">
                <div class="text-[33px] text-[#EB0100] font-bold py-5" id="eventSection">Event</div>
                

                <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-10 ">

                        <div
                            class="w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                            <a href="/detail_content" class=" w-full h-[80%]">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                    <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                            alt=""
                                            class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                    </div>
                                    <div class="p-5">
                                        <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">This is the title</h1>
                                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                    </div>
                                </div>
                            </a>
                            <hr>
                            <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                                <div class="flex justify-between  ">
                                    <a href="#" class="like-button">
                                        <button type=""
                                            class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                            <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                                xmlns=" http://www.w3.org/2000/svg">
                                                <path
                                                    d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                            </svg>
                                            Like
                                        </button>
                                    </a>
                                    <a href="#" class="">
                                        <button type=""
                                            class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                                height="20" width="20" class="fill-[#fff] mr-3">
                                                <path
                                                    d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                    id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                            </svg>
                                            Comment
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                            <a href="/detail_content" class=" w-full h-[80%]">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                    <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                            alt=""
                                            class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                    </div>
                                    <div class="p-5">
                                        <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">This is the title</h1>
                                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                    </div>
                                </div>
                            </a>
                            <hr>
                            <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                                <div class="flex justify-between  ">
                                    <a href="#" class="like-button">
                                        <button type=""
                                            class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                            <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                                xmlns=" http://www.w3.org/2000/svg">
                                                <path
                                                    d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                            </svg>
                                            Like
                                        </button>
                                    </a>
                                    <a href="#" class="">
                                        <button type=""
                                            class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                                height="20" width="20" class="fill-[#fff] mr-3">
                                                <path
                                                    d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                    id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                            </svg>
                                            Comment
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                            <a href="/detail_content" class=" w-full h-[80%]">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                    <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                            alt=""
                                            class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                    </div>
                                    <div class="p-5">
                                        <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">This is the title</h1>
                                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                    </div>
                                </div>
                            </a>
                            <hr>
                            <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                                <div class="flex justify-between  ">
                                    <a href="#" class="like-button">
                                        <button type=""
                                            class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                            <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                                xmlns=" http://www.w3.org/2000/svg">
                                                <path
                                                    d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                            </svg>
                                            Like
                                        </button>
                                    </a>
                                    <a href="#" class="">
                                        <button type=""
                                            class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                                height="20" width="20" class="fill-[#fff] mr-3">
                                                <path
                                                    d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                    id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                            </svg>
                                            Comment
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                            <a href="/detail_content" class=" w-full h-[80%]">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                    <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                            alt=""
                                            class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                    </div>
                                    <div class="p-5">
                                        <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">This is the title</h1>
                                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                    </div>
                                </div>
                            </a>
                            <hr>
                            <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                                <div class="flex justify-between  ">
                                    <a href="#" class="like-button">
                                        <button type=""
                                            class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                            <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                                xmlns=" http://www.w3.org/2000/svg">
                                                <path
                                                    d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                            </svg>
                                            Like
                                        </button>
                                    </a>
                                    <a href="#" class="">
                                        <button type=""
                                            class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                                height="20" width="20" class="fill-[#fff] mr-3">
                                                <path
                                                    d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                    id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                            </svg>
                                            Comment
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                                </div>
                            </div>
                        </div>

                        <div
                            id="dropMoreEvent1" class="eventCard w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                            <a href="/detail_content" class=" w-full h-[80%]">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                    <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                            alt=""
                                            class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                    </div>
                                    <div class="p-5">
                                        <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">This is the title</h1>
                                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                    </div>
                                </div>
                            </a>
                            <hr>
                            <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                                <div class="flex justify-between  ">
                                    <a href="#" class="like-button">
                                        <button type=""
                                            class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                            <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                                xmlns=" http://www.w3.org/2000/svg">
                                                <path
                                                    d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                            </svg>
                                            Like
                                        </button>
                                    </a>
                                    <a href="#" class="">
                                        <button type=""
                                            class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                                height="20" width="20" class="fill-[#fff] mr-3">
                                                <path
                                                    d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                    id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                            </svg>
                                            Comment
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                                </div>
                            </div>
                        </div>

                        <div
                            id="dropMoreEvent2" class="eventCard w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                            <a href="/detail_content" class=" w-full h-[80%]">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                    <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                            alt=""
                                            class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                    </div>
                                    <div class="p-5">
                                        <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">This is the title</h1>
                                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                    </div>
                                </div>
                            </a>
                            <hr>
                            <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                                <div class="flex justify-between  ">
                                    <a href="#" class="like-button">
                                        <button type=""
                                            class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                            <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                                xmlns=" http://www.w3.org/2000/svg">
                                                <path
                                                    d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                            </svg>
                                            Like
                                        </button>
                                    </a>
                                    <a href="#" class="">
                                        <button type=""
                                            class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                                height="20" width="20" class="fill-[#fff] mr-3">
                                                <path
                                                    d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                    id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                            </svg>
                                            Comment
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                                </div>
                            </div>
                        </div>

                        <div
                            id="dropMoreEvent3" class="eventCard w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                            <a href="/detail_content" class=" w-full h-[80%]">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                    <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                            alt=""
                                            class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                    </div>
                                    <div class="p-5">
                                        <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">This is the title</h1>
                                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                    </div>
                                </div>
                            </a>
                            <hr>
                            <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                                <div class="flex justify-between  ">
                                    <a href="#" class="like-button">
                                        <button type=""
                                            class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                            <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                                xmlns=" http://www.w3.org/2000/svg">
                                                <path
                                                    d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                            </svg>
                                            Like
                                        </button>
                                    </a>
                                    <a href="#" class="">
                                        <button type=""
                                            class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                                height="20" width="20" class="fill-[#fff] mr-3">
                                                <path
                                                    d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                    id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                            </svg>
                                            Comment
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                                </div>
                            </div>
                        </div>

                        <div
                            id="dropMoreEvent4" class="eventCard w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                            <a href="/detail_content" class=" w-full h-[80%]">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                    <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                            alt=""
                                            class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                    </div>
                                    <div class="p-5">
                                        <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">This is the title</h1>
                                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                    </div>
                                </div>
                            </a>
                            <hr>
                            <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                                <div class="flex justify-between  ">
                                    <a href="#" class="like-button">
                                        <button type=""
                                            class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                            <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                                xmlns=" http://www.w3.org/2000/svg">
                                                <path
                                                    d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                            </svg>
                                            Like
                                        </button>
                                    </a>
                                    <a href="#" class="">
                                        <button type=""
                                            class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                                height="20" width="20" class="fill-[#fff] mr-3">
                                                <path
                                                    d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                    id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                            </svg>
                                            Comment
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                                </div>
                            </div>
                        </div>


                </div>
                <!-- pagination -->
                <nav class=" grid justify-items-end mt-5 eventPage">
                    <ul class=" inline-flex -space-x-px text-base h-10">
                        <li>
                            <button id="seeLessEvent"
                                class="flex items-center justify-center px-4 h-10 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Less</button>
                        </li>
                        
                        <li
                            class="flex items-center justify-center px-4 h-10 text-white transition-all duration-200 border border-gray-300 bg-[#EB0100] ">See
                        </li>
                        
                        <li>
                            <button id="seeMoreEvent"
                                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">More</button>
                        </li>
                    </ul>
                </nav>

                
            </div>
            



            <!-- Category3 -->
            <div class="program_category">
                <div class="text-[33px] text-[#EB0100] font-bold py-5" id="programSection">Program</div>
                <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-10 ">

                        <div
                            class="w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                            <a href="/detail_content" class=" w-full h-[80%]">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                    <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                            alt=""
                                            class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                    </div>
                                    <div class="p-5">
                                        <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">E-STEM</h1>
                                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                    </div>
                                </div>
                            </a>
                            <hr>
                            <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                                <div class="flex justify-between  ">
                                    <a href="#" class="like-button">
                                        <button type=""
                                            class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                            <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                                xmlns=" http://www.w3.org/2000/svg">
                                                <path
                                                    d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                            </svg>
                                            Like
                                        </button>
                                    </a>
                                    <a href="#" class="">
                                        <button type=""
                                            class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                                height="20" width="20" class="fill-[#fff] mr-3">
                                                <path
                                                    d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                    id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                            </svg>
                                            Comment
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                            <a href="/detail_content" class=" w-full h-[80%]">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                    <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                            alt=""
                                            class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                    </div>
                                    <div class="p-5">
                                        <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">Robotic</h1>
                                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                    </div>
                                </div>
                            </a>
                            <hr>
                            <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                                <div class="flex justify-between  ">
                                    <a href="#" class="like-button">
                                        <button type=""
                                            class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                            <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                                xmlns=" http://www.w3.org/2000/svg">
                                                <path
                                                    d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                            </svg>
                                            Like
                                        </button>
                                    </a>
                                    <a href="#" class="">
                                        <button type=""
                                            class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                                height="20" width="20" class="fill-[#fff] mr-3">
                                                <path
                                                    d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                    id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                            </svg>
                                            Comment
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                            <a href="/detail_content" class=" w-full h-[80%]">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                    <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                            alt=""
                                            class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                    </div>
                                    <div class="p-5">
                                        <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">Scratch</h1>
                                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                    </div>
                                </div>
                            </a>
                            <hr>
                            <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                                <div class="flex justify-between  ">
                                    <a href="#" class="like-button">
                                        <button type=""
                                            class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                            <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                                xmlns=" http://www.w3.org/2000/svg">
                                                <path
                                                    d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                            </svg>
                                            Like
                                        </button>
                                    </a>
                                    <a href="#" class="">
                                        <button type=""
                                            class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                                height="20" width="20" class="fill-[#fff] mr-3">
                                                <path
                                                    d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                    id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                            </svg>
                                            Comment
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                            <a href="/detail_content" class=" w-full h-[80%]">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                    <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                            alt=""
                                            class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                    </div>
                                    <div class="p-5">
                                        <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">Canva</h1>
                                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                    </div>
                                </div>
                            </a>
                            <hr>
                            <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                                <div class="flex justify-between  ">
                                    <a href="#" class="like-button">
                                        <button type=""
                                            class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                            <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                                xmlns=" http://www.w3.org/2000/svg">
                                                <path
                                                    d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                            </svg>
                                            Like
                                        </button>
                                    </a>
                                    <a href="#" class="">
                                        <button type=""
                                            class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                                height="20" width="20" class="fill-[#fff] mr-3">
                                                <path
                                                    d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                    id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                            </svg>
                                            Comment
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                                </div>
                            </div>
                        </div>

                        <div
                            id="dropMoreProgram1" class="programCard w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                            <a href="/detail_content" class=" w-full h-[80%]">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                    <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                            alt=""
                                            class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                    </div>
                                    <div class="p-5">
                                        <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">E-Charity</h1>
                                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                    </div>
                                </div>
                            </a>
                            <hr>
                            <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                                <div class="flex justify-between  ">
                                    <a href="#" class="like-button">
                                        <button type=""
                                            class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                            <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                                xmlns=" http://www.w3.org/2000/svg">
                                                <path
                                                    d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                            </svg>
                                            Like
                                        </button>
                                    </a>
                                    <a href="#" class="">
                                        <button type=""
                                            class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                                height="20" width="20" class="fill-[#fff] mr-3">
                                                <path
                                                    d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                    id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                            </svg>
                                            Comment
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                                </div>
                            </div>
                        </div>

                        <div
                            id="dropMoreProgram2" class="programCard w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                            <a href="/detail_content" class=" w-full h-[80%]">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                    <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                            alt=""
                                            class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                    </div>
                                    <div class="p-5">
                                        <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">Sprout of Ideas</h1>
                                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                    </div>
                                </div>
                            </a>
                            <hr>
                            <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                                <div class="flex justify-between  ">
                                    <a href="#" class="like-button">
                                        <button type=""
                                            class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                            <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                                xmlns=" http://www.w3.org/2000/svg">
                                                <path
                                                    d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                            </svg>
                                            Like
                                        </button>
                                    </a>
                                    <a href="#" class="">
                                        <button type=""
                                            class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                                height="20" width="20" class="fill-[#fff] mr-3">
                                                <path
                                                    d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                    id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                            </svg>
                                            Comment
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                                </div>
                            </div>
                        </div>

                        <div
                            id="dropMoreProgram3" class="programCard w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                            <a href="/detail_content" class=" w-full h-[80%]">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                    <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                            alt=""
                                            class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                    </div>
                                    <div class="p-5">
                                        <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">Moblie App</h1>
                                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                    </div>
                                </div>
                            </a>
                            <hr>
                            <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                                <div class="flex justify-between  ">
                                    <a href="#" class="like-button">
                                        <button type=""
                                            class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                            <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                                xmlns=" http://www.w3.org/2000/svg">
                                                <path
                                                    d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                            </svg>
                                            Like
                                        </button>
                                    </a>
                                    <a href="#" class="">
                                        <button type=""
                                            class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                                height="20" width="20" class="fill-[#fff] mr-3">
                                                <path
                                                    d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                    id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                            </svg>
                                            Comment
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                                </div>
                            </div>
                        </div>

                        <div
                            id="dropMoreProgram4" class="programCard w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                            <a href="/detail_content" class=" w-full h-[80%]">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                    <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                            alt=""
                                            class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                    </div>
                                    <div class="p-5">
                                        <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">This is the title</h1>
                                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                    </div>
                                </div>
                            </a>
                            <hr>
                            <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                                <div class="flex justify-between  ">
                                    <a href="#" class="like-button">
                                        <button type=""
                                            class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                            <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                                xmlns=" http://www.w3.org/2000/svg">
                                                <path
                                                    d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                            </svg>
                                            Like
                                        </button>
                                    </a>
                                    <a href="#" class="">
                                        <button type=""
                                            class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                                height="20" width="20" class="fill-[#fff] mr-3">
                                                <path
                                                    d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                    id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                            </svg>
                                            Comment
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                                </div>
                            </div>
                        </div>


                </div>
                <!-- pagination -->
                <nav class=" grid justify-items-end mt-5 programPage">
                    <ul class=" inline-flex -space-x-px text-base h-10">
                        <li>
                            <button id="seeLessProgram"
                                class="flex items-center justify-center px-4 h-10 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Less</button>
                        </li>
                        
                        <li
                            class="flex items-center justify-center px-4 h-10 text-white transition-all duration-200 border border-gray-300 bg-[#EB0100] ">See
                        </li>
                        
                        <li>
                            <button id="seeMoreProgram"
                                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">More</button>
                        </li>
                    </ul>
                </nav>

            
            </div>

            <!-- Category4 -->
            <div class="activity_category">
                <div class="text-[33px] text-[#EB0100] font-bold py-5" id="activitySection">Activity</div>
                <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-10 ">

                        <div
                            class="w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                            <a href="/detail_content" class=" w-full h-[80%]">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                    <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                            alt=""
                                            class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                    </div>
                                    <div class="p-5">
                                        <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">This is the title</h1>
                                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                    </div>
                                </div>
                            </a>
                            <hr>
                            <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                                <div class="flex justify-between  ">
                                    <a href="#" class="like-button">
                                        <button type=""
                                            class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                            <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                                xmlns=" http://www.w3.org/2000/svg">
                                                <path
                                                    d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                            </svg>
                                            Like
                                        </button>
                                    </a>
                                    <a href="#" class="">
                                        <button type=""
                                            class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                                height="20" width="20" class="fill-[#fff] mr-3">
                                                <path
                                                    d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                    id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                            </svg>
                                            Comment
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                            <a href="/detail_content" class=" w-full h-[80%]">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                    <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                            alt=""
                                            class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                    </div>
                                    <div class="p-5">
                                        <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">This is the title</h1>
                                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                    </div>
                                </div>
                            </a>
                            <hr>
                            <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                                <div class="flex justify-between  ">
                                    <a href="#" class="like-button">
                                        <button type=""
                                            class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                            <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                                xmlns=" http://www.w3.org/2000/svg">
                                                <path
                                                    d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                            </svg>
                                            Like
                                        </button>
                                    </a>
                                    <a href="#" class="">
                                        <button type=""
                                            class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                                height="20" width="20" class="fill-[#fff] mr-3">
                                                <path
                                                    d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                    id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                            </svg>
                                            Comment
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                            <a href="/detail_content" class=" w-full h-[80%]">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                    <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                            alt=""
                                            class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                    </div>
                                    <div class="p-5">
                                        <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">This is the title</h1>
                                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                    </div>
                                </div>
                            </a>
                            <hr>
                            <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                                <div class="flex justify-between  ">
                                    <a href="#" class="like-button">
                                        <button type=""
                                            class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                            <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                                xmlns=" http://www.w3.org/2000/svg">
                                                <path
                                                    d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                            </svg>
                                            Like
                                        </button>
                                    </a>
                                    <a href="#" class="">
                                        <button type=""
                                            class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                                height="20" width="20" class="fill-[#fff] mr-3">
                                                <path
                                                    d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                    id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                            </svg>
                                            Comment
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                            <a href="/detail_content" class=" w-full h-[80%]">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                    <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                            alt=""
                                            class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                    </div>
                                    <div class="p-5">
                                        <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">This is the title</h1>
                                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                    </div>
                                </div>
                            </a>
                            <hr>
                            <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                                <div class="flex justify-between  ">
                                    <a href="#" class="like-button">
                                        <button type=""
                                            class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                            <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                                xmlns=" http://www.w3.org/2000/svg">
                                                <path
                                                    d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                            </svg>
                                            Like
                                        </button>
                                    </a>
                                    <a href="#" class="">
                                        <button type=""
                                            class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                                height="20" width="20" class="fill-[#fff] mr-3">
                                                <path
                                                    d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                    id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                            </svg>
                                            Comment
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                                </div>
                            </div>
                        </div>

                        <div
                            id="dropMoreActivity1" class="activityCard w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                            <a href="/detail_content" class=" w-full h-[80%]">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                    <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                            alt=""
                                            class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                    </div>
                                    <div class="p-5">
                                        <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">This is the title</h1>
                                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                    </div>
                                </div>
                            </a>
                            <hr>
                            <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                                <div class="flex justify-between  ">
                                    <a href="#" class="like-button">
                                        <button type=""
                                            class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                            <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                                xmlns=" http://www.w3.org/2000/svg">
                                                <path
                                                    d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                            </svg>
                                            Like
                                        </button>
                                    </a>
                                    <a href="#" class="">
                                        <button type=""
                                            class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                                height="20" width="20" class="fill-[#fff] mr-3">
                                                <path
                                                    d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                    id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                            </svg>
                                            Comment
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                                </div>
                            </div>
                        </div>

                        <div
                            id="dropMoreActivity2" class="activityCard w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                            <a href="/detail_content" class=" w-full h-[80%]">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                    <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                            alt=""
                                            class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                    </div>
                                    <div class="p-5">
                                        <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">This is the title</h1>
                                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                    </div>
                                </div>
                            </a>
                            <hr>
                            <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                                <div class="flex justify-between  ">
                                    <a href="#" class="like-button">
                                        <button type=""
                                            class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                            <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                                xmlns=" http://www.w3.org/2000/svg">
                                                <path
                                                    d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                            </svg>
                                            Like
                                        </button>
                                    </a>
                                    <a href="#" class="">
                                        <button type=""
                                            class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                                height="20" width="20" class="fill-[#fff] mr-3">
                                                <path
                                                    d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                    id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                            </svg>
                                            Comment
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                                </div>
                            </div>
                        </div>

                        <div
                            id="dropMoreActivity3" class="activityCard w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                            <a href="/detail_content" class=" w-full h-[80%]">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                    <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                            alt=""
                                            class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                    </div>
                                    <div class="p-5">
                                        <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">This is the title</h1>
                                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                    </div>
                                </div>
                            </a>
                            <hr>
                            <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                                <div class="flex justify-between  ">
                                    <a href="#" class="like-button">
                                        <button type=""
                                            class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                            <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                                xmlns=" http://www.w3.org/2000/svg">
                                                <path
                                                    d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                            </svg>
                                            Like
                                        </button>
                                    </a>
                                    <a href="#" class="">
                                        <button type=""
                                            class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                                height="20" width="20" class="fill-[#fff] mr-3">
                                                <path
                                                    d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                    id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                            </svg>
                                            Comment
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                                </div>
                            </div>
                        </div>

                        <div
                            id="dropMoreActivity4" class="activityCard w-full lg:h-[75vh] md:h-[70vh] bg-white  rounded-md shadow-2 shadow-sm shadow-[#B2A9A7] hover:shadow-xl hover:scale-105 transition-all transitions-1000">
                            <a href="/detail_content" class=" w-full h-[80%]">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2">
                                    <div><img src="https://vendelux.com/wp-content/uploads/technology-events-2023-guide.png"
                                            alt=""
                                            class="rounded-t-md lg:h-full md:h-full sm:h-2/3 w-full shadow-2 shadow-[#B2A9A7] hover:shadow-xl">
                                    </div>
                                    <div class="p-5">
                                        <h1 class="font-bold text-2xl "  style="font-family: 'Battambang', cursive;">This is the title</h1>
                                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat autem soluta eveniet cupiditate dolorum nobis in ex reprehenderit consequatur aliquam delectus porro quo quod natus harum doloremque rem fugiat illo, ipsum earum? Consequuntur nulla amet itaque maiores? Quisquam, quos nesciunt.</p>

                                    </div>
                                </div>
                            </a>
                            <hr>
                            <div class="h-[20%] lg:flex md:flex  sm:block items-center justify-between ">
                                <div class="flex justify-between  ">
                                    <a href="#" class="like-button">
                                        <button type=""
                                            class="my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374] ">
                                            <svg width="20" height="20" viewBox="0 0 1792 1792" class="fill-[#fff] mr-3"
                                                xmlns=" http://www.w3.org/2000/svg">
                                                <path
                                                    d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z" />
                                            </svg>
                                            Like
                                        </button>
                                    </a>
                                    <a href="#" class="">
                                        <button type=""
                                            class="mr-5 my-5 ml-5 px-2 py-1 border-2 border-solid border-[#EB0100] text-white bg-[#EB0100] flex rounded-lg  hover:bg-[#ff7374]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor"
                                                height="20" width="20" class="fill-[#fff] mr-3">
                                                <path
                                                    d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"
                                                    id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path>
                                            </svg>
                                            Comment
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <p class="mx-5 mb-5"> 7 likes . 3 comments</p>
                                </div>
                            </div>
                        </div>


                </div>
                <!-- pagination -->
                <nav class=" grid justify-items-end mt-5 activityPage">
                    <ul class=" inline-flex -space-x-px text-base h-10">
                        <li>
                            <button id="seeLessActivity"
                                class="flex items-center justify-center px-4 h-10 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Less</button>
                        </li>
                        
                        <li
                            class="flex items-center justify-center px-4 h-10 text-white transition-all duration-200 border border-gray-300 bg-[#EB0100] ">See
                        </li>
                        
                        <li>
                            <button id="seeMoreActivity"
                                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">More</button>
                        </li>
                    </ul>
                </nav>

            
            </div>
            
        </div>
    </div>

    <script>
        let button = document.querySelector(".like-button");
        button.addEventListener("click", function(e) {
            e.preventDefault();
            this.classList.toggle("active");
            this.classList.add("animated");
            generateClones(this);
        });

        $(document).ready(function(){
            // $("#dropMoreKnowlage1").hide();
            // $("#dropMoreKnowlage2").hide();
            // $("#dropMoreKnowlage3").hide();
            // $("#dropMoreKnowlage4").hide();

            let numOfCardKnowlage = $(".knowlageCard").length;
            let numOfCardEvent = $(".eventCard").length;
            let numOfCardProgram = $(".programCard").length;
            let numOfCardActivity = $(".activityCard").length;

            let numMoreKnowlage = 0;
            let numMoreEvent = 0;
            let numMoreProgram = 0;
            let numMoreActivity = 0;


            function hideCard(category){
                for(var i=1;i<=numOfCardKnowlage;i++){
                    $("#dropMore"+category+i).hide();
                }

            }

            function seeMore(category){                
                numMoreKnowlage++;
                $("#dropMore"+category+numMoreKnowlage).fadeIn(300);
                numMoreKnowlage++;
                $("#dropMore"+category+numMoreKnowlage).fadeIn(300);
            }

            function seeLess(category){
                $("#dropMore"+category+numMoreKnowlage).fadeOut(100);  
                numMoreKnowlage--;
                $("#dropMore"+category+numMoreKnowlage).fadeOut(100);
                numMoreKnowlage--;

            }

            hideCard("Knowlage");
            hideCard("Event");
            hideCard("Program");
            hideCard("Activity");

            $('#seeMoreKnowlage').click(()=>{
                seeMore('Knowlage');
            })
            $('#seeMoreEvent').click(()=>{
                seeMore('Event');
            })
            $('#seeMoreProgram').click(()=>{
                seeMore('Program');
            })
            $('#seeMoreActivity').click(()=>{
                seeMore('Activity');
            })

            
            $('#seeLessKnowlage').click(()=>{
                seeLess('Knowlage');
            })
            $('#seeLessEvent').click(()=>{
                seeLess('Event');
            })
            $('#seeLessProgram').click(()=>{
                seeLess('Program');
            })
            $('#seeLessActivity').click(()=>{
                seeLess('Activity');
            })
        })

    </script>

    
</x-layout>
