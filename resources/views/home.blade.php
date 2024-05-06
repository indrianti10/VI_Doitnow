@extends('layouts.main')

@section('container')

<!-- banner -->
<div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8 lg:pt-32">
    <div class=" pt-28">
      <div class="lg:ml-20 mt-4 animate-text-banner mx-10 ">
        <h1 class="mb-5 lg:text-[73px] text-4xl font-bold text-[#DD2120]">Do it Now</h1>
        <p class="font-medium text-black lg:text-[24px] text-xl lg:w-[500px]">invites you on an exciting adventure while completing missions and getting attractive rewards!</p>
        
        <a class="group relative inline-flex items-center overflow-hidden rounded-full mt-10 bg-black px-8 py-3  text-white focus:outline-none focus:ring active:bg-black" href="#">
          <span class="absolute -end-full transition-all group-hover:end-4">
            <svg
              class="size-5 rtl:rotate-180"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M17 8l4 4m0 0l-4 4m4-4H3"
              />
              </svg>
          </span>
            <span class="lg:text-[20px] font-bold transition-all group-hover:me-4">Get Reward</span>
        </a>
        <a class="group relative inline-flex items-center overflow-hidden rounded-full mt-10 bg-[#DD2120] px-8 py-3  text-white focus:outline-none focus:ring active:bg-black" href="#">
          <span class="absolute -end-full transition-all group-hover:end-4">
            <svg
              class="size-5 rtl:rotate-180"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M17 8l4 4m0 0l-4 4m4-4H3"
              />
              </svg>
          </span>
            <span class="lg:text-[20px] font-bold transition-all group-hover:me-4">Learn more</span>
        </a>
      </div>
    </div>
    <div class=" lg:ml-24">
      <img src="../img/banner.png" class="animated-image-banner "  alt="">
      <img src="/img/bg1.png" class="mt-[-400px] z-[-20px]" alt="">
    </div>
  </div>
</div>
  <!-- banner -->

  <!-- conten1 -->
  <section class="lg:mt-[-218px] text-center flex items-center justify-center  background lg:h-36 h-44 w-full">
    <h1 class="font-bold text-white lg:text-[69px] text-4xl ">Made for people. Built for productivity.</h1>
    
  </section>
  <!-- conten1 -->

  <!-- content 2 -->
  <section class="mt-20 pt-10 text-center flex justify-center items-center lg:h-96 background1  h-[1000px]">
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mx-20">
      <div class="counter flex flex-col justify-center  items-center py-8 rounded-lg text-3xl font-bold ">
        <img src="../img/Users.png" class="lg:mt-[-10px]" alt="">
        <span id="counter1" class="count lg:text-[76px] text-5xl lg:mb-7 lg:mt-[-32px] ">0 +</span>
        <p>Users Registered</p>
      </div>
      <div class="counter flex flex-col justify-center items-center py-8 rounded-lg text-3xl font-bold lg:mx-24">
        <img src="../img/Money Bag.png" class="" alt="">
        <span id="counter2" class="count  lg:text-[76px] text-5xl  lg:mb-7">0</span>
        <p>Total Earned</p>
        
      </div>
      <div class="counter flex flex-col justify-center items-center py-8 rounded-lg text-3xl font-bold">
        <img src="../img/Handshake Heart.png" alt="">
        <span id="counter3" class="count lg:text-[76px] text-5xl  lg:mb-7">0</span>
        <p>Collaborator</p>
      </div>
    </div>
    
  </section>
  <!-- content 2 -->

  <!-- content 3 -->
  <div class="relative w-full h-screen lg:mt-36 mt-10 ">
    <!-- lingkaran atas -->
    <div class="absolute top-0 right-0 lg:w-28 lg:h-28 w-20 h-20 mt-10 rounded-full bg-white animate-lingkaran animate-bullet-top">
      <div class="flex mt-[-36px] ml-[-56px] lg:w-14 lg:h-14 w-11 h-11 rounded-full bg-white animate-lingkaran animate-bullet-top"></div>
    </div>
    <!-- lingkaran bawah -->
    {{-- <div class="absolute bottom-0  lg:w-28 lg:h-28 w-20 h-20 rounded-full mb-80 lg:mb-40 bg-white animate-bullet-bottom animate-lingkaran">
      <div class="flex mt-[-70px] ml-[90px] lg:w-14 lg:h-14 w-11 h-11 rounded-full bg-white animate-lingkaran animate-bullet-top"></div>
    </div> --}}
    <div  class="lg:mx-32 lg:pt-0 pt-28">
      <h1 class="lg:text-[63px] text-2xl mb-10 mt-[-50px] lg:pt-20 lg:h-36 lg:ml-0 ml-10 font-bold bg-clip-text text-transparent bg-gradient-to-r from-[#010101] to-[#FF0000]  ">What is your possition ?</h1>
      <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8 lg:mt-14 lg:mx-24">
        <a href="  " class="transition duration-300 transform hover:scale-105">
        <div class="lg:h-32 mx-10 lg:mx-0 flex justify-center py-3 lg:py-0 content-center shadow-lg shadow-slate-500 rounded-lg bg-grid ">
          <div class="flex justify-center items-center ">
            <img src="../img/Project Manager.png" class="w-16" alt="">
            <p class="lg:text-4xl text-2xl ml-4 lg:pt-6 font-semibold text-white">a Company </p>
            <i class="fas fa-chevron-right text-2xl lg:text-4xl pt-3 lg:pt-9 ml-5 "></i>
          </div>
          
        </div>
        </a>

        <a href="" class="transition duration-300 transform hover:scale-105">
          <div class="lg:h-32 mx-10 lg:mx-0 flex justify-center py-3 lg:py-0 content-center shadow-lg shadow-slate-500 rounded-lg bg-grid">
            <div class="flex justify-center items-center ">
              <img src="../img/Requirements.png" class="mt-2 w-16   " alt="">
              <p class="lg:text-4xl text-2xl ml-4 lg:pt-6 font-semibold text-white"> a Missionary</p>
              <i class="fas fa-chevron-right text-2xl lg:text-4xl pt-3 lg:pt-9 ml-5 "></i>
            </div>
          </div>
        </a>
      </div>
    </div>
    <img src="/img/bg2.png" class="lg:mt-[-100px} lg:w-full mt-[-120px] w-64" alt="">
  </div>
  <!-- content 3 -->

  <!-- content 4 -->
  <section class="lg:mt-[-200px] mt-[-550px] mx-10 lg:mx-0  ">
    <h2 class=" lg:text-[49px] text-2xl  lg:ml-32 font-bold bg-clip-text text-transparent bg-gradient-to-r from-[#010101]  to-[#FF0000]">Do you as a company?</h2>
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8">
      <div class="h-96 lg:ml-32 text-3xl lg:text-[60px] lg:mt-5 mt-3">
        <h1 class=" font-semibold mb-9">Reach more <span class="text-[#DD2120] font-medium">audience,</span> 
          increase <span class="text-[#DD2120]"> engagement.</span> </h1>
          <a href="" class="border rounded-lg text-[26px] px-12 py-3 bg-[#DD2120] text-white transition custom-btn inline-blocfont-semibold shadow-xl shadow-slate-300">Get Started</a>
      </div>
      <div class="h-32 ">
        <img src="/img/grafik.png" class="" alt="">
      </div>
    </div>
  </section> 
  <!-- content 4 -->

  {{-- content 5 --}}
  <div class="flex justify-end">
    <img src="/img/bg3.png" class="z-[-30px] " alt="">
  </div>

  <div class=" flex justify-center lg:mt-[-350px]">
    <img src="/img/bg4.png" class="z-[-30px] " alt="">
  </div>
  
  <section class=" ml-20 lg:mt-[-200px]">
    
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
      <div class="h-32 ">
        <img src="/img/hp.png" alt="">
      </div>
      
      <div class="h-32  lg:mt-44  lg:col-span-2">      
        <h1 class="text-[49px]">Do You as a missionary? </h1>
        <div class="mt-5 text-[73px] font-semibold mb-10">
          <p>Gamified <span class="text-[#DD2120]">tasks,</span></p>
          <p>swift <span class="text-[#DD2120]">earnings,</span> </p>
          <p>limitless <span class="text-[#DD2120]">missions.</span></p>
        </div>
        <a href="" class="border rounded-lg text-[26px] px-16 py-3 bg-[#DD2120] text-white transition custom-btn inline-blocfont-semibold shadow-xl shadow-slate-300">Get Started</a>

      </div>
      
    </div>
    
    <div class="flex justify-end">
      <img src="/img/bg5.png" class="z-[-30px] lg:mt-96 lg:mr-96 w-[200px]" alt="">
    </div>
  </section>
  
  {{-- content 5 --}}

  {{-- content 6 --}}
    
  <section class="lg:mt-3 mx-20">
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
      <div class="h-72 rounded-lg bg-[#DD2120] lg:col-span-2">
        <h1 class="text-[52px] font-semibold mx-28">Unlock Rewards, Accomplish </h1>
        <p class="text-[52px] font-semibold mx-28">Missions.</p>
        <p class=" justify-end flex mr-5 lg:text-4xl font-bold text-white ">doitnow</p>
      </div>
      <div class="h-72 mt-[-10px] ">
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
          <!-- Carousel wrapper -->
          <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
              <!-- Item 1 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="/img/Property1.png" class="mx-24" alt="...">
              </div>
              <!-- Item 2 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="/img/Property2.png" class="mx-24" alt="...">
              </div>
              <!-- Item 3 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/img/Property3.png" class=" mx-24 " alt="">
              </div>
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/img/Property1.png" class=" mx-24 " alt="">
              </div>
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/img/Property2.png" class=" mx-24 " alt="">
              </div>
          </div>
          <!-- Slider indicators -->
          <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
              <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
              <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
              <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
              <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
              <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- content 6 --}}

  <!-- content card -->
  <section class="lg:mb-5 lg:mt-[100px] mt-[-300px] ">
    <h1 class="pl-5 text-5xl lg:text-[76px] py-6 font-bold text-center mb-6 bg-clip-text text-transparent bg-gradient-to-r from-[#FF0000] to-[#010101]">Why users love Doitnow.id?</h1>
    <div class="flex justify-center">
        <div class="w-3/10 flex items-center">
            <div class="w-full text-right">
                <button onclick="next()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                    </svg>
                </button>
            </div>
        </div>
        <div id="sliderContainer" class="w-full overflow-hidden">
            <ul id="slider" class="flex w-full duration-700">
              <li class="p-3 ">
                <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-3 h-full w-full   ">
                    <p>
                      "Lorem ipsum dolor sit amet consectetur. Condimentum eget vitae ligula sed urna sit sagittis interdum a. Blandit mattis mattis lobortis orci. Facilisis dui sagittis tempor egestas pellentesque eu maecenas. Risus lectus nisl."
                    </p>
                    
                    <div class="flex items-center space-x-4 ">
                      <img
                        alt=""
                        src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                        class="size-14 rounded-full object-cover"
                      />
                      <div>
                        <p class="text-lg font-bold mt-9">Paul Starr</p>
                        <p class="text-[#909B99]">Missionary</p>
                        <div class="flex items-center lg:ml-[400px] ml-18 mt-[-10px] mb-8 space-x-1">
                          <span class="text-yellow-400 lg:text-4xl text-2xl ">&#9733;</span>
                          <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                          <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                          <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                          <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                        </div>
                      </div>
                    </div>
                </div>
              </li>   
              <li class="p-3 ">
                <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-3 h-full w-full   ">
                    <p>
                      "Lorem ipsum dolor sit amet consectetur. Condimentum eget vitae ligula sed urna sit sagittis interdum a. Blandit mattis mattis lobortis orci. Facilisis dui sagittis tempor egestas pellentesque eu maecenas. Risus lectus nisl."
                    </p>
                    
                    <div class="flex items-center space-x-4 ">
                      <img
                        alt=""
                        src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                        class="size-14 rounded-full object-cover"
                      />
                      <div>
                        <p class="text-lg font-bold mt-9">Paul Starr</p>
                        <p class="text-[#909B99]">Missionary</p>
                        <div class="flex items-center lg:ml-[400px] ml-18 mt-[-10px] mb-8 space-x-1">
                          <span class="text-yellow-400 lg:text-4xl text-2xl ">&#9733;</span>
                          <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                          <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                          <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                          <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                        </div>
                      </div>
                    </div>
                </div>
              </li>   
              <li class="p-3 ">
                <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-3 h-full w-full   ">
                    <p>
                      "Lorem ipsum dolor sit amet consectetur. Condimentum eget vitae ligula sed urna sit sagittis interdum a. Blandit mattis mattis lobortis orci. Facilisis dui sagittis tempor egestas pellentesque eu maecenas. Risus lectus nisl."
                    </p>
                    
                    <div class="flex items-center space-x-4 ">
                      <img
                        alt=""
                        src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                        class="size-14 rounded-full object-cover"
                      />
                      <div>
                        <p class="text-lg font-bold mt-9">Paul Starr</p>
                        <p class="text-[#909B99]">Missionary</p>
                        <div class="flex items-center lg:ml-[400px] ml-18 mt-[-10px] mb-8 space-x-1">
                          <span class="text-yellow-400 lg:text-4xl text-2xl ">&#9733;</span>
                          <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                          <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                          <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                          <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                        </div>
                      </div>
                    </div>
                </div>
              </li>   
              <li class="p-3 ">
                <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-3 h-full w-full   ">
                    <p>
                      "Lorem ipsum dolor sit amet consectetur. Condimentum eget vitae ligula sed urna sit sagittis interdum a. Blandit mattis mattis lobortis orci. Facilisis dui sagittis tempor egestas pellentesque eu maecenas. Risus lectus nisl."
                    </p>
                    
                    <div class="flex items-center space-x-4 ">
                      <img
                        alt=""
                        src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                        class="size-14 rounded-full object-cover"
                      />
                      <div>
                        <p class="text-lg font-bold mt-9">Paul Starr</p>
                        <p class="text-[#909B99]">Missionary</p>
                        <div class="flex items-center lg:ml-[400px] ml-18 mt-[-10px] mb-8 space-x-1">
                          <span class="text-yellow-400 lg:text-4xl text-2xl ">&#9733;</span>
                          <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                          <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                          <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                          <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                        </div>
                      </div>
                    </div>
                </div>
              </li>   
             
                
            </ul>
        </div>
        <div class="w-3/10 flex items-center">
            <div class="w-full">
                <button onclick="prev()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

  <!-- content card -->

  <!-- patner -->
  <div class="relative w-full h-screen lg:mt-10 mt-10 ">
    <!-- lingkaran atas -->
    <div class="absolute top-0 right-0 lg:w-40 lg:h-40 w-20 h-20 lg:mt-[-60px] mt-[-200px] rounded-full bg-white animate-lingkaran animate-bullet-top">
      <div class="flex lg:mt-20 lg:ml-[-90px] ml-[-90px] lg:w-14 lg:h-14 w-11 h-11 rounded-full bg-white animate-lingkaran animate-bullet-top">
        <div class="flex lg:mt-[-60px] lg:ml-[-70px] lg:w-10 lg:h-10 w-11 h-11 rounded-full bg-white animate-lingkaran animate-bullet-top">
        </div>
      </div>
    </div>
    <!-- lingkaran bawah -->
    <div class="absolute bottom-0 right-0 lg:ml-[1300px] lg:w-48 lg:h-48 w-44 h-44 rounded-full mb-72 lg:mb-16 bg-white animate-bullet-bottom animate-lingkaran">
    </div>
    <div class="grid grid-cols-1 gap-1 lg:grid-cols-3 lg:gap-8 lg:pt-56 mt-64 ">
      <div class="">
        <div class="relative">
          <img src="../img/Polygon 1.png" class="lg:mt-[-200px] mt-[-180px] lg:w-[600px] w-72 absolute top-0 left-0 z-10 animate-slide-in  " alt="">
          <img src="../img/Social media marketing and online advertising.png" alt="Gambar 2" class="absolute top-0 left-0 lg:ml-56 ml-28 mt-[-160px] z-10 animate-slide-in lg:w-[500px] w-72">
        </div>
      </div>
      <div class=" mr-64 w-full text-center lg:col-span-2 mt-96">
        <h1 class="lg:text-[63px] text-5xl text-centertext-3xl lg:mt-[-500px] mt-[-200px] lg:pt-20 lg:h-44 font-bold bg-clip-text text-transparent bg-gradient-to-r from-[#FF0000] to-[#010101]">Sign up and </h1>
        <h1 class="lg:text-[63px] text-5xl text-centertext-3xl lg:mt-[-20px]  lg:h-44 h-48 font-bold bg-clip-text text-transparent bg-gradient-to-r mb-[-90px]  from-[#FF0000] to-[#010101] lg:mb-[-60px] ">get the prize </h1>
        <a class="inline-block rounded-full shadow-slate-500 shadow-xl bg-black px-8 py-3 text-[20px] font-medium text-white transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:bg-black" href="#">Sign Up Now !
        </a>

      </div>
    </div>
  <!-- patner -->
    
@endsection