@extends('layouts.main')

@section('container')

<!-- banner -->
<div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-10 lg:pt-32 lg:place-items-auto  place-items-center  ">
    <div class=" pt-12 md:order-none  lg:order-none order-2 ">
      <div class="lg:ml-20 mt-[-380px] lg:mt-[-300px]   animate-text-banner md:text-start lg:text-left lg:mx-0  text-center mx-10 ">
        <h1 class="lg:text-[100px] text-4xl font-bold text-[#DD2120]">doitnow</h1>
        <p class="font-semibold md:mt-24 lg:mt-14 mt-2 text-black lg:text-[36px] text-xl">The ultimate online mission platform that makes earning rewards a blast!</p>
        <p class="font-semibold mt-5 text-black  text-xl lg:text-[36px] ">Find your exciting adventure while completing mission and getting attractive reward!</p>
        
        <a class="group relative inline-flex items-center overflow-hidden rounded-full mt-10 bg-black px-8 lg:px-16 py-3  text-white focus:outline-none focus:ring active:bg-black" href="#">
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
            <span class="lg:text-[24px] font-bold transition-all group-hover:me-4">Get Reward</span>
        </a>
        <a class="group relative inline-flex items-center overflow-hidden rounded-full mt-10 bg-[#DD2120] px-8 lg:px-16 py-3  text-white focus:outline-none focus:ring active:bg-black" href="#">
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
            <span class="lg:text-[24px] font-bold transition-all group-hover:me-4">Learn more</span>
        </a>
      </div>
    </div>
    <div class="lg:order-none lg:w-full lg:pt-32 md:order-none order-1   ">
      <img src="../img/banner.png" class="animated-image-banner mt-14 w-72 mx-20 md:w-full md:mt-0 md:mx-0 lg:w-[700px] lg:mt-[-100px] "  alt="">
      <img src="/img/bg1.png" class="mt-[-100px] z-[-20px] md:mt-[-300px] lg:mt-[-600px] lg:w-full " alt="">
    </div>
  </div>
</div>
  <!-- banner -->

  <!-- conten1 -->
  <section class="lg:mt-[-200px] mt-[-50px]  text-center flex items-center justify-center  background  lg:h-44 h-20 w-full">
    <h1 class="font-bold text-white lg:text-[50px] text-base ">Have fun, get paid, and earn rewards with doitnow!</h1>  
  </section>
  <!-- conten1 -->

  <!-- content 2 -->
  <section class=" lg:mt-36 mt-3 pt-10 text-center  background1  mb-20 ">
    <div class="grid grid-cols-3 sm:grid-cols-3 gap-10 mx-10 mt-[-50px] lg:mt-12">
      <div class="counter flex flex-col justify-center  items-center py-8 rounded-lg text-3xl font-bold ">
        <img src="../img/Users.png" class="lg:mt-[-10px]" alt="">
        <span id="counter1" class="count lg:text-[76px] text-2xl lg:mb-7 lg:mt-[-10px] ">0</span>
        <p class="text-xl lg:text-4xl">Users Registered</p>
      </div>
      <div class="counter flex flex-col justify-center items-center py-8 rounded-lg text-3xl font-bold lg:mx-24">
        <img src="../img/Money Bag.png" class="mt-2 lg:mt-8" alt="">
        <span id="counter2" class="count  lg:text-[76px] text-2xl  lg:mb-7">0</span>
        <p class="text-xl lg:text-4xl">Total Earned</p>
        
      </div>
      <div class="counter flex flex-col justify-center items-center py-8 rounded-lg text-3xl font-bold">
        <img src="../img/Handshake Heart.png" class="mt-[-25px] lg:mt-6" alt="">
        <span id="counter3" class="count lg:text-[76px] text-2xl lg:mt-1  lg:mb-5">0</span>
        <p class="text-xl lg:text-4xl">Collaborator</p>
      </div>
    </div> 
  </section>
  <!-- content 2 -->

  <!-- content 3 -->
  <div class="relative w-full h-screen lg:mt-36 mt-10 ">
    
    <div class="absolute top-0 right-0 lg:w-28 lg:h-28 w-20 h-20 mt-10 rounded-full bg-white animate-lingkaran animate-bullet-top">
      <div class="flex mt-[-36px] ml-[-56px] lg:w-14 lg:h-14 w-11 h-11 rounded-full bg-white animate-lingkaran animate-bullet-top"></div>
    </div>
    <div class="lg:mx-32 lg:pt-0 pt-28">
       <h1 class="lg:text-[63px] text-2xl mb-10 mt-[-50px] lg:pt-20 lg:h-36 lg:ml-0 ml-10 font-bold bg-clip-text text-transparent bg-gradient-to-r from-[#010101] to-[#FF0000]  ">What is your possition ?</h1>
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8 lg:mt-14 lg:mx-24">
          {{-- company --}}
          <!-- Modal toggle -->
          <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block transition duration-300 transform hover:scale-105 font-medium rounded-lg text-sm px-5 py-2.5 text-center " type="button">
            <div class="lg:h-32 mx-10 lg:mx-0 flex justify-center py-3 lg:py-0 content-center shadow-lg shadow-slate-500 rounded-lg bg-grid ">
              <div class="flex justify-center items-center ">
                <img src="../img/Project Manager.png" class="w-16" alt="">
                <p class="lg:text-4xl text-2xl ml-4 font-semibold text-white">a Company </p>
                <i class="fas fa-chevron-right text-2xl lg:text-4xl pt-3 lg:pt-3 ml-5 "></i>
              </div>  
            </div>
          </button>

              <!-- Main modal -->
              <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <div class="relative p-4 w-full mb-12 lg:mt-10 max-w-md max-h-full">
                      <!-- Modal content -->
                      <div class="justify-center items-center relative bg-white lg:w-[1200px] lg:ml-[-400px]  rounded-xl shadow ">
                          <!-- Modal header -->
                          <div class="">               
                              <div class="flex justify-end items-center">
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                  </svg>
                                  <span class="sr-only">Close modal</span>
                              </button>
                              </div>

                              <div class="flex justify-end items-end"> 
                                <img src="/img/logo.png" class="w-20 lg:w-32"  alt="">
                              </div>
                              <img src="/img/bg6.png" class="w-24 mt-[-40px] z-20" alt="">

                              <div class="mt-[-45px] text-center">
                                <p class="bg-[#FF0000] text-white text-xl lg:text-3xl lg:py-2">Hello beloved company lets doitnow</p>
                              </div>

                              <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
                                <div class="h-32  lg:col-span-2 lg:order-none order-2 ">
                                  <p class="text-center font-medium lg:text-start lg:mx-10 lg:text-2xl lg:mt-10">Partner with doitnow and tap into the power of engaged consumers to achieve your business goals. <span class="text-[#FF0000]">Achieve Marketing Goals, Save marketing Coats,</span>  and <span class="text-[#FF0000]">Expand Business Reach with</span> </p>
                                  <p class="text-[#FF0000] lg:text-2xl font-bold text-center lg:mt-3 lg:mx-10 lg:text-start"> doitnow !!</p>
                                </div>
                                <div class="h-32  mt-3 lg:order-none order-1 justify-center items-center flex">
                                  <img src="/img/grafik.png" class="w-32 lg:w-64 lg:mt-24" alt="">
                                </div>
                              </div>       
                          </div>
                          <!-- Modal body -->
                          <div class="p-4 md:p-5 border-1 bg-[#FF0000] lg:h-[600px]  overflow-y-auto lg:mt-28">
                          
                              <form class="space-y-2 lg:mt-20  lg:border-4 lg:w-[700px] lg:rounded-lg lg:bg-[#D20000]" action="#">
                                <h1 class="text-center font-bold text-2xl text-white lg:my-5  ">Register here</h1>
                                  <div>
                                      <label for="company" class="block  text-sm font-medium lg:mx-3 text-gray-900 ">Company's Name</label>
                                      <input type="text" name="company" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full lg:w-[680px] lg:mx-2 p-2.5  " placeholder="Enter your company's name" required />
                                  </div>
                                  <div>
                                      <label for="name" class="block  text-sm font-medium lg:mx-3 text-gray-900 ">Name</label>
                                      <input type="text" name="name" id="name"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full lg:w-[680px] lg:mx-2 p-2.5  " placeholder="Enter your name" required />
                                  </div>
                                  <div>
                                      <label for="position" class="block  text-sm font-medium lg:mx-3 text-gray-900 ">Position</label>
                                      <input type="text" name="position" id="position" placeholder="Position as.." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full lg:w-[680px] lg:mx-2 p-2.5  " required />
                                  </div>
                                  <div>
                                      <label for="number" class="block  text-sm font-medium lg:mx-3 text-gray-900 ">Whatsapp number</label>
                                      <input type="number" name="number" id="number" placeholder="Enter your whatsapp number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full lg:w-[680px] lg:mx-2 p-2.5  " required />
                                  </div>
                                  <div>
                                      <label for="email" class="block text-sm font-medium lg:mx-3 text-gray-900 ">Email</label>
                                      <input type="email" name="email" id="email" placeholder="Enter your email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full lg:w-[680px] lg:mx-2 p-2.5  " required />
                                  </div>
                                  <button type="submit" class="w-full text-white mx-auto bg-black hover:bg-grey-800 focus:ring-4 focus:outline-none focus:ring-gray-500 font-medium rounded-lg text-sm px-2 py-2.5 text-center">Send</button>
                              </form>

                              <div class="lg:flex lg:justify-end lg:items-center lg:mt-[-400px]">
                                <img src="/img/bg7.png" class="hidden md:block lg:w-[300px] " alt="">
                              </div>
                              <div class="lg:flex lg:justify-end lg:items-center lg:mt-[-4px">
                                <img src="/img/loginbanner.png" class="hidden md:block lg:w-[300px] " alt="">
                              </div>
                          </div>
                      </div>
                  </div>
              </div> 

              {{-- missionary --}}
              <!-- Modal toggle -->
              <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block transition duration-300 transform hover:scale-105  font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                <div class="lg:h-32 mx-10 lg:mx-0 flex justify-center py-3 lg:py-0 content-center shadow-lg shadow-slate-500 rounded-lg bg-grid ">
                  <div class="flex justify-center items-center ">
                    <img src="../img/Requirements.png" class="w-16" alt="">
                    <p class="lg:text-4xl text-2xl ml-4  font-semibold text-white">a Missionary </p>
                    <i class="fas fa-chevron-right text-2xl lg:text-4xl pt-3 lg:pt-3 ml-5 "></i>
                  </div>  
                </div>
              </button>

              <!-- Main modal -->
              <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <div class="relative p-4 w-full max-w-2xl max-h-full">
                      <!-- Modal content -->
                      <div class="relative bg-white lg:w-[1200px] lg:ml-[-270px] rounded-xl shadow ">
                          <!-- Modal header -->
                          <div class="">               
                            <div class="flex justify-end items-center">
                              <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                              </button>
                            </div>

                            <div class="flex justify-end items-end"> 
                              <img src="/img/logo.png" class="w-20 lg:w-32"  alt="">
                            </div>
                            <img src="/img/bg6.png" class="w-24 mt-[-40px] z-20" alt="">

                            <div class="mt-[-45px] text-center">
                              <p class="bg-[#FF0000] text-white text-xl lg:text-3xl lg:py-2">Hello beloved Missionary lets doitnow</p>
                            </div>

                            <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
                              <div class="h-32 mt-12 lg:col-span-2 lg:order-none order-2 ">
                                <p class="text-center font-medium lg:text-start lg:mx-10 lg:text-2xl lg:mt-10">Gamified task, swift earnings, limitless missions!  <span class="text-[#FF0000]">Earn Exciting Rewards, Work from Anywhere,</span>  and <span class="text-[#FF0000]">Earn Extra Income</span> by becoming part of </p>
                                <p class="text-[#FF0000] lg:text-2xl font-bold text-center lg:mt-2 lg:mx-10 lg:text-start"> doitnow !!</p>
                              </div>
                              <div class="h-32  mt-3 lg:order-none order-1 justify-center items-center flex">
                                <img src="/img/hp.png" class="w-24 mt-14 lg:w-40 lg:mt-56" alt="">
                              </div>
                            </div>       
                        </div>
                          <!-- Modal body -->
                          <div class="p-4 md:p-5 border-1 bg-[#FF0000] lg:h-[600px] h-96 mb-32  overflow-y-auto lg:mt-28">
                          
                            <form class="space-y-2 lg:mt-20  lg:border-4 lg:w-[700px] lg:rounded-lg lg:bg-[#D20000]" action="#">
                              <h1 class="text-center font-bold text-2xl text-white lg:my-5  ">Register here</h1>
                               
                                <div>
                                    <label for="name" class="block  text-sm font-medium lg:mx-3 text-gray-900 ">Name</label>
                                    <input type="text" name="name" id="name"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full lg:w-[680px] lg:mx-2 p-2.5  " placeholder="Enter your name" required />
                                </div>
                                <div>
                                  <label for="email" class="block text-sm font-medium lg:mx-3 text-gray-900 ">Email</label>
                                  <input type="email" name="email" id="email" placeholder="Enter your email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full lg:w-[680px] lg:mx-2 p-2.5  " required />
                              </div>
                                <div>
                                    <label for="number" class="block  text-sm font-medium lg:mx-3 text-gray-900 ">Whatsapp number</label>
                                    <input type="number" name="number" id="number" placeholder="Enter your whatsapp number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full lg:w-[680px] lg:mx-2 p-2.5  " required />
                                </div>                                
                                <div>
                                  <label for="countries" class="block mb-2 text-sm font-medium lg:mx-3 text-gray-900 ">Province</label>
                                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 lg:w-[680px] lg:mx-2 " required >
                                      <option >Choose your Province</option>
                                      <option>Jakarta</option>
                                      <option>West Java</option>
                                      <option>East Java</option>
                                      <option>Bali</option>
                                    </select>
                                </div>
                                <button type="submit" class="w-full text-white mx-auto bg-black hover:bg-grey-800 focus:ring-4 focus:outline-none focus:ring-gray-500 font-medium rounded-lg text-sm px-2 py-2.5 text-center">Send</button>
                            </form>

                            <div class="lg:flex lg:justify-end lg:items-center lg:mt-[-400px]">
                              <img src="/img/bg7.png" class="hidden md:block lg:w-[300px] " alt="">
                            </div>
                            <div class="lg:flex lg:justify-end lg:items-center lg:mt-[-4px">
                              <img src="/img/loginbanner.png" class="hidden md:block lg:w-[300px] " alt="">
                            </div>
                        </div>
                      </div>
                  </div>
              </div>

        </div>
    </div>
    <img src="/img/bg2.png" class="lg:mt-[-100px} mt-[-120px] w-64" alt="">
  </div>
  <!-- content 3 -->

  <!-- content 4 -->
  <section class="lg:mt-[-200px] mt-[-550px]   ">
    <h2 class=" lg:text-[53px] text-2xl h-20 mx-5 lg:ml-32 font-bold bg-clip-text text-transparent bg-gradient-to-r from-[#010101]  to-[#FF0000]">Do you as a company?</h2>
    <div class="grid grid-cols-2 gap-4 lg:grid-cols-2 lg:gap-8 mx-5 ">
      <div class="h-96 lg:ml-32 text-sm lg:text-[34px] font-semibold lg:mt-5 mt-3">
        <p class="mb-1 lg:mb-5">Connecting you with a community</p>
        <p class="mb-1 lg:mb-5">of active, reward-seeking</p>
        <p class="mb-1 lg:mb-5">individuals eager to interact with</p>
        <p class="mb-3 lg:mb-8">your brand</p>
          {{-- company --}}
          <!-- Modal toggle -->
          <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block border rounded-lg text-[26px] px-8 py-1 lg:px-12 lg:py-3 bg-[#DD2120] text-white transition custom-btn inline-blocfont-semibold shadow-xl shadow-slate-300  duration-300 transform hover:scale-105 font-medium text-sm text-center  " type="button">
            Get Started
          </button>

          <!-- Main modal -->
          <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <div class="relative p-4 w-full mb-12 lg:mt-10 max-w-md max-h-full">
                      <!-- Modal content -->
                      <div class="justify-center items-center relative bg-white lg:w-[1200px] lg:ml-[-400px]  rounded-xl shadow ">
                          <!-- Modal header -->
                          <div class="">               
                              <div class="flex justify-end items-center">
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="authentication-modal">
                                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                  </svg>
                                  <span class="sr-only">Close modal</span>
                              </button>
                              </div>

                              <div class="flex justify-end items-end"> 
                                <img src="/img/logo.png" class="w-20 lg:w-32"  alt="">
                              </div>
                              <img src="/img/bg6.png" class="w-24 mt-[-40px] z-20" alt="">

                              <div class="mt-[-45px] text-center">
                                <p class="bg-[#FF0000] text-white text-xl lg:text-3xl lg:py-2">Hello beloved company lets doitnow</p>
                              </div>

                              <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
                                <div class="h-32  lg:col-span-2 lg:order-none order-2 ">
                                  <p class="text-center font-medium lg:text-start lg:mx-10 lg:text-2xl lg:mt-10">Partner with doitnow and tap into the power of engaged consumers to achieve your business goals. <span class="text-[#FF0000]">Achieve Marketing Goals, Save marketing Coats,</span>  and <span class="text-[#FF0000]">Expand Business Reach with</span> </p>
                                  <p class="text-[#FF0000] lg:text-2xl font-bold text-center lg:mt-3 lg:mx-10 lg:text-start"> doitnow !!</p>
                                </div>
                                <div class="h-32  mt-3 lg:order-none order-1 justify-center items-center flex">
                                  <img src="/img/grafik.png" class="w-32 lg:w-64 lg:mt-24" alt="">
                                </div>
                              </div>       
                          </div>
                          <!-- Modal body -->
                          <div class="p-4 md:p-5 border-1 bg-[#FF0000] lg:h-[600px]  overflow-y-auto lg:mt-28">
                          
                              <form class="space-y-2 lg:mt-20  lg:border-4 lg:w-[700px] lg:rounded-lg lg:bg-[#D20000]" action="#">
                                <h1 class="text-center font-bold text-2xl text-white lg:my-5  ">Register here</h1>
                                  <div>
                                      <label for="company" class="block  text-sm font-medium lg:mx-3 text-gray-900 ">Company's Name</label>
                                      <input type="text" name="company" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full lg:w-[680px] lg:mx-2 p-2.5  " placeholder="Enter your company's name" required />
                                  </div>
                                  <div>
                                      <label for="name" class="block  text-sm font-medium lg:mx-3 text-gray-900 ">Name</label>
                                      <input type="text" name="name" id="name"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full lg:w-[680px] lg:mx-2 p-2.5  " placeholder="Enter your name" required />
                                  </div>
                                  <div>
                                      <label for="position" class="block  text-sm font-medium lg:mx-3 text-gray-900 ">Position</label>
                                      <input type="text" name="position" id="position" placeholder="Position as.." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full lg:w-[680px] lg:mx-2 p-2.5  " required />
                                  </div>
                                  <div>
                                      <label for="number" class="block  text-sm font-medium lg:mx-3 text-gray-900 ">Whatsapp number</label>
                                      <input type="number" name="number" id="number" placeholder="Enter your whatsapp number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full lg:w-[680px] lg:mx-2 p-2.5  " required />
                                  </div>
                                  <div>
                                      <label for="email" class="block text-sm font-medium lg:mx-3 text-gray-900 ">Email</label>
                                      <input type="email" name="email" id="email" placeholder="Enter your email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full lg:w-[680px] lg:mx-2 p-2.5  " required />
                                  </div>
                                  <button type="submit" class="w-full text-white mx-auto bg-black hover:bg-grey-800 focus:ring-4 focus:outline-none focus:ring-gray-500 font-medium rounded-lg text-sm px-2 py-2.5 text-center">Send</button>
                              </form>

                              <div class="lg:flex lg:justify-end lg:items-center lg:mt-[-400px]">
                                <img src="/img/bg7.png" class="hidden md:block lg:w-[300px] " alt="">
                              </div>
                              <div class="lg:flex lg:justify-end lg:items-center lg:mt-[-4px">
                                <img src="/img/loginbanner.png" class="hidden md:block lg:w-[300px] " alt="">
                              </div>
                          </div>
                      </div>
                  </div>
          </div> 
      </div>
      <div class="h-32 ">
        <img src="/img/grafik.png" class="w-32 lg:w-[400px]" alt="">
      </div>
    </div>
  </section> 
  <!-- content 4 -->

  {{-- content 5 --}}
  <div class="flex justify-end">
    <img src="/img/bg3.png" class="z-[-30px] mt-[-200px] w-40 h-40 lg:w-96 lg:h-96 " alt="">
  </div>

  <div class=" flex justify-center lg:mt-[-350px]">
    <img src="/img/bg4.png" class="z-[-30px]  mt-[-200px] lg:mt-44 w-24 h-24 ml-[-30px] " alt="">
  </div>
  
  <section class=" ml-20 lg:mt-[-100px] mt-[-170px] ">
    
    <div class="grid grid-cols-2 gap-1 lg:grid-cols-3 lg:gap-8">
      <div class="h-32 ">
        <img src="/img/hp.png" class="w-24 lg:w-full" alt="">
      </div>
      
      <div class="h-32  lg:mt-44  lg:col-span-2">      
        <h1 class="lg:text-[49px] lg:font-semibold font-bold">Do You as a missionary? </h1>
        <div class="mt-5 lg:text-[65px] font-semibold mb-10">
          <p>Monetize Your Mission with</p>
          <p class="mb-3 ">doitnow: Earn, Share, and Impact</p>
        {{-- missionary --}}
              <!-- Modal toggle -->
              <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block border rounded-lg text-[26px] px-8 py-1 lg:px-12 lg:py-3 bg-[#DD2120] text-white transition custom-btn inline-blocfont-semibold shadow-xl shadow-slate-300  duration-300 transform hover:scale-105 font-medium text-sm text-center" type="button">
                Get Started
              </button>

              <!-- Main modal -->
              <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <div class="relative p-4 w-full max-w-2xl max-h-full">
                      <!-- Modal content -->
                      <div class="relative bg-white lg:w-[1200px] lg:ml-[-270px] rounded-xl shadow ">
                          <!-- Modal header -->
                          <div class="">               
                            <div class="flex justify-end items-center">
                              <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                              </button>
                            </div>

                            <div class="flex justify-end items-end"> 
                              <img src="/img/logo.png" class="w-20 lg:w-32"  alt="">
                            </div>
                            <img src="/img/bg6.png" class="w-24 mt-[-40px] z-20" alt="">

                            <div class="mt-[-45px] text-center">
                              <p class="bg-[#FF0000] text-white text-xl lg:text-3xl lg:py-2">Hello beloved Missionary lets doitnow</p>
                            </div>

                            <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
                              <div class="h-32 mt-12 lg:col-span-2 lg:order-none order-2 ">
                                <p class="text-center font-medium lg:text-start lg:mx-10 lg:text-2xl lg:mt-10">Gamified task, swift earnings, limitless missions!  <span class="text-[#FF0000]">Earn Exciting Rewards, Work from Anywhere,</span>  and <span class="text-[#FF0000]">Earn Extra Income</span> by becoming part of </p>
                                <p class="text-[#FF0000] lg:text-2xl font-bold text-center lg:mt-2 lg:mx-10 lg:text-start"> doitnow !!</p>
                              </div>
                              <div class="h-32  mt-3 lg:order-none order-1 justify-center items-center flex">
                                <img src="/img/hp.png" class="w-24 mt-14 lg:w-40 lg:mt-56" alt="">
                              </div>
                            </div>       
                        </div>
                          <!-- Modal body -->
                          <div class="p-4 md:p-5 border-1 bg-[#FF0000] lg:h-[600px] h-96 mb-32  overflow-y-auto lg:mt-28">
                          
                            <form class="space-y-2 lg:mt-20  lg:border-4 lg:w-[700px] lg:rounded-lg lg:bg-[#D20000]" action="#">
                              <h1 class="text-center font-bold text-2xl text-white lg:my-5  ">Register here</h1>
                               
                                <div>
                                    <label for="name" class="block  text-sm font-medium lg:mx-3 text-gray-900 ">Name</label>
                                    <input type="text" name="name" id="name"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full lg:w-[680px] lg:mx-2 p-2.5  " placeholder="Enter your name" required />
                                </div>
                                <div>
                                  <label for="email" class="block text-sm font-medium lg:mx-3 text-gray-900 ">Email</label>
                                  <input type="email" name="email" id="email" placeholder="Enter your email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full lg:w-[680px] lg:mx-2 p-2.5  " required />
                              </div>
                                <div>
                                    <label for="number" class="block  text-sm font-medium lg:mx-3 text-gray-900 ">Whatsapp number</label>
                                    <input type="number" name="number" id="number" placeholder="Enter your whatsapp number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full lg:w-[680px] lg:mx-2 p-2.5  " required />
                                </div>                                
                                <div>
                                  <label for="countries" class="block mb-2 text-sm font-medium lg:mx-3 text-gray-900 ">Province</label>
                                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 lg:w-[680px] lg:mx-2 " required >
                                      <option >Choose your Province</option>
                                      <option>Jakarta</option>
                                      <option>West Java</option>
                                      <option>East Java</option>
                                      <option>Bali</option>
                                    </select>
                                </div>
                                <button type="submit" class="w-full text-white mx-auto bg-black hover:bg-grey-800 focus:ring-4 focus:outline-none focus:ring-gray-500 font-medium rounded-lg text-sm px-2 py-2.5 text-center">Send</button>
                            </form>

                            <div class="lg:flex lg:justify-end lg:items-center lg:mt-[-400px]">
                              <img src="/img/bg7.png" class="hidden md:block lg:w-[300px] " alt="">
                            </div>
                            <div class="lg:flex lg:justify-end lg:items-center lg:mt-[-4px">
                              <img src="/img/loginbanner.png" class="hidden md:block lg:w-[300px] " alt="">
                            </div>
                        </div>
                      </div>
                  </div>
              </div>
      
    </div>
    
    <div class="flex lg:justify-end">
      <img src="/img/bg5.png" class="z-[-30px] lg:mt-[200px] lg:mr-96 lg:w-[200px] w-16 mt-[-40px] ml-[-90px]" alt="">
    </div>
  </section>
  
  {{-- content 5 --}}

  {{-- content 6 --}}
    
  <section class="lg:mt-[700px] lg:mx-20 mx-5 mt-32">
    <div class="grid grid-cols-2 gap-4 lg:grid-cols-3 lg:gap-8">
      <div class="lg:h-72 h-32 rounded-lg bg-[#DD2120] lg:col-span-2">
        <h1 class="lg:text-[52px] lg:font-semibold font-bold lg:mx-28 m-2">Unlock Rewards, Accomplish </h1>
        <p class="lg:text-[52px] lg:font-semibold lg:mx-28 font-bold mx-2">Missions.</p>
        <p class=" justify-end flex mr-5 lg:text-4xl font-bold text-white m-2 lg:mt-[-10px] ">doitnow</p>
      </div>
      <div class="lg:h-72 h-32 mt-[-10px] ">
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
          <!-- Carousel wrapper -->
          <div class="relative lg:h-66 h-64 overflow-hidden rounded-lg md:h-96 ">
              <!-- Item 1 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="/img/Property1.png" class="lg:mx-24 w-32 lg:w-[260px] mx-6" alt="...">
              </div>
              <!-- Item 2 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="/img/Property2.png" class="lg:mx-24 w-32 lg:w-[260px] mx-6" alt="...">
              </div>
              <!-- Item 3 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/img/Property3.png" class="lg:mx-24 w-32 lg:w-[260px] mx-6 " alt="">
              </div>
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/img/Property1.png" class=" lg:mx-24 w-32 lg:w-[260px] mx-6 " alt="">
              </div>
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/img/Property2.png" class=" lg:mx-24 w-32 lg:w-[260px] mx-6 " alt="">
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
  <section class="lg:mb-5 lg:mt-[100px] mt-16 ">
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

  <!-- banner akhir-->
  <div class="relative w-full h-screen lg:mt-10 mt-10 ">
   
    <div class="absolute top-0 right-0 lg:w-40 lg:h-40 w-20 h-20 lg:mt-[-60px] mt-[-200px] rounded-full bg-white animate-lingkaran animate-bullet-top">
      <div class="flex lg:mt-20 lg:ml-[-90px] ml-[-90px] lg:w-14 lg:h-14 w-11 h-11 rounded-full bg-white animate-lingkaran animate-bullet-top">
        <div class="flex lg:mt-[-60px] lg:ml-[-70px] lg:w-10 lg:h-10 w-11 h-11 rounded-full bg-white animate-lingkaran animate-bullet-top">
        </div>
      </div>
    </div>
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
        <a class="inline-block rounded-full shadow-slate-500 shadow-xl bg-black px-8 py-3 text-[20px] font-medium text-white transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:bg-black" href="/login">Sign Up Now !
        </a>

      </div>
  </div>
  <!-- banner akhir-->
    
@endsection