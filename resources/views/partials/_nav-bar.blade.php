
<!-- header top -->
<div class="headerTop w-full  bg-red-700 flex items-center justify-between lg:px-5 md:px-2 lg:py-1 md:py-1 sm:py-3 ">
  <div class="headerTop_left">
    <div class="lg:flex md:flex items-center font-bold text-[#FFE17B] sm:flex-cols ">
    
      <div class="title text-sm  pr-1 lg:block md:block hidden"> <i class='bx bx-time-five '></i>OPERATION HOURS: </div>
      <div class="title text-[15px]  pr-1 block lg:hidden md:hidden"> <i class='bx bx-time-five '>8:00-17:00 (Daily)</i></div>
      <div class=" time text-sm  text-white lg:block md:block hidden"> 8:00 - 17:00 (Daily)</div>
      
    </div>
  </div>
  <div class="headerTop_right lg:w-[25%] md:w-[35%] h-full flex items-center justify-between text-white font-semibold">
    <a href="/login" class="login flex items-center hover:bg-red-400 p-2 rounded hover:text-black">
      <i class='bx bx-log-in  text-[20px]'></i>
      <div  class="lg:block md:block hidden " >Login</div>


    </a>
    <a href="/register" class="register flex items-center hover:bg-red-400 p-2 rounded hover:text-black">
      <i class='bx bx-user-circle text-[20px]'></i>
      <div class="lg:block md:block hidden " >Register</div>
    </a>

    <select class="dropdown text-black p-2 rounded lg:px-4 md:px-2 cursor-pointer bg-red-500 hover:bg-red-400 hover:text-white lg:block md:block hidden">
      <option value="English">English</option>
      <option value="Khmer">Khmer</option>
    </select>
    <select class="dropdown text-black rounded text-[15px] cursor-pointer bg-red-500 hover:bg-red-400 hover:text-white block lg:hidden md:hidden">
      <option value="English">English</option>
      <option value="Khmer">Khmer</option>
    </select>
    
  </div>
</div>

<!-- header content -->
<!-- component -->
<nav 
  class=" z-10  relative sticky top-0" 
  x-data="{open:false,menu:false, lokasi:false}">                         
  <div class="relative bg-white px-5" style="box-shadow: rgba(33, 35, 38, 0.1) 0px 10px 10px -10px; ">
    
    <div class="max-w-7xl mx-auto">
      <div class="relative flex items-center justify-end h-20">
        <div class="flex items-center justify-end  ">
          <a class="flex-shrink-0" href="/home">
            <img class="block lg:hidden h-14 w-auto " src="{{asset('./images/logo_erobot-removebg.png')}}" alt="Logo">
            <img class="hidden lg:block h-16 w-auto " src="{{asset('./images/logo_erobot-removebg.png')}}" alt="Logo">
          </a>
          <div class="hidden lg:block">
            <div class="flex" >
                <a href="/home" class="uppercase ml-4 px-3 py-2 rounded-md  leading-5 text-red-600 font-bold hover:bg-black hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-black "  style="font-family: 'Battambang', cursive;"> Home </a>
                <a href="/list_content" class="uppercase ml-4 px-3 py-2 rounded-md  leading-5 text-red-600 font-bold hover:bg-black hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-black "  style="font-family: 'Battambang', cursive;"> Activity </a>

                <div class="group relative ml-4  rounded-md  leading-5 text-red-600 font-bold transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-black ">
                    <button
                        class="outline-none focus:outline-none px-3 rounded-sm flex items-center"
                    >
                        <span class="font-bold flex-1 pr-1 px-3 py-2 uppercase"  style="font-family: 'Battambang', cursive;">About</span>
                        <span>
                        <svg
                            class="fill-current h-4 w-4 transform group-hover:-rotate-180
                            transition duration-150 ease-in-out"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                        >
                            <path
                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                            />
                        </svg>
                        </span>
                    </button>
                    <ul
                        class="bg-white rounded-sm transform scale-0 group-hover:scale-100 absolute 
                    transition duration-150 ease-in-out  left-[10px] origin-top min-w-[200px] shadow-xl"
                    >
                        <a href="/about/history">
                            <li class="rounded-sm px-3 py-2 text-xs font-semibold hover:bg-black hover:text-white">History</li>
                        </a>
                        <a href="/about/mission-vision">
                            <li class="rounded-sm px-3 py-2 text-xs font-semibold hover:bg-black hover:text-white">Mission and Vision</li>
                        </a>
                        <a href="/about/team-leader">
                            <li class="rounded-sm px-3 py-2 text-xs font-semibold hover:bg-black hover:text-white">Team</li>
                        </a>
                        <!-- <a href="/about/team-member">
                            <li class="rounded-sm px-3 py-2 text-xs font-semibold hover:bg-black hover:text-white">Team Member</li>
                        </a> -->
                        <a href="/about/department">
                            <li class="rounded-sm px-3 py-2 text-xs font-semibold hover:bg-black hover:text-white">Department</li>
                        </a>
                    </ul>
                </div>

            </div>
          </div>
        </div>
        <div class="flex-1 flex justify-center lg:ml-6 lg:justify-end gap-3 h-full">
          <!-- <div class="max-w-lg w-full lg:max-w-xs">
            <label for="search" class="sr-only">Search </label>
            <form methode="get" action="#" class="relative z-50">
              <button type="submit" id="searchsubmit" class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                </svg>
              </button>
              <input type="text" name="s" id="s" class="block w-full pl-10 pr-3 py-2   rounded-md leading-5  text-gray-300 placeholder-gray-400 focus:outline-none focus:bg-white focus sm: transition duration-150 ease-in-out border" placeholder="Search">
            </form>
          </div> -->
        
          <button class="bg-red-500 text-white font-bold hidden lg:inline-block hover:bg-red-400 hover:scale-[0.98] hover:rounded hover:transition-[1s] transition-[1s]"> <a href="/donate" class="hover:text-white text-black px-4  flex items-center flex-col"  style="font-family: 'Battambang', cursive; "><img class="w-[50px] h-[40px] object-contain mix-blend-darken" src="/images/donate_logo.jpg" alt="">Donate us</a></button>
          <!-- <button class="px-4 py-2  text-red-600 font-bold hidden lg:inline-block "> 
            <a href="/login" class="flex flex-col justify-center items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <span  style="font-family: 'Battambang', cursive;">Account</span>
            </a>
          </button> -->

        </div>
        <div class="flex lg:hidden">
          <button @click="menu=!menu" class="inline-flex items-center justify-center p-2 rounded-md focus:outline-none focus:bg-black focus:text-white transition duration-150 ease-in-out" aria-label="Main menu" aria-expanded="false">
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
    <div x-show="menu" class="block lg:hidden">
      <ul class="px-2 pt-2 pb-3" >
        <li>
          <a href="/home" class="mt-1 block px-3 py-2 rounded-md text-red-600 font-semibold hover:bg-black f hover:text-white focus:outline-none focus:text-white focus:bg-black transition duration-150 ease-in-out"  style="font-family: 'Battambang', cursive;">Home </a>
        </li>
        <li>
          <a href="/list_content" class="mt-1 block px-3 py-2 rounded-md text-red-600  font-semibold hover:bg-black f hover:text-white focus:outline-none focus:text-white focus:bg-black transition duration-150 ease-in-out"  style="font-family: 'Battambang', cursive;">Activity </a>
        </li>
        <li>
					<button type="button" class="flex items-center w-full font-bold py-2 pr-2 text-base text-red-600 hover:text-white transition duration-75 rounded-lg group hover:bg-black" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                  <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item  style="font-family: 'Battambang', cursive;">About</span>
                  <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
					<ul id="dropdown-example" class="hidden py-2 space-y-2 text-semibold text-red-600 ">
						<li>
							<a href="/about/history"
								class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg group hover:bg-black  pl-11" >History</a>
						</li>
            <li>
							<a href="/about/mission-vision"
								class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg group hover:bg-black pl-11">Mission and Vision</a>
						</li>
						<li>
							<a href="/about/team-leader"
								class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg group hover:bg-black pl-11">Team</a>
						</li>
						<!-- <li>
							<a href="/about/team-member"
								class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg group hover:bg-black pl-11">Team Member</a>
						</li> -->
            <li>
							<a href="/about/department"
								class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg group hover:bg-black pl-11"  style="font-family: 'Battambang', cursive;">Department</a>
						</li>
					</ul>
				</li>
        <li>
          <a href="/donate" class="mt-1 block px-3 py-2 rounded-md text-red-600 font-semibold hover:bg-black f hover:text-white focus:outline-none focus:text-white focus:bg-black transition duration-150 ease-in-out"  style="font-family: 'Battambang', cursive;">Donte Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
