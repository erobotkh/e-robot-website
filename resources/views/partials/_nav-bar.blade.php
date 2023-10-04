<style>
    .menu:hover{
        color: black;
        border-bottom: 3px solid red ;
    }
    .vodiapicker{
      display: none; 
    }

    #a img, .btn-select img{
      width: 25px;
      height: 25px;
      border-radius: 50%;
      object-fit: cover;
    }

    #a li{
      list-style: none;
    }

    #a li:hover{
      transform: scale(0.9);
      cursor: pointer;
    }

    /* #a li img{
      margin: 5px;
    } */

   

    /* item list */

    .b{
      display: none;
      max-width: 350px;
      box-shadow: 0 6px 12px rgba(0,0,0,.175);
      border: 1px solid rgba(0,0,0,.15);
      
    }

    .open{
      display: show !important;
    }

    .btn-select{
      /* width: 100%;
      height: 100%; */
      max-width: 350px;
      border-radius: 50%;
      background-color: #fff;
      border: 1px solid #ccc;
      margin-top: 10px;

    
    }
    .btn-select li{
      list-style: none; 
    }
    .btn-select:hover{
      border: 1px solid transparent;  
    }
    .btn-select:focus{
      outline:none;
    }
    


</style>

<!-- header top -->
<div class="headerTop w-full  bg-red-600 flex items-center justify-between lg:px-5 md:px-2 lg:py-1 md:py-1 sm:py-3 ">
  <div class="headerTop_left">
    <div class="lg:flex md:flex items-center font-bold text-[#FFE17B] sm:flex-cols ">
    
      <div class="title text-sm  pr-1 lg:block md:block hidden"> <i class='bx bx-time-five '></i>OPERATION HOURS: </div>
      <div class="title text-[15px]  pr-1 block lg:hidden md:hidden"> <i class='bx bx-time-five '>8:00-17:00 (Daily)</i></div>
      <div class=" time text-sm  text-white lg:block md:block hidden"> 8:00 - 17:00 (Daily)</div>
      
    </div>
  </div>
  <div class="headerTop_right lg:w-[250px] md:w-[28%] h-full flex items-center justify-between text-white font-semibold">
    <a href="/login" class="login flex items-center  p-2 rounded hover:text-red-500">
      <i class='bx bx-log-in  text-[20px]'></i>
      <div  class="lg:block md:block hidden " >Login</div>

    </a>
    <a href="/register" class="register flex items-center  p-2 rounded hover:text-red-500">
      <i class='bx bx-user-circle text-[20px]'></i>
      <div class="lg:block md:block hidden " >Register</div>
    </a>

    <!-- <select class="dropdown text-black p-2 rounded lg:px-4 md:px-2 cursor-pointer bg-red-500  hover:text-white lg:block md:block hidden">
      <option value="English"><div class="w-[50px] h-[50px]" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/1200px-Flag_of_the_United_Kingdom_%281-2%29.svg.png');" ></div></option>
      <option value="Khmer"><div class="w-[50px] h-[50px]" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/1200px-Flag_of_the_United_Kingdom_%281-2%29.svg.png');" ></div></option>
    </select>
    <select class="dropdown text-black rounded text-[15px] cursor-pointer bg-red-500  hover:text-white block lg:hidden md:hidden">
      <option value="English"><div class="w-[50px] h-[50px]" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/1200px-Flag_of_the_United_Kingdom_%281-2%29.svg.png');" ></div></option>
      <option value="Khmer"><div class="w-[50px] h-[50px]" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/1200px-Flag_of_the_United_Kingdom_%281-2%29.svg.png');" ></div></option>
    </select> -->

    <select class="vodiapicker">
            <option value="en" class="test" data-thumbnail="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/1200px-Flag_of_the_United_Kingdom_%281-2%29.svg.png"></option>
            <option value="kh" data-thumbnail="https://mfaic.gov.kh/images/uploads/EPY5PP9DX8H2/1.png"></option>
    </select>

    <div class="lang-select top-3 right-2">
      <button class="btn-select" value=""></button>
      <div class="b absolute z-20">
        <ul id="a" ></ul>
      </div>
    </div>
    
    
  </div>
</div>


<!-- header content -->
<!-- component -->
<nav 
  class=" z-10  relative sticky top-0 w-full" 
  x-data="{open:false,menu:false, lokasi:false}">                         
  <div class="relative bg-white px-5" style="box-shadow: rgba(33, 35, 38, 0.1) 0px 10px 10px -10px; ">
    
    <div class="max-w-[1600px] mx-auto">
      <div class="relative flex items-center justify-end h-20">
        <div class="flex items-center justify-end  ">
          <a class="flex-shrink-0" href="/home">
            <img class="block lg:hidden h-14 w-auto " src="{{asset('./images/logo_erobot-removebg.png')}}" alt="Logo">
            <img class="hidden lg:block h-16 w-auto " src="{{asset('./images/logo_erobot-removebg.png')}}" alt="Logo">
          </a>
          <div class="hidden lg:block">
            <div class="flex" >
                <a href="/home" class="menu border border-[3px] border-white  uppercase ml-4 px-3 py-2   leading-5 text-red-600 font-bold  hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-red-400 "  style="font-family: 'Battambang', cursive;"> Home </a>
                <a href="/resource" class="menu border border-[3px] border-white  uppercase ml-4 px-3 py-2   leading-5 text-red-600 font-bold  hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-red-400 "  style="font-family: 'Battambang', cursive;"> Resources </a>
                <a href="/list_content" class="menu border border-[3px] border-white  uppercase ml-4 px-3 py-2   leading-5 text-red-600 font-bold  hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-red-300 "  style="font-family: 'Battambang', cursive;"> Activity </a>

                <div class="group relative ml-4 border border-[3px] border-white rounded-md  leading-5 text-red-600 font-bold transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-blue-500 ">
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
                            <li class="rounded-sm px-3 py-2 text-xs font-semibold hover:bg-black hover:text-white">Mission, Vision and Value</li>
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
        <div class="flex-1 flex justify-center lg:ml-6 lg:justify-end gap-3 rounded">
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
        
          <button class="bg-red-600 font-bold hidden lg:inline-block rounded-lg hover:bg-red-500 hover:scale-[0.98] hover:rounded-lg hover:transition-[1s] transition-[1s]" style="box-shadow: rgba(0, 0, 0, 0.09) 0px 3px 12px;"> <a href="/donate" class="hover:text-white text-white px-6 py-4 flex items-center flex-col rounded-lg"  style="font-family: 'Battambang', cursive; box-shadow: rgba(0, 0, 0, 0.09) 0px 3px 12px;">Donate</a></button>
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
          <a href="/resource" class="mt-1 block px-3 py-2 rounded-md text-red-600  font-semibold hover:bg-black f hover:text-white focus:outline-none focus:text-white focus:bg-black transition duration-150 ease-in-out"  style="font-family: 'Battambang', cursive;">Resource </a>
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
								class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg group hover:bg-black pl-11">Mission, Vision and Value</a>
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


<script>
  //test for getting url value from attr
// var img1 = $('.test').attr("data-thumbnail");
// console.log(img1);

//test for iterating over child elements
var langArray = [];
$('.vodiapicker option').each(function(){
  var img = $(this).attr("data-thumbnail");
  var text = this.innerText;
  var value = $(this).val();
  var item = '<li><img src="'+ img +'" alt="" value="'+value+'"/><span>'+ text +'</span></li>';
  langArray.push(item);
})

$('#a').html(langArray);

//Set the button value to the first el of the array
$('.btn-select').html(langArray[0]);
$('.btn-select').attr('value', 'en');

//change button stuff on click
$('#a li').click(function(){
   var img = $(this).find('img').attr("src");
   var value = $(this).find('img').attr('value');
   var text = this.innerText;
   var item = '<li><img src="'+ img +'" alt="" /><span>'+ text +'</span></li>';
  $('.btn-select').html(item);
  $('.btn-select').attr('value', value);
  $(".b").toggle();
  //console.log(value);
});

$(".btn-select").click(function(){
        $(".b").toggle();
    });

//check local storage for the lang
var sessionLang = localStorage.getItem('lang');
if (sessionLang){
  //find an item with value of sessionLang
  var langIndex = langArray.indexOf(sessionLang);
  $('.btn-select').html(langArray[langIndex]);
  $('.btn-select').attr('value', sessionLang);
} else {
   var langIndex = langArray.indexOf('ch');
  console.log(langIndex);
  $('.btn-select').html(langArray[langIndex]);
  //$('.btn-select').attr('value', 'en');
}



</script>