<x-guest-layout>
    <!-- Section 1 -->
    <section class=" dark:bg-gray-500 pt-12 font-sans">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white text-black">
                    Choose a Device, <span class="text-blue-600  "><br> Make it Real.</span></h1>
                <p class="max-w-2xl mb-6 font-light  lg:mb-8 md:text-lg lg:text-xl text-gray-800 dark:text-gray-400 ">
                    From phones to laptops , we’ll help you
                    find the best device for you.</p>
                <form method="get" action="{{ route('mobile.viewPhones') }}">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>

                            <input type="text" id="default-search" name="search"
                                class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border  border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="What kind of Device you want to find?" required>
                            <button type="submit"
                                class="absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 text-white dark:focus:ring-blue-300">Search</button>

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
                <h6 class="text-2xl pb-6 font-bold dark:text-gray-300 text-black  tracking-widest ">This Month's Picks
                </h6>
                <div class="bg-transparent dark:bg-gray">
                    <div class="mx-auto max-w-2xl py-16 px-4 sm:py-4 sm:px-6 lg:max-w-7xl lg:px-8">
                        <div
                            class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                            @foreach ($phones as $phone)
                                <a href="{{ route('mobile.viewPhone', $phone) }}" class="group">
                                    <div class="aspect-w-1 aspect-h-1 w-full xl:aspect-w-7 xl:aspect-h-8">
                                        <img src="{{ asset('storage/'.$phone->img) }}" alt=""
                                            class=" p-8 object-scale-down h-48 w-96 object-center ">
                                    </div>
                                    <h3 class="mt-4 text-sm text-gray-800  dark:text-white">{{ $phone->name }} </h3>

                                </a>
                            @endforeach

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

                <!-- Background image -->
            </header>

            <!-- Background image -->
            <div class="relative overflow-hidden bg-no-repeat bg-cover bg-blend-multiply bg-center"
                style="
    background-position: 50%;
    background-image: url('https://images.pexels.com/photos/2047909/pexels-photo-2047909.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
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
                    <div
                        class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">

                        @foreach ($phones as $phone)
                            <a href="{{ route('mobile.viewPhone', $phone) }}" class="group ">
                                <div class="aspect-w-1 aspect-h-1 w-full xl:aspect-w-7 xl:aspect-h-8">
                                    <img src="{{ asset('storage/'.$phone->img) }}" alt=""
                                        class="p-8 object-scale-down h-48 w-96 object-center ">
                                </div>
                                <h3 class="mt-4 text-sm text-gray-800 dark:text-white">{{ $phone->name }}</h3>
                            </a>
                        @endforeach


                        <!-- More products... -->
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Section 3 -->

    <!-- Section 5 -->
    <section class="pt-6">
        <div class="container mx-auto text-center">
            <header class="pb-6">
                <!-- Background image -->
                <div class="relative overflow-hidden bg-no-repeat bg-cover bg-blend-multiply bg-center"
                    style="
    background-position: 50%;
    background-image: url('https://images.pexels.com/photos/129208/pexels-photo-129208.jpeg?auto=compress&cs=tinysrgb&w=1600');
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
                    <div
                        class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                        @foreach ($laptops as $laptop)
                            <a href="{{ route('laptop.viewLaptop', $laptop) }}" class="group ">
                                <div class="aspect-w-1 aspect-h-1 w-full    xl:aspect-w-7 xl:aspect-h-8">
                                    <img src="{{ asset('storage/'.$laptop->img) }}" alt=""
                                        class="p-8 object-scale-down h-48 w-96 object-center ">
                                </div>
                                <h3 class="mt-4 text-sm text-gray-800 dark:text-white">{{ $laptop->name }}</h3>
                            </a>
                        @endforeach


                        <!-- More products... -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 5 -->



</x-guest-layout>
