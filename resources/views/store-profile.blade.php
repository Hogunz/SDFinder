<x-guest-layout>
    <!-- Section 1 -->
    <div class="container mx-auto py-4 ">
      <div class="bg-white dark:bg-gray-700 p-6 shadow-lg rounded-lg flex justify-between items-center">
        <div class="flex dark:text-white">
          <div class="mr-4">
            <img class="shadow sm:w-24 sm:h-24 w-24 h-24  bg-gray-100" src="https://ph-test-11.slatic.net/shop/9be6f1633a5313add38a96a50960e59c.jpeg" alt="Avatar" />
          </div>
          <div>
            <p class="text-4xl font-extrabold line-clamp-1">Octagon Computer Superstore</p>
            <span class="flex items-center justify-start text-gray-500">
              <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16" id="IconChangeColor">
                <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" id="mainIconPathAttribute"></path>
                <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" id="mainIconPathAttribute"></path>
              </svg>
              Manufacturer, Distributor, Wholesaler
            </span>
            <p class="text-sm text-gray-500 mt-1 line-clamp-2">
              Main Products : Computer Parts, Cellphone, Tablets, Laptops
            </p>
          </div>
        </div>
        
      </div>
      </div>

    <!-- Section 1 -->


    <!-- Section 2 -->
    <section class="container mx-auto bg-white dark:bg-gray-300">
        <div class="flex items-center justify-center w-full h-full py-24 sm:py-8 px-4">
            <div class="w-full relative flex items-center justify-center">
                <button aria-label="slide backward" class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer" id="prev">
                    <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                    <div id="slider" class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                        @for($i = 0; $i < 8; $i++) <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="img/phone/iphone14.png" alt="black chair and white table" class="object-contain h-48 w-96 object-center" />
                            <div class="bg-gray-800  bg-opacity-0 absolute w-full h-full p-6">
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">iPhone 14</h3>
                                </div>
                            </div>
                    </div>
                    @endfor

                </div>
            </div>
            <button aria-label="slide forward" class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400" id="next">
                <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        </div>
    </section>
    <!-- Section 2 -->

    <!-- Section 3 -->
    <section class="container mx-auto bg-white dark:bg-gray-500 pt-6">
        <!-- Article -->
        <div class="grid grid-rows-3 grid-flow-col gap-4 text-center w-full content-center pb-10">
            <div class="border  dark:border-transparent  border-zinc-200 row-span-3 w-96 px-8 py-8">

                <figure class="max-w-lg pb-4">
                    <img class="max-w-full h-auto rounded-lg" src="https://cdn3.vectorstock.com/i/1000x1000/25/47/mobile-ads-vector-24992547.jpg" alt="image description">
                </figure>
                <figure class="max-w-lg pb-4">
                    <img class="max-w-full h-auto rounded-lg" src="https://www.pngitem.com/pimgs/m/32-329840_mobile-web-ads-mobile-ads-png-transparent-png.png" alt="image description">
                </figure>
            </div>

            <div class="border rounded-lg border-transparent border-zinc-200 shadow-xl row-span-3 col-span-2">
                <div class="col-span-2  p-8 ">
                    <h1 class="font-bold text-2xl text-left text-gray-800 dark:text-white">STORE OVERVIEW</h1>
                    <h2 class="font-bold text-base text-left text-gray-800 dark:text-white pt-6">BASIC INFORMATION </h2>
                    <p class="text-lg text-justify indent-8 text-gray-600 dark:text-gray-400"> Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s
                        , when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.</p>
                </div>
                <hr class="my-8 h-px bg-gray-200 border-0 dark:bg-gray-700">
                <div class="2xl:container 2xl:mx-auto md:py-12 lg:px-20 md:px-6 py-9 px-4">
                    <div class="text-center">
                        <h2 class="font-semibold dark:text-white lg:text-4xl text-3xl lg:leading-9 md:leading-7 leading-9 text-gray-800 md:w-full w-9/12 mx-auto">Company Album</h2>
                        <p class="font-normal text-base leading-6 dark:text-gray-400 text-gray-600 mt-4 lg:w-5/12 md:w-9/12 mx-auto">Follow us on <span class="underline cursor-pointer">http://www.pccartelcomputers.com/</span> and tag us to get featured on our timeline</p>
                    </div>
                    <div class="grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 lg:grap-8 md:gap-6 gap-4 mt-10">
                        @for($i = 0; $i < 8; $i++) <div class="relative group">
                            <img src="https://i.ibb.co/QHS8Ngp/pexels-alana-sousa-3294250-1.png" alt="A picture of a sitting dog" class="lg:block hidden w-full" />
                            <img src="https://i.ibb.co/mNPBgQN/pexels-alana-sousa-3294250-1-1.png" alt="A picture of a sitting dog" class="lg:hidden block w-full" />
                            <div class="flex justify-center items-center opacity-0 bg-gradient-to-t from-gray-800 via-gray-800 to-opacity-30 group-hover:opacity-50 absolute top-0 left-0 h-full w-full"></div>
                    </div>
                    @endfor
                </div>


                <hr class="my-8 h-px bg-gray-200 border-0 dark:bg-gray-700">

                <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.271183019917!2d120.33991921536096!3d16.051411444177468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339167fd132ad42b%3A0xa16f95fe87a2cdbc!2sOCTAGON!5e0!3m2!1sen!2sph!4v1667443542989!5m2!1sen!2sph" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <!-- Article -->


            </div>
        </div>
        </div>


        <!-- Article -->
    </section>
    <!-- Section 3 -->

    <!-- Section 4 -->

    <!-- Section 4 -->
</x-guest-layout>


<!-- CAROUSEL -->
<script>
        let defaultTransform = 0;
        function goNext() {
            defaultTransform = defaultTransform - 398;
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        next.addEventListener("click", goNext);
        function goPrev() {
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
            else defaultTransform = defaultTransform + 398;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        prev.addEventListener("click", goPrev);
    </script>