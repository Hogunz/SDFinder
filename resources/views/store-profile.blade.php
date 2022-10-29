<x-guest-layout>
    <!-- Section 1 -->

    <div class="mx-auto container px-6 xl:px-0">
        <div class="flex flex-col">
            <div class="flex flex-col justify-center">
                <div class="relative">
                    <img class="hidden sm:block w-full" src="https://i.ibb.co/HxXSY0j/jason-wang-Nx-Awry-Abt-Iw-unsplash-1-1.png" alt="sofa" />
                    <img class="sm:hidden w-full" src="https://i.ibb.co/B6qwqPT/jason-wang-Nx-Awry-Abt-Iw-unsplash-1.png" alt="sofa" />
                    <div class="absolute sm:bottom-8 bottom-4 pr-10 sm:pr-0 left-4 sm:left-8 flex justify-start items-start">
                        <p class="text-3xl sm:text-4xl font-semibold leading-9 text-white">Range Comfort Sofas</p>
                    </div>
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
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
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
    <section class="container mx-auto bg-white dark:bg-gray-500">
        <!-- Article -->
        <div class="grid grid-rows-3 grid-flow-col gap-4 text-center w-full content-center pb-10">
            <div class=" border border-transparent shadow-xl border-zinc-200 row-span-3 w-96 px-8 py-8">

                <div class="text-center mb-4 opacity-90">
                    <a href="#" class="block relative">
                        <img alt="profile" src="/img/our_team/cj.jpg" class="mx-auto object-cover rounded-full h-40 w-40 " />
                    </a>
                </div>
                <hr class="px-3 py-3">
                <div>
                    <div class="grid grid-row-2 gap-2   ">
                        <div class="text-left text-sm font-base font-serif text-gray-400">
                            Name
                        </div>
                        <div class="text-left font-serif text-lg tracking-wide bg-orange-100">Christopher James</div>
                    </div>

                    <div class="grid grid-row-2 gap-2 ">
                        <div class="text-left text-sm  font-base font-serif text-gray-400">
                            Contact Number
                        </div>
                        <div class="text-left font-serif text-lg tracking-wide bg-orange-100">+639951388632</div>
                    </div>
                    <div class="grid grid-row-2 gap-2 ">
                        <div class="text-left text-sm  font-base font-serif text-gray-400">
                            Email
                        </div>
                        <div class="text-left font-serif text-lg tracking-wide bg-orange-100">cjdc1414@gmail.com</div>
                    </div>
                    <div class="grid grid-row-2 gap-2  ">
                        <div class="text-left text-sm  font-base font-serif text-gray-400">
                            Shared on
                        </div>
                        <div class="bg-orange-100">
                            <svg class="w-6 h-6 text-blue-600 fill-current " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>

                        </div>
                    </div>
                    <div class="grid grid-row-2 gap-2 ">
                        <div class="text-left text-sm  font-base font-serif text-gray-400">
                            Shared on
                        </div>
                        <div class="bg-orange-100">
                            <svg class="w-6 h-6 text-blue-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </div>
                    </div>
                    <div class="grid grid-row-2 gap-2 ">
                        <a href="/viewas" class=" h-12 px-4 mt-2 text-center text-base transition-colors duration-300 transform   no-underline hover:underline text-blue-600">
                            View As
                        </a>
                    </div>
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.2828797253346!2d120.33868471536098!3d16.050803944193632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339167fd0100bfa3%3A0x392d5ed47cf7639e!2sUNIVERSIDAD%20DE%20DAGUPAN!5e0!3m2!1sen!2sph!4v1664930252461!5m2!1sen!2sph" class="w-full h-64" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

            <div class="border border-transparent border-zinc-200 shadow-xl row-span-3 col-span-2">
                <div class="col-span-2  p-8 ">
                    <h1 class="font-bold text-2xl text-left">About This Supplier</h1>
                    <p class="text-lg text-justify"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Taal Vista Hotel is the only premier hotel in Tagaytay that remains as the top destination for weddings and social events. It is also known for catering numbers of intimate to large scale for life celebrations by providing the highest hospitality standards. Its lavish rooms and facilities, spacious and pillarless ballrooms, including the spectacular scenery from gardens and amazing Taal Lake View for that social media photo-worthy creates memorable experiences and fulfill guest’s expectations.
                        https://www.taalvistahotel.com .</p>
                </div>


                <div class="p-8">
                    <hr>
                    <h1 class="font-bold text-lg text-left  ">PHOTOS</h1>
                </div>
                <div class="grid grid-cols-3 p-2 gap-2">
                @for($i = 0; $i < 8; $i++) 
                    <div class="border-2 border-zinc-200">
                        <img src="/img/our_team/cj.jpg" alt="..." class="shadow rounded max-w-full h-auto align-middle border-none" />
                    </div>
                 @endfor
                    
                </div>
            </div>
        </div>
        <!-- Article -->
    </section>
    <!-- Section 3 -->
</x-guest-layout>