<div class="h-full w-full">
    <!-- Code block starts -->
    <nav role="navigation" class="dark:bg-gray-500 xl:block hidden">
        <div class="mx-auto container px-6 py-2 xl:py-0">
            <div class="flex items-center justify-between">
                <div class="inset-y-0 left-0 flex items-center xl:hidden">
                    <div
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-gray-100 focus:outline-none transition duration-150 ease-in-out">
                        <div class="visible xl:hidden">
                            <ul class="p-2 border-r bg-white absolute rounded left-0 right-0 shadow mt-8 md:mt-8 hidden">
                                <li
                                    class="flex xl:hidden cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-2 py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                    <div class="flex items-center">
                                        <span class="ml-2 font-bold">Home</span>
                                    </div>
                                </li>
                                <li class=" xl:hidden flex-col cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none flex justify-center"
                                    onclick="dropdownHandler(this)">
                                    <div class="flex items-center">

                                        <span class="ml-2 font-bold">Device Finder</span>
                                    </div>
                                </li>
                                <li
                                    class=" xl:hidden cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none">

                                    <span class="ml-2 font-bold">Reviews</span>
                                </li>
                                <li
                                    class="border-b border-gray-300  xl:hidden cursor-pointer text-gray-600 text-sm leading-3 tracking-normal pt-2 pb-4 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none">

                                    <span class="ml-2 font-bold">Brands</span>
                                </li>
                                <li
                                    class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-2 py-2 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none">
                                    <div class="flex items-center">
                                        <div
                                            class="w-12 cursor-pointer flex text-sm border-2 border-transparent rounded focus:outline-none focus:border-white transition duration-150 ease-in-out">
                                            <img class="rounded h-10 w-10 object-cover"
                                                src="https://tuk-cdn.s3.amazonaws.com/assets/components/horizontal_navigation/hn_1.png"
                                                alt="logo" />
                                        </div>
                                        <p class="text-sm ml-2 cursor-pointer">Christopher James </p>
                                        <div class="sm:ml-2 text-white relative">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-chevron-down cursor-pointer"
                                                width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                    <div class="flex items-center">

                                        <span class="ml-2">Profile</span>
                                    </div>
                                </li>
                            </ul>
                            <img class="show-m-menu icon icon-tabler icon-tabler-menu" onclick="MenuHandler(this,true)"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg2.svg"
                                alt="icon" />
                        </div>
                        <div class="hidden close-m-menu text-gray-700" onclick="MenuHandler(this,false)">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg1.svg"
                                alt="icon-2" />
                        </div>
                    </div>
                </div>
                <a href="/">
                    <button
                        class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 rounded-md flex w-full sm:w-auto items-center sm:items-stretch justify-end sm:justify-start">
                        <div class="flex items-center">

                            <img class="h-10" src="{{ asset('img/sd.svg') }}" alt="logo" />


                        </div>
                    </button>
                </a>
                <!-- Main  -->
                <div class="flex">
                    <div class="hidden xl:flex md:mr-6 xl:mr-16">
                        <a href="/"
                            class="focus:text-gray-700 border-b-2 border-transparent focus:border-gray-600 flex px-5 items-center py-6 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none transition duration-150 ease-in-out hover:font-extrabold ">
                            Home
                        </a>
                        <a href="{{ route('mobile.viewPhones') }}"
                            class="focus:text-gray-700 border-b-2 border-transparent focus:border-gray-600 flex px-5 items-center py-6 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none transition duration-150 ease-in-out hover:font-extrabold ">
                            Device Finder
                        </a>
                        <a href="/reviews"
                            class="focus:text-gray-700 border-b-2 border-transparent focus:border-gray-600 flex px-5 items-center py-6 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none transition duration-150 ease-in-out hover:font-extrabold ">
                            Reviews
                        </a>
                        <a href="/brands"
                            class="focus:text-gray-700 border-b-2 border-transparent focus:border-gray-600 flex px-5 items-center py-6 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none transition duration-150 ease-in-out hover:font-extrabold ">
                            Brands
                        </a>
                    </div>
                    <div class="hidden xl:flex items-center">
                        <div class="relative md:mr-6 my-2">
                            <div class="w-full pr-12 h-full flex items-center border-r">
                                <div class="relative w-full">
                                    <div class="text-gray-600 absolute ml-3 inset-0 m-auto w-4 h-4">
                                        <a href="" class="href">
                                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_Grey_background-svg3.svg"
                                                alt="search">
                                        </a>
                                    </div>
                                    <form action="{{ route('mobile.viewPhones') }}" method="get">
                                        <input
                                            class="border border-gray-100 focus:outline-none focus:border-indigo-700 w-56 rounded text-sm text-gray-500 placeholder-gray-600  pl-8 py-2"
                                            type="text" placeholder="Search" name="search">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <button id="theme-toggle" type="button"
                            class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                            </svg>
                            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                    fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div class="ml-6 relative">

                            <div class="flex space-x-2 justify-center">
                                @auth
                                    <!-- Settings Dropdown -->
                                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                                        <x-dropdown align="right" width="48">
                                            <x-slot name="trigger">
                                                <button
                                                    class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-100 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                                    <div>{{ Auth::user()->name }}</div>

                                                    <div class="ml-1">
                                                        <svg class="fill-current h-4 w-4"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd"
                                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </div>
                                                </button>
                                            </x-slot>

                                            <x-slot name="content">
                                                <div class="divide-y">

                                                    <x-dropdown-link href="/dashboard">
                                                        Dashboard
                                                    </x-dropdown-link>
                                                    <!-- Authentication -->
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf

                                                        <x-dropdown-link :href="route('logout')"
                                                            onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                                            {{ __('Log Out') }}
                                                        </x-dropdown-link>
                                                    </form>
                                                </div>
                                            </x-slot>
                                        </x-dropdown>
                                    </div>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="inline-block px-6 py-2.5 dark:text-white text-gray-600 font-medium text-xs leading-normal tracking-wide  rounded-lg  hover:bg-blue-700 hover:text-white hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                        Login
                                    </a>
                                    <a href="{{ route('register') }}" class="href">
                                        <button type="button"
                                            class="inline-block px-6 py-2.5  dark:text-white text-gray-600 font-medium text-xs leading-normal tracking-wide  rounded-lg  hover:bg-blue-700 hover:text-white hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                            Register
                                        </button>
                                    </a>
                                @endauth
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </nav>
    <nav>
        <div class="py-4 px-6 w-full flex xl:hidden justify-between items-center bg-white fixed top-0 z-40">
            <div aria-label="logo" role="img" tabindex="0" class="focus:outline-none w-24">
                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg9.svg" alt="logo" />
            </div>
            <div class="flex items-center">
                <div class="relative mr-6">
                    <button
                        class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none bg-gray-100 border-gray-300 border transition duration-150 ease-in-out hover:bg-gray-300 rounded text-gray-600 px-5 py-2 text-xs">Manage</button>
                </div>
                <button id="menu" aria-label="open menu"
                    class="focus:outline-none focus:ring-2 focus:ring-gray-600 rounded-md text-gray-800"
                    onclick="sidebarHandler(true)">
                    <img class="icon icon-tabler icon-tabler-menu-2"
                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg10.svg"
                        alt="menu" />
                </button>
            </div>
        </div>
        <!--Mobile responsive sidebar-->
        <div class="absolute w-full h-full transform -translate-x-full z-40 xl:hidden" id="mobile-nav">
            <div class="bg-gray-800 opacity-50 w-full h-full" onclick="sidebarHandler(false)"></div>
            <div
                class="w-64  fixed overflow-y-auto z-40 top-0 bg-white shadow h-full flex-col justify-between xl:hidden pb-4 transition duration-150 ease-in-out">
                <div class="px-6 h-full">
                    <div class="flex flex-col justify-between h-full w-full">
                        <div>
                            <div class="mt-6 flex w-full items-center justify-between">
                                <div class="flex items-center justify-between w-full">
                                    <div class="flex items-center">

                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg9.svg"
                                            alt="logo" />
                                        <p tabindex="0"
                                            class="focus:outline-none text-base md:text-2xl text-gray-800 ml-3">
                                            SDFinder</p>

                                    </div>
                                    <button id="cross" aria-label="close menu"
                                        class="focus:outline-none focus:ring-2 rounded-md text-gray-800"
                                        onclick="sidebarHandler(false)">
                                        <img class="icon icon-tabler icon-tabler-x"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg11.svg"
                                            alt="cross" />
                                    </button>
                                </div>
                            </div>
                            <ul class="f-m-m">
                                <li>
                                    <a class="cursor-pointer">
                                        <div class="text-gray-800 pt-10">
                                            <div class="flex items-center">
                                                <div class="w-6 h-6 md:w-8 md:h-8 text-gray-700">
                                                    <img class="icon icon-tabler icon-tabler-grid"
                                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg12.svg"
                                                        alt="dashboard" />
                                                </div>
                                                <p tabindex="0"
                                                    class="focus:outline-none focus:text-gray-600 text-gray-700 xl:text-base text-base ml-3">
                                                    Home</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="cursor-pointer">
                                        <div class="text-gray-800 pt-8">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <div class="w-6 h-6 md:w-8 md:h-8 text-gray-800">
                                                        <img class="icon icon-tabler icon-tabler-puzzle"
                                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg13.svg"
                                                            alt="products" />
                                                    </div>
                                                    <p tabindex="0"
                                                        class="focus:outline-none focus:text-indigo-600 text-gray-800 xl:text-base md:text-2xl text-base ml-3">
                                                        Device Finder</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="cursor-pointer">
                                        <div class="text-gray-800 pt-8">
                                            <div class="flex items-center">
                                                <div class="w-6 h-6 md:w-8 md:h-8 text-gray-800">
                                                    <img class="icon icon-tabler icon-tabler-compass"
                                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg14.svg"
                                                        alt="performance" />
                                                </div>
                                                <p tabindex="0"
                                                    class="focus:outline-none focus:text-indigo-600 text-gray-800 xl:text-base md:text-2xl text-base ml-3">
                                                    Reviews</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="text-gray-800 pt-8 cursor-pointer">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <div class="w-6 h-6 md:w-8 md:h-8 text-gray-800">
                                                <img class="icon icon-tabler icon-tabler-code"
                                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg15.svg"
                                                    alt="deliverables" />
                                            </div>
                                            <p tabindex="0"
                                                class="focus:outline-none focus:text-indigo-600 text-gray-800 xl:text-base md:text-2xl text-base ml-3">
                                                Brands</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full pt-4">
                            <div class="flex justify-center mb-4 w-full">
                                <div class="relative w-full">
                                    <div class="text-gray-500 absolute ml-4 inset-0 m-auto w-4 h-4">
                                        <img class="icon icon-tabler icon-tabler-search"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg16.svg"
                                            alt="search" />
                                    </div>
                                    <form action="{{ route('mobile.viewPhones') }}" method="get">

                                        <input
                                            class="focus:ring-2 focus:ring-gray-600 bg-gray-100 focus:outline-none rounded w-full text-sm text-gray-500 pl-10 py-2"
                                            type="text" placeholder="Search" name="search" />
                                    </form>
                                </div>
                            </div>
                            <div class="border-t border-gray-300">
                                <div class="w-full flex items-center justify-between pt-1">
                                    <div class="flex items-center">
                                        <img alt="profile-pic" src=" " tabindex="0"
                                            class="focus:outline-none  w-8 h-8 rounded-md" />
                                        <p tabindex="0"
                                            class="focus:outline-none text-gray-800 text-base leading-4 ml-2">
                                            Christopher James </p>
                                    </div>
                                    <ul class="flex">
                                        <li class="cursor-pointer text-gray-800 pt-5 pb-3">
                                            <div tabindex="0"
                                                class="focus:outline-none focus:text-indigo-600 w-6 h-6 md:w-8 md:h-8">
                                                <img class="icon icon-tabler icon-tabler-messages"
                                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg17.svg"
                                                    alt="chat" />
                                            </div>
                                        </li>
                                        <li class="cursor-pointer text-gray-800 pt-5 pb-3 pl-3">
                                            <div tabindex="0"
                                                class="focus:outline-none focus:text-indigo-600 w-6 h-6 md:w-8 md:h-8">
                                                <img class="icon icon-tabler icon-tabler-bell"
                                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg18.svg"
                                                    alt="bell" />
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>



    <!-- Code block ends -->
</div>
