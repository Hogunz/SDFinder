<x-guest-layout>






    <!-- Section 1 -->
    <section class="container mx-auto dark:bg-gray-500 pt-24">
        <header>
            <div class=" pb-6 ">
                <!-- Background image -->
                <div class="relative overflow-hidden bg-no-repeat bg-cover rounded-3xl" style="
    background-position: 50%;
    background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/146.webp');
    height: 350px;
  ">
                    <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.75)">
                        <div class="flex justify-center items-center h-full">
                            <div class="text-center text-white px-6 md:px-12">
                                <h1 class="text-5xl font-bold mt-0 mb-6">Ads</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Background image -->
        </header>
    </section>
    <!-- Section 1 -->

    <!-- Section 2 -->
    <section class="dark:bg-gray-500">
        <div class="container mx-auto text-center">
            <h6 class="text-3xl pb-6 font-bold  uppercase dark:text-white tracking-widest">device finder</h6>
            <a href="mobile-finder" class="href">
                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800 ">
                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        MOBILE
                    </span>
                </button>
            </a>
            <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    LAPTOP
                </span>
            </button>
            <a href="tablet-finder" class="href">
                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        TABLET
                    </span>
                </button>
            </a>
        </div>
    </section>
    <!-- Section 2 -->

    <section class="dark:bg-gray-500">
        <div class="2xl:container 2xl:mx-auto">
            <div class="md:py-12 lg:px-20 md:px-6 py-9 px-4">

                <div class="flex justify-between items-center mb-4">
                    <h2 class="lg:text-4xl dark:text-white text-3xl lg:leading-9 leading-7 text-gray-800 font-semibold">Device Finder</h2>

                    <!-- filters Button (md and plus Screen) -->
                    <button onclick="showFilters()" class="rounded-lg cursor-pointer dark:bg-white dark:text-gray-800  dark:hover:bg-gray-100 sm:flex  hover:bg-gray-700  focus:ring-offset-2 focus:ring-gray-800 py-4 px-6 bg-gray-800 flex text-base leading-4 font-normal text-white justify-center items-center">
                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg1.svg" />
                        <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg1dark.svg" />
                        Filters
                    </button>
                </div>



            </div>

            <div id="filterSection" class="block mb-8 relative md:py-10 lg:px-20 md:px-6 py-9 px-4 bg-gray-50 dark:bg-gray-800 w-full">
                <!-- Cross button Code -->
                <div onclick="closeFilterSection()" class="cursor-pointer absolute right-0 top-0 md:py-10 lg:px-20 md:px-6 py-9 px-4">
                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg2.svg" alt="cross" />
                    <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg2dark.svg" alt="cross" />
                </div>

                <!-- General Section -->
                <div class="">
                    <div class="flex space-x-2 text-gray-800 dark:text-white">
                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4.svg" alt="materials" />
                        <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4dark.svg" alt="materials" />
                        <p class="lg:text-2xl text-xl lg:leading-6 leading-5 font-medium ">General</p>
                    </div>
                    <div class="md:flex  md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">
                        <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">

                            <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox" class="  dark:text-gray-300 font-normal text-gray-600  hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300  rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Brand
                                <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg></button>

                            <!-- Dropdown menu -->
                            <div id="dropdownDefaultCheckbox" class="hidden z-10 w-48 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 1210px);">
                                <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownCheckboxButton">
                                    <li>
                                        <div class="flex items-center">
                                            <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-item-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">asdasdasd checkbox</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                            <input checked="" id="checkbox-item-2" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-item-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Checked state</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                            <input id="checkbox-item-3" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-item-3" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default checkbox</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=" rounded-md px-4 py-2.5 flex space-x-2 md:justify-center md:items-center items-center justify-start ">
                            <label for="minmax-range" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-300">Year</label>
                            <input id="minmax-range" type="range" min="0" max="10" value="0" class="w-full h-2 bg-gray-200 rounded-lg appearance cursor-pointer dark:bg-gray-700">
                        </div>
                        <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                            <label for="minmax-range" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-300">Price</label>
                            <input id="minmax-range" type="range" min="0" max="10" value="0" class="w-full h-2 bg-gray-200 rounded-lg appearance cursor-pointer dark:bg-gray-700">
                        </div>
                    </div>
                </div>
                <hr class="bg-gray-200 lg:w-6/12 w-full md:my-10 my-8" />

                <!-- Network Section -->
                <div>
                    <div class="flex space-x-2 text-gray-800 dark:text-white">
                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4.svg" alt="materials" />
                        <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4dark.svg" alt="materials" />
                        <p class="lg:text-2xl text-xl lg:leading-6 leading-5 font-medium ">Network</p>
                    </div>
                    <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">

                        <div class="flex">
                            @for($i = 0; $i < 4; $i++) <div class="flex items-center mr-4">
                                <input id="inline-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">2G</label>
                        </div>
                        @endfor
                    </div>

                </div>
            </div>

            <hr class="bg-gray-200 lg:w-6/12 w-full md:my-10 my-8" />

            <!-- Sim Section -->
            <div>
                <div class="flex space-x-2 text-gray-800 dark:text-white">
                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4.svg" alt="materials" />
                    <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4dark.svg" alt="materials" />
                    <p class="lg:text-2xl text-xl lg:leading-6 leading-5 font-medium ">Sim</p>
                </div>
                <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">
                    <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                        <div class="inline-block">
                            <div class="flex space-x-6 justify-center items-center">
                                <button id="dropdownCheckboxButton1" data-dropdown-toggle="dropdownDefaultCheckbox1" class="  dark:text-gray-300 font-normal text-gray-600  hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300  rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Size
                                    <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg></button>

                                <!-- Dropdown menu -->
                                <div id="dropdownDefaultCheckbox1" class="hidden z-10 w-48 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 1210px);">
                                    <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownCheckboxButton1">
                                        @for($i = 0; $i < 3; $i++) <li>
                                            <div class="flex items-center">
                                                <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                <label for="checkbox-item-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Micro-SIM</label>
                                            </div>
                                            </li>
                                            @endfor
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="inline-block">
                            <div class="flex space-x-6 justify-center items-center">
                                <button id="dropdownCheckboxButton2" data-dropdown-toggle="dropdownDefaultCheckbox2" class="  dark:text-gray-300 font-normal text-gray-600  hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300  rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Multiple
                                    <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg></button>

                                <!-- Dropdown menu -->
                                <div id="dropdownDefaultCheckbox2" class="hidden z-10 w-48 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 1210px);">
                                    <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownCheckboxButton2">
                                        @for($i = 0; $i < 3; $i++) <li>
                                            <div class="flex items-center">
                                                <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                <label for="checkbox-item-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Dual-SIM </label>
                                            </div>
                                            </li>
                                            @endfor
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <hr class="bg-gray-200 lg:w-6/12 w-full md:my-10 my-8" />

            <!-- Body Section -->
            <div>
                <div class="flex space-x-2 text-gray-800 dark:text-white">
                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4.svg" alt="materials" />
                    <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4dark.svg" alt="materials" />
                    <p class="lg:text-2xl text-xl lg:leading-6 leading-5 font-medium ">Body</p>
                </div>

                <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">
                    <div class="flex justify-center items-center">
                        <div class="inline-block">
                            <div class="flex space-x-6 justify-center items-center">
                                <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox3" class="  dark:text-gray-300 font-normal text-gray-600  hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300  rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Color
                                    <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg></button>

                                <!-- Dropdown menu -->
                                <div id="dropdownDefaultCheckbox3" class="hidden z-10 w-48 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 1210px);">
                                    <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownCheckboxButton">
                                    @for($i = 0; $i < 8; $i++) 
                                    <li>
                                            <div class="flex items-center">
                                                <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                <label for="checkbox-item-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default checkbox</label>
                                            </div>
                                        </li>
                                       @endfor
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                   
                </div>
            </div>
         

            <hr class="bg-gray-200 lg:w-6/12 w-full md:my-10 my-8" />
            <!-- Platform Section -->
            <div>
                <div class="flex space-x-2 text-gray-800 dark:text-white">
                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4.svg" alt="materials" />
                    <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4dark.svg" alt="materials" />
                    <p class="lg:text-2xl text-xl lg:leading-6 leading-5 font-medium ">Platform</p>
                </div>
                <div class="md:flex md:space-x-6 mt-8 grid grid-cols-4 gap-y-8 flex-wrap">
                    <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                        <div class="inline-block">
                            <div class="flex space-x-6 justify-center items-center">
                                <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox4" class="  dark:text-gray-300 font-normal text-gray-600  hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300  rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">OS
                                    <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg></button>

                                <!-- Dropdown menu -->
                                <div id="dropdownDefaultCheckbox4" class="hidden z-10 w-48 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 1210px);">
                                    <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownCheckboxButton">
                                        @for($i = 0; $i < 8; $i++)
                                    <li>
                                            <div class="flex items-center">
                                                <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                <label for="checkbox-item-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default checkbox</label>
                                            </div>
                                        </li>
                                       @endfor
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="inline-block">
                            <div class="flex space-x-6 justify-center items-center">
                                <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox5" class="  dark:text-gray-300 font-normal text-gray-600  hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300  rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">OS Version
                                    <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg></button>

                                <!-- Dropdown menu -->
                                <div id="dropdownDefaultCheckbox5" class="hidden z-10 w-48 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 1210px);">
                                    <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownCheckboxButton">
                                      @for($i = 0; $i < 8; $i++)  
                                    <li>
                                            <div class="flex items-center">
                                                <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                <label for="checkbox-item-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default checkbox</label>
                                            </div>
                                        </li>
                                      @endfor
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div>
                <div class="flex space-x-2 text-gray-800 dark:text-white">
                </div>
                <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">
                    <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                        <div class="inline-block">
                            <div class="flex space-x-6 justify-center items-center">
                                <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start ">
                                    <label for="minmax-range" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-300">CPU Frequency</label>
                                    <input id="minmax-range" type="range" min="0" max="10" value="0" class="w-full h-2 bg-gray-200 rounded-lg appearance cursor-pointer dark:bg-gray-700">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="inline-block">
                            <div class="flex space-x-6 justify-center items-center">
                                <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start ">
                                    <label for="minmax-range" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-300">CPU Cores</label>
                                    <input id="minmax-range" type="range" min="0" max="10" value="0" class="w-full h-2 bg-gray-200 rounded-lg appearance cursor-pointer dark:bg-gray-700">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div>
                <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">
                    <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                        <div class="inline-block">
                            <div class="flex space-x-6 justify-center items-center">
                                <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox6" class="  dark:text-gray-300 font-normal text-gray-600  hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300  rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Chipset
                                    <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg></button>

                                <!-- Dropdown menu -->
                                <div id="dropdownDefaultCheckbox6" class="hidden z-10 w-48 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 1210px);">
                                    <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownCheckboxButton">
                                      @for($i = 0; $i < 20; $i++)
                                    <li>
                                            <div class="flex items-center">
                                                <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                <label for="checkbox-item-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default checkbox</label>
                                            </div>
                                        </li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="bg-gray-200 lg:w-6/12 w-full md:my-10 my-8" />
                <!-- Memory Section -->
                <div>
                    <div class="flex space-x-2 text-gray-800 dark:text-white">
                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4.svg" alt="materials" />
                        <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4dark.svg" alt="materials" />
                        <p class="lg:text-2xl text-xl lg:leading-6 leading-5 font-medium ">Memory</p>
                    </div>
                    <div class="md:flex md:space-x-6 mt-8 grid md:grid-cols-3 gap-y-8 flex-wrap">
                        <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                            <div class="inline-block">
                                <div class="flex space-x-6 justify-center items-center">
                                    <div>
                                        <div class="flex space-x-2 text-gray-800 dark:text-white">
                                        </div>
                                        <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">
                                            <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                                                <div class="inline-block">
                                                    <div class="flex space-x-6 justify-center items-center">
                                                        <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start ">
                                                            <label for="minmax-range" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-300">RAM</label>
                                                            <input id="minmax-range" type="range" min="0" max="10" value="0" class="w-full h-2 bg-gray-200 rounded-lg appearance cursor-pointer dark:bg-gray-700">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex justify-center items-center">
                                                <div class="inline-block">
                                                    <div class="flex space-x-6 justify-center items-center">
                                                        <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start ">
                                                            <label for="minmax-range" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-300">Storage</label>
                                                            <input id="minmax-range" type="range" min="0" max="10" value="0" class="w-full h-2 bg-gray-200 rounded-lg appearance cursor-pointer dark:bg-gray-700">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">
                                                <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                                                    <div class="inline-block">
                                                        <div class="flex space-x-6 justify-center items-center">
                                                            <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox7" class="  dark:text-gray-300 font-normal text-gray-600  hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300  rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Card Slot
                                                                <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                                </svg></button>

                                                            <!-- Dropdown menu -->
                                                            <div id="dropdownDefaultCheckbox7" class="hidden z-10 w-48 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 1210px);">
                                                                <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownCheckboxButton">
                                                                  @for($i = 0; $i < 4; $i++)
                                                                <li>
                                                                        <div class="flex items-center">
                                                                            <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                                            <label for="checkbox-item-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default checkbox</label>
                                                                        </div>
                                                                    </li>
                                                                   @endfor
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="bg-gray-200 lg:w-6/12 w-full md:my-10 my-8" />
                    <!-- Display Section -->
                    <div>
                        <div class="flex space-x-2 text-gray-800 dark:text-white">
                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4.svg" alt="materials" />
                            <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4dark.svg" alt="materials" />
                            <p class="lg:text-2xl text-xl lg:leading-6 leading-5 font-medium ">Display</p>
                        </div>
                        <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">
                            <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                                <div class="inline-block">
                                    <div class="flex space-x-6 justify-center items-center">
                                        <div>
                                            
                                            <div class="md:flex md:space-x-6 mt-8 grid md:grid-cols-3 gap-y-8 flex-wrap">
                                                <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                                                    <div class="inline-block">
                                                        <div class="flex space-x-6 justify-center items-center">
                                                            <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start ">
                                                                <label for="minmax-range" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-300">Resolution</label>
                                                                <input id="minmax-range" type="range" min="0" max="10" value="0" class="w-full h-2 bg-gray-200 rounded-lg appearance cursor-pointer dark:bg-gray-700">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex justify-center items-center">
                                                    <div class="inline-block">
                                                        <div class="flex space-x-6 justify-center items-center">
                                                            <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start ">
                                                                <label for="minmax-range" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-300">Storage</label>
                                                                <input id="minmax-range" type="range" min="0" max="10" value="0" class="w-full h-2 bg-gray-200 rounded-lg appearance cursor-pointer dark:bg-gray-700">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="md:flex md:space-x-6 mt-8 grid md:grid-cols-3 gap-y-8 flex-wrap">
                                                <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                                                    <div class="inline-block">
                                                        <div class="flex space-x-6 justify-start items-center">
                                                            <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox8" class="  dark:text-gray-300 font-normal text-gray-600  hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300  rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Technology
                                                                <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                                </svg></button>

                                                            <!-- Dropdown menu -->
                                                            <div id="dropdownDefaultCheckbox8" class="hidden z-10 w-48 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 1210px);">
                                                                <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownCheckboxButton">
                                                                  @for($i = 0; $i < 2; $i++)
                                                                <li>
                                                                        <div class="flex items-center">
                                                                            <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                                            <label for="checkbox-item-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default checkbox</label>
                                                                        </div>
                                                                    </li>
                                                                   @endfor
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex justify-center items-center">
                                                    <div class="inline-block">
                                                        <div class="flex space-x-6 justify-center items-center">
                                                            <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox9" class="  dark:text-gray-300 font-normal text-gray-600  hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300  rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Notch
                                                                <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                                </svg></button>

                                                            <!-- Dropdown menu -->
                                                            <div id="dropdownDefaultCheckbox9" class="hidden z-10 w-48 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 1210px);">
                                                                <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownCheckboxButton">
                                                                   @for($i = 0; $i < 2; $i++)
                                                                <li>
                                                                        <div class="flex items-center">
                                                                            <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                                            <label for="checkbox-item-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default checkbox</label>
                                                                        </div>
                                                                    </li>
                                                                  @endfor
                                                                </ul>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">
                                                <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                                                    <div class="inline-block">
                                                        <div class="flex space-x-6 justify-start items-center">
                                                            <div class="form-check">
                                                                <input class="form-check-input appearance h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="HDR" id="HDR">
                                                                <label class="form-check-label inline-block text-gray-600" for="HDR">
                                                                    HDR
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex justify-center items-center">
                                                    <div class="inline-block">
                                                        <div class="flex space-x-6 justify-center items-center">
                                                            <div class="form-check">
                                                                <input class="form-check-input appearance h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="HRR" id="HRR">
                                                                <label class="form-check-label inline-block text-gray-600" for="HRR">
                                                                    High Refresh Rate
                                                                </label>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="bg-gray-200 lg:w-6/12 w-full md:my-10 my-8" />
                    <!-- Main Camera Section -->
                    <div>
                        <div class="flex space-x-2 text-gray-800 dark:text-white">
                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4.svg" alt="materials" />
                            <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4dark.svg" alt="materials" />
                            <p class="lg:text-2xl text-xl lg:leading-6 leading-5 font-medium ">Main Camera</p>
                        </div>
                        <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">
                            <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                                <div class="inline-block">
                                    <div class="flex space-x-6 justify-center items-center">
                                        <div>
                                            <div class="flex space-x-2 text-gray-800 dark:text-white">
                                            </div>
                                            <div class="md:flex md:space-x-6 mt-8 grid md:grid-cols-3 gap-y-8 flex-wrap">
                                                <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                                                    <div class="inline-block">
                                                        <div class="flex space-x-6 justify-center items-center">
                                                            <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start ">
                                                                <label for="minmax-range" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-300">Resolution</label>
                                                                <input id="minmax-range" type="range" min="0" max="10" value="0" class="w-full h-2 bg-gray-200 rounded-lg appearance cursor-pointer dark:bg-gray-700">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex justify-center items-center">
                                                    <div class="inline-block">
                                                        <div class="flex space-x-6 justify-center items-center">
                                                            <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start ">
                                                                <label for="minmax-range" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-300">Video</label>
                                                                <input id="minmax-range" type="range" min="0" max="10" value="0" class="w-full h-2 bg-gray-200 rounded-lg appearance cursor-pointer dark:bg-gray-700">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">
                    <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                        <div class="inline-block">
                            <div class="flex space-x-6 justify-start items-center">
                                <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox10" class="  dark:text-gray-300 font-normal text-gray-600  hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300  rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Camera
                                    <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg></button>

                                <!-- Dropdown menu -->
                                <div id="dropdownDefaultCheckbox10" class="hidden z-10 w-48 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 1210px);">
                                    <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownCheckboxButton">
                                     @for($i = 0; $i < 4; $i++)
                                    <li>
                                            <div class="flex items-center">
                                                <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                <label for="checkbox-item-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default checkbox</label>
                                            </div>
                                        </li>
                                       @endfor
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
           
                <hr class="bg-gray-200 lg:w-6/12 w-full md:my-10 my-8" />
                <!-- Selfie Camera Section -->
                <div>
                    <div class="flex space-x-2 text-gray-800 dark:text-white">
                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4.svg" alt="materials" />
                        <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4dark.svg" alt="materials" />
                        <p class="lg:text-2xl text-xl lg:leading-6 leading-5 font-medium ">Selfie Camera</p>
                    </div>
                    <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">
                        <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                            <div class="inline-block">
                                <div class="flex space-x-6 justify-center items-center">
                                    <div>
                                        <div class="flex space-x-2 text-gray-800 dark:text-white">
                                        </div>
                                        <div class="md:flex md:space-x-6 mt-8 grid md:grid-cols-3 gap-y-8 flex-wrap">
                                            <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                                                <div class="inline-block">
                                                    <div class="flex space-x-6 justify-center items-center">
                                                        <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start ">
                                                            <label for="minmax-range" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-300">Resolution</label>
                                                            <input id="minmax-range" type="range" min="0" max="10" value="0" class="w-full h-2 bg-gray-200 rounded-lg appearance cursor-pointer dark:bg-gray-700">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div class="flex justify-center items-center">
                                                <div class="inline-block">
                                                    <div class="flex space-x-6 justify-center items-center">
                                                        <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start ">
                                                            <label for="minmax-range" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-300">Video</label>
                                                            <input id="minmax-range" type="range" min="0" max="10" value="0" class="w-full h-2 bg-gray-200 rounded-lg appearance cursor-pointer dark:bg-gray-700">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">
                <div class="flex justify-center items-center">
                    <div class="inline-block">
                        <div class="flex space-x-6 justify-center items-center">
                            <div class="form-check">
                                <input class="form-check-input appearance h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="popupcamera" id="popupcamera">
                                <label class="form-check-label inline-block text-gray-600" for="popupcamera">
                                    Pop-Up Camera
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <div class="inline-block">
                        <div class="flex space-x-6 justify-center items-center">
                            <div class="form-check">
                                <input class="form-check-input appearance h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="dualcamera" id="dualcamera">
                                <label class="form-check-label inline-block text-gray-600" for="dualcamera">
                                    Dual Camera
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
            <hr class="bg-gray-200 lg:w-6/12 w-full md:my-10 my-8" />
           <div>
                <hr class="bg-gray-200 lg:w-6/12 w-full md:my-10 my-8" />
              
                   
                    <!-- Connectivity Section -->
                    <div>
                        <div class="flex space-x-2 text-gray-800 dark:text-white">
                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4.svg" alt="materials" />
                            <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4dark.svg" alt="materials" />
                            <p class="lg:text-2xl text-xl lg:leading-6 leading-5 font-medium ">Connectivity</p>
                        </div>
                        <div>
                            <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">
                                <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                                    <div class="inline-block">
                                        <div class="flex space-x-6 justify-center items-center">
                                            <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox" class="  dark:text-gray-300 font-normal text-gray-600  hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300  rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Size
                                                <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                </svg></button>

                                            <!-- Dropdown menu -->
                                            <div id="dropdownDefaultCheckbox" class="hidden z-10 w-48 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 1210px);">
                                                <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownCheckboxButton">
                                                    <li>
                                                        <div class="flex items-center">
                                                            <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                            <label for="checkbox-item-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default checkbox</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="flex items-center">
                                                            <input checked="" id="checkbox-item-2" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                            <label for="checkbox-item-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Checked state</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="flex items-center">
                                                            <input id="checkbox-item-3" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                            <label for="checkbox-item-3" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default checkbox</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-center items-center">
                                    <div class="inline-block">
                                        <div class="flex space-x-6 justify-center items-center">
                                            <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox" class="  dark:text-gray-300 font-normal text-gray-600  hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300  rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Multiple
                                                <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                </svg></button>

                                            <!-- Dropdown menu -->
                                            <div id="dropdownDefaultCheckbox" class="hidden z-10 w-48 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 1210px);">
                                                <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownCheckboxButton">
                                                    <li>
                                                        <div class="flex items-center">
                                                            <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                            <label for="checkbox-item-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default checkbox</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="flex items-center">
                                                            <input checked="" id="checkbox-item-2" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                            <label for="checkbox-item-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Checked state</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="flex items-center">
                                                            <input id="checkbox-item-3" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                            <label for="checkbox-item-3" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default checkbox</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">
                            <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                                <div class="inline-block">
                                    <div class="flex space-x-6 justify-start items-center">
                                        <div class="form-check">
                                            <input class="form-check-input appearance h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="fontflash" id="fontflash">
                                            <label class="form-check-label inline-block text-gray-600" for="fontflash">
                                                Font Flash
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center items-center">
                                <div class="inline-block">
                                    <div class="flex space-x-6 justify-center items-center">
                                        <div class="form-check">
                                            <input class="form-check-input appearance h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="popupcamera" id="popupcamera">
                                            <label class="form-check-label inline-block text-gray-600" for="popupcamera">
                                                Pop-Up Camera
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center items-center">
                                <div class="inline-block">
                                    <div class="flex space-x-6 justify-center items-center">
                                        <div class="form-check">
                                            <input class="form-check-input appearance h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="dualcamera" id="dualcamera">
                                            <label class="form-check-label inline-block text-gray-600" for="dualcamera">
                                                Dual Camera
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center items-center">
                                <div class="inline-block">
                                    <div class="flex space-x-6 justify-center items-center">
                                        <div class="form-check">
                                            <input class="form-check-input appearance h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="underdisplaycamera" id="underdisplaycamera">
                                            <label class="form-check-label inline-block text-gray-600" for="underdisplaycamera">
                                                Under Display Camera
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center items-center">
                                <div class="inline-block">
                                    <div class="flex space-x-6 justify-center items-center">
                                        <div class="form-check">
                                            <input class="form-check-input appearance h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="OIS2">
                                            <label class="form-check-label inline-block text-gray-600" for="OIS2">
                                                OIS
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="bg-gray-200 lg:w-6/12 w-full md:my-10 my-8" />
                        <!--Battery Section -->
                        <div>
                            <div class="flex space-x-2 text-gray-800 dark:text-white">
                                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4.svg" alt="materials" />
                                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4dark.svg" alt="materials" />
                                <p class="lg:text-2xl text-xl lg:leading-6 leading-5 font-medium ">Battery</p>
                            </div>
                            <div class="md:flex md:space-x-6 mt-8 grid md:grid-cols-3 gap-y-8 flex-wrap">
                                <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                                    <div class="inline-block">
                                        <div class="flex space-x-6 justify-center items-center">
                                            <div>
                                                <div class="flex space-x-2 text-gray-800 dark:text-white">
                                                </div>
                                                <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">
                                                    <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                                                        <div class="inline-block">
                                                            <div class="flex space-x-6 justify-center items-center">
                                                                <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start ">
                                                                    <label for="minmax-range" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-300">Capacity</label>
                                                                    <input id="minmax-range" type="range" min="0" max="10" value="0" class="w-full h-2 bg-gray-200 rounded-lg appearance cursor-pointer dark:bg-gray-700">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex justify-center items-center">
                                                        <div class="inline-block">
                                                            <div class="flex space-x-6 justify-center items-center">
                                                                <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start ">
                                                                    <label for="minmax-range" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-300">Wired Charging</label>
                                                                    <input id="minmax-range" type="range" min="0" max="10" value="0" class="w-full h-2 bg-gray-200 rounded-lg appearance cursor-pointer dark:bg-gray-700">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex justify-center items-center">
                                                        <div class="inline-block">
                                                            <div class="flex space-x-6 justify-center items-center">
                                                                <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start ">
                                                                    <label for="minmax-range" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-300">Wireless Charging</label>
                                                                    <input id="minmax-range" type="range" min="0" max="10" value="0" class="w-full h-2 bg-gray-200 rounded-lg appearance cursor-pointer dark:bg-gray-700">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">
                        <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                            <div class="inline-block">
                                <div class="flex space-x-6 justify-start items-center">
                                    <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox" class="  dark:text-gray-300 font-normal text-gray-600  hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300  rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Removable
                                        <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg></button>

                                    <!-- Dropdown menu -->
                                    <div id="dropdownDefaultCheckbox" class="hidden z-10 w-48 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 1210px);">
                                        <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownCheckboxButton">
                                            <li>
                                                <div class="flex items-center">
                                                    <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                    <label for="checkbox-item-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default checkbox</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="flex items-center">
                                                    <input checked="" id="checkbox-item-2" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                    <label for="checkbox-item-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Checked state</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="flex items-center">
                                                    <input id="checkbox-item-3" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                    <label for="checkbox-item-3" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default checkbox</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Apply Filter Button (Large Screen) -->

                <div class="hidden md:block absolute right-0 bottom-0 md:py-10 lg:px-20 md:px-6 py-9 px-4">
                    <button onclick="applyFilters()" class="hover:bg-gray-700 dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:ring focus:ring-offset-2 focus:ring-gray-800 text-base leading-4 font-medium py-4 px-10 text-white bg-gray-800">Show</button>
                </div>

                <!-- Apply Filter Button (Table or lower Screen) -->

                <div class="block md:hidden w-full mt-10">
                    <button onclick="applyFilters()" class="w-full hover:bg-gray-700 dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:ring focus:ring-offset-2 focus:ring-gray-800 text-base leading-4 font-medium py-4 px-10 text-white bg-gray-800">Show</button>
                </div>
            </div>
        </div>

        <style>
            .checkbox:checked+.check-icon {
                display: flex;
            }
        </style>



    </section>
</x-guest-layout>