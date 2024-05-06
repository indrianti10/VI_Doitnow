@extends('layouts.mainlogin')

@section('container')
     
<section class="bg-white">
    <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
      <section class="relative flex h-32 items-center bg-white lg:col-span-5 lg:h-full xl:col-span-6">
        <img
          alt=""
          src="/img/bannerlogin.png"
          class="absolute h-full  w-[500px] object-cover  "
        />
      </section>
  
     
      <main
      class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6"
    >
      <div class="max-w-xl lg:max-w-3xl">
        <img src="/img/logo.png" class="flex justify-center items-center mx-auto mb-8 " alt="">

        <h1 class="mt-6 text-[45px] text-center font-bold text-gray-900 sm:text-3xl md:text-4xl">
          Welcome to Doitnow.id
        </h1>

        <p class="mt-1 text-center leading-relaxed text-gray-500">
            Get started  - deliver your best work with us
        </p>

        <!-- Button Login with Google -->
        <button type="submit"
        class="flex mt-8 items-start justify-center w-full text-primary bg-[#F4F4F4] font-bold hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5">
        <img src="img/google.png" class="w-6 h-6" alt="">
        <a href="" class="ml-3 font-normal text-[24px]"> Continue with your Google work account</a>
    </button>
    <p class="text-center my-5 text-[24px] text-gray-500">Or</p>

            {{-- email --}}
            <div class="relative">
                <form action="/login" method="post">
                    <div>
                        <input
                        type="email"
                        id="email"
                        name = "email"
                        placeholder="name@example.com"
                        autofocus value="{{ old('email') }}"
                        class="w-full text-center text-[24px] rounded-lg py-3 bg-[#F4F4F4] border-gray-200 pe-10 shadow-sm sm:text-sm"
                        />
                        @error('email')
                                <div class="text-red-500">
                                    {{ $message }}
                                </div>
                                @enderror
                    </div>
                    
                </form>        
                
            </div>

            <div class="text-center mt-5 text-[20px] text-gray-500">
                <p>By proceeding, you agree to the</p>
            <p><a href="" class=" text-blue-600 hover:text-blue-900">Terms of Service</a> and <a  href="" class=" text-blue-600 hover:text-blue-900">Privacy Policy</a></p>
            </div>

            <!-- Button continue -->
            <div class="flex justify-center items-center">
                <button type="submit"
                class="mt-8 w-96 text-white bg-black font-bold hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm  py-3">
                <a href="" class="ml-3 font-normal text-[24px]"> Continue</a>
            </button>
            </div>

            <!-- Button back-->
            <div class="flex justify-center items-center">
                <button type="submit"
                class="mt-4 w-96 text-white bg-[#FF0000] font-bold hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm  py-3">
                <a href="" class="ml-3 font-normal text-[24px]"> Back</a>
            </button>
            </div>

            <div class="text-center mt-3 text-xl">
                <p>Don't have an accouny yet ? <a href="" class="text-blue-500 hover:text-blue-700">Sign In</a></p>
            </div>        
      </div>
    </main>
    </div>
  </section>
  

@endsection