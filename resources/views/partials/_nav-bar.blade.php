<!-- component -->
<nav 
class="z-0 relative" 
x-data="{open:false,menu:false, lokasi:false}">
  <div class="relative z-10 bg-white shadow-xl">
    <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
      <div class="relative flex items-center justify-between h-20">
        <div class="flex items-center px-2 lg:px-0">
          <a class="flex-shrink-0" href="#">
            <img class="block lg:hidden h-12 w-16 " src="{{asset('./images/logo_erobot-removebg.png')}}" alt="Logo">
            <img class="hidden lg:block h-16 w-auto " src="{{asset('./images/logo_erobot-removebg.png')}}" alt="Logo">
          </a>
          <div class="hidden lg:block">
            <div class="flex">
                <a href="/" class="uppercase ml-4 px-3 py-2 rounded-md  leading-5 text-red-600 font-bold hover:bg-black hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-black "> Home </a>
                <a href="#" class="uppercase ml-4 px-3 py-2 rounded-md  leading-5 text-red-600 font-bold hover:bg-black hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-black "> Activity </a>

                <div class="group relative ml-4  rounded-md  leading-5 text-red-600 font-bold transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-black ">
                    <button
                        class="outline-none focus:outline-none px-3 rounded-sm flex items-center"
                    >
                        <span class="font-bold flex-1 pr-1 px-3 py-2 uppercase">About</span>
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
                            <li class="rounded-sm px-3 py-2 text-xs font-semibold hover:bg-black hover:text-white">Team Leader</li>
                        </a>
                        <a href="/about/team-member">
                            <li class="rounded-sm px-3 py-2 text-xs font-semibold hover:bg-black hover:text-white">Team Member</li>
                        </a>
                        <a href="/about/department">
                            <li class="rounded-sm px-3 py-2 text-xs font-semibold hover:bg-black hover:text-white">Department</li>
                        </a>
                    </ul>
                </div>

            </div>
          </div>
        </div>
        <div class="flex-1 flex justify-center px-2 lg:ml-6 lg:justify-end gap-3">
          <div class="max-w-lg w-full lg:max-w-xs">
            <label for="search" class="sr-only">Search </label>
            <form methode="get" action="#" class="relative z-50">
              <button type="submit" id="searchsubmit" class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                </svg>
              </button>
              <input type="text" name="s" id="s" class="block w-full pl-10 pr-3 py-2   rounded-md leading-5  text-gray-300 placeholder-gray-400 focus:outline-none focus:bg-white focus sm: transition duration-150 ease-in-out border-2 border-red-600" placeholder="Search">
            </form>
          </div>
        
            <button class="px-4 rounded-md border-2 border-red-600 text-red-600 font-bold hidden lg:inline-block"> <a href="/login">Login</a></button>

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
          <a href="/" class="mt-1 block px-3 py-2 rounded-md text-red-600 font-semibold hover:bg-black f hover:text-white focus:outline-none focus:text-white focus:bg-black transition duration-150 ease-in-out">Home </a>
        </li>
        <li>
          <a href="#" class="mt-1 block px-3 py-2 rounded-md text-red-600  font-semibold hover:bg-black f hover:text-white focus:outline-none focus:text-white focus:bg-black transition duration-150 ease-in-out">Activity </a>
        </li>
        <li>
					<button type="button" class="flex items-center w-full font-bold py-2 pr-2 text-base text-red-600 hover:text-white transition duration-75 rounded-lg group hover:bg-black" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                  <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>About</span>
                  <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
					<ul id="dropdown-example" class="hidden py-2 space-y-2 text-semibold text-red-600 ">
						<li>
							<a href="/about/history"
								class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg group hover:bg-black  pl-11">History</a>
						</li>
            <li>
							<a href="/about/mission-vision"
								class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg group hover:bg-black pl-11">Mission and Vision</a>
						</li>
						<li>
							<a href="/about/team-leader"
								class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg group hover:bg-black pl-11">Team Leader</a>
						</li>
						<li>
							<a href="/about/team-member"
								class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg group hover:bg-black pl-11">Team Member</a>
						</li>
            <li>
							<a href="/about/department"
								class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg group hover:bg-black pl-11">Department</a>
						</li>
					</ul>
				</li>
        <li>
          <a href="/login" class="mt-1 block px-3 py-2 rounded-md text-red-600 font-semibold hover:bg-black f hover:text-white focus:outline-none focus:text-white focus:bg-black transition duration-150 ease-in-out">Login </a>
        </li>
      </ul>
    </div>
  </div>
</nav>