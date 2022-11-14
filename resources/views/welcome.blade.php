<x-guest-layout>
  <!-- Section 1 -->
  <section class=" dark:bg-gray-500 pt-12 font-sans">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
      <div class="mr-auto place-self-center lg:col-span-7">
        <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white text-black">Whatever you’re planning, make it extraordinary.</h1>
        <p class="max-w-2xl mb-6 font-light  lg:mb-8 md:text-lg lg:text-xl text-gray-800 dark:text-gray-400 ">From birthday parties to weddings, we’ll help you
          book the best talent for any occasion.</p>
        <form class=" ">
          <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
          <div class="relative">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
              <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
              </svg>
            </div>
            <input type="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border  border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="What kind of talent or service can we help you find?" required>
            <button type="submit" class=" text-gray-900 absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-300">Search</button>
          </div>
        </form>
      </div>
      <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup">
      </div>
    </div>
  </section>
  <!-- Section 1 -->
  <!-- Section 2 -->
  <div class="container mx-auto text-center ">

    <div class="bg-transparent dark:bg-gray">

      <div class="mx-auto max-w-2xl py-16 px-4 sm:py-6 sm:px-6 lg:max-w-7xl lg:px-8">
        <h6 class="text-2xl pb-6 font-bold dark:text-gray-300 text-white  tracking-widest ">This Month's Picks</h6>
        <div class="bg-transparent dark:bg-gray">
          <div class="mx-auto max-w-2xl py-16 px-4 sm:py-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
            @for($i = 0; $i < 4; $i++)
              <a href="#" class="group">
                <div class="aspect-w-1 aspect-h-1 w-full xl:aspect-w-7 xl:aspect-h-8">
                  <img src="img/welcome_page/smartphone_head.png" alt="" class="  object-contain object-center ">
                </div>
                <h3 class="mt-4 text-sm text-gray-800  dark:text-white">iPhone 14 </h3>
                <p class="mt-1 text-lg font-medium text-gray-800  dark:text-white">$10000</p>
              </a>
              @endfor

              <!-- More products... -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Section 2 -->
  <!-- Section 3 -->
  <section class="pt-2">
    
    <div class="container mx-auto   text-center">


    
      <header class="pb-6">
        <!-- Background image -->
      <div class="container mx-auto py-9 md:py-12 px-4 md:px-6">
            <div class="flex items-strech justify-center flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6 lg:space-x-8">
                <div class="flex flex-col md:flex-row items-strech justify-between bg-gray-50 dark:bg-gray-800 py-6 px-6 md:py-12 lg:px-12 md:w-8/12 lg:w-7/12 xl:w-8/12 2xl:w-9/12">
                    <div class="flex flex-col justify-center md:w-1/2">
                        <h1 class="text-3xl lg:text-4xl font-semibold text-gray-800 dark:text-white">ADS</h1>
                        <p class="text-base lg:text-xl text-gray-800 dark:text-white mt-2">Save upto <span class="font-bold">50%</span></p>
                    </div>
                    <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center md:justify-end">
                        <img src="https://i.ibb.co/J2BtZdg/Rectangle-56-1.png" alt="" class="" />
                    </div>
                </div>
                <div class="md:w-4/12 lg:w-5/12 xl:w-4/12 2xl:w-3/12 bg-gray-50 dark:bg-gray-800 py-6 px-6 md:py-0 md:px-4 lg:px-6 flex flex-col justify-center relative">
                    <div class="flex flex-col justify-center">
                        <h1 class="text-3xl lg:text-4xl font-semibold text-gray-800 dark:text-white">ADS</h1>
                        <p class="text-base lg:text-xl text-gray-800 dark:text-white">Save Upto <span class="font-bold">30%</span></p>
                    </div>
                    <div class="flex justify-end md:absolute md:bottom-4 md:right-4 lg:bottom-0 lg:right-0">
                        <img src="https://i.ibb.co/rGfP7mp/Rectangle-59-1.png" alt="" class="md:w-20 md:h-20 lg:w-full lg:h-full" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->
      </header>

      <!-- Background image -->
      <div class="relative overflow-hidden bg-no-repeat bg-cover rounded-3xl" style="
    background-position: 50%;
    background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/146.webp');
    height: 300px;
  ">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed">
            <div class="flex justify-center items-center h-full">
              <div class="text-center text-white px-6 md:px-12">
                <h1 class="text-5xl font-bold mt-0 mb-6">MOBILE</h1>
              </div>
            </div>
          </div>
        </div>
        <!-- Background image -->
      </header>



      <div class="bg-transparent dark:bg-gray">
        <div class="mx-auto max-w-2xl py-16 px-4 sm:py-6 sm:px-6 lg:max-w-7xl lg:px-8">
          <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
     
          @for($i = 0; $i < 4; $i++)
              <a href="#" class="group ">
                <div class="aspect-w-1 aspect-h-1 w-full xl:aspect-w-7 xl:aspect-h-8">
                  <img src="img/welcome_page/smartphone_head.png" alt="" class=" object-contain object-center ">
                </div>
                <h3 class="mt-4 text-sm text-gray-800 dark:text-white">iPhone 14</h3>
                <p class="mt-1 text-lg font-medium text-gray-800  dark:text-white">$48</p>
              </a>
   @endfor
      

            <!-- More products... -->
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- Section 3 -->
  <!-- Section 4 -->
  <section class="pt-2">
    <div class="container mx-auto text-center ">  
      <header class="pb-6">
        <!-- Background image -->
        <div class="relative overflow-hidden bg-no-repeat bg-cover rounded-3xl " style="
    background-position: 50%;
    background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/146.webp');
    height: 300px;
  ">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed">
            <div class="flex justify-center items-center h-full">
              <div class="text-center text-white px-6 md:px-12">
                <h1 class="text-5xl font-bold mt-0 mb-6">TABLET</h1>
              </div>
            </div>
          </div>
        </div>
        <!-- Background image -->
      </header>

      <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
      <div class="bg-transparent dark:bg-gray">
        <div class="mx-auto max-w-2xl py-16 px-4 sm:py-6 sm:px-6 lg:max-w-7xl lg:px-8">
          <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
          @for($i = 0; $i < 4; $i++)
              <a href="#" class="group ">
                <div class="aspect-w-1 aspect-h-1 w-full    xl:aspect-w-7 xl:aspect-h-8 ">
                  <img src="img/welcome_page/smartphone_head.png" alt="" class=" object-contain object-center ">
                </div>
                <h3 class="mt-4 text-sm text-gray-800 dark:text-white">Apple iPad Air</h3>
                <p class="mt-1 text-lg font-medium text-gray-800  dark:text-white">$48</p>
              </a>
         @endfor
         

            <!-- More products... -->
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- Section 4 -->
  <!-- Section 5 -->
  <section class="pt-6">
    <div class="container mx-auto text-center">
      <header class="pb-6">
        <!-- Background image -->
        <div class="relative overflow-hidden bg-no-repeat bg-cover rounded-3xl" style="
    background-position: 50%;
    background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/146.webp');
    height: 300px;
  ">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed">
            <div class="flex justify-center items-center h-full">
              <div class="text-center text-white px-6 md:px-12">
                <h1 class="text-5xl font-bold mt-0 mb-6">LAPTOP</h1>
              </div>
            </div>
          </div>
        </div>
        <!-- Background image -->
      </header>

      <div class="bg-transparent dark:bg-gray">
        <div class="mx-auto max-w-2xl py-16 px-4 sm:py-6 sm:px-6 lg:max-w-7xl lg:px-8">
          <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
          @for($i = 0; $i < 4; $i++)
              <a href="#" class="group ">
                <div class="aspect-w-1 aspect-h-1 w-full    xl:aspect-w-7 xl:aspect-h-8">
                  <img src="img/welcome_page/smartphone_head.png" alt="" class="object-contain object-center ">
                </div>
                <h3 class="mt-4 text-sm text-gray-800 dark:text-white">HP Pavilion Plus 14</h3>
                <p class="mt-1 text-lg font-medium text-gray-800  dark:text-white">$48</p>
              </a>
        @endfor
            

            <!-- More products... -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section 5 -->



</x-guest-layout>