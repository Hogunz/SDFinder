<x-guest-layout>
    <!-- Section 1 -->
    <section class="dark:bg-gray-500 pt-6">

        <div class="container mx-auto pt-6 text-center ">
            <header class="pb-6">
                <!-- Background image -->
                <div class="flex flex-row relative overflow-hidden bg-no-repeat bg-contain rounded-3xl"
                    style="
                        background-position: 50%;
                        background-image: url('https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/ec7e0379342789.5cc04099cb9e5.gif');
                        height: 350px;">

                </div>
                <!-- Background image -->
            </header>
        </div>
    </section>
    <!-- Section 1 -->

    <!-- Section 2 -->
    <div>

        <!-- Section: Design Block -->
        <section class="mb-12 p-8 bg-white">
            <div class="px-6 md:px-12 text-center lg:text-left">
                <div class="container mx-auto xl:px-32">
                    <div class="grid lg:grid-cols-2 gap-12 flex items-center">
                        <div class="mt-12 lg:mt-0">
                            <h1 class="text-5xl md:text-6xl xl:text-5xl font-bold tracking-tight mb-12 text-left">
                                {{ $laptop->name }}</h1>
                            <p
                                class="mt-3 text-base  text-gray-500 sm:mx-auto sm:mt-5 sm:max-w-xl sm:text-lg md:mt-5 md:text-xl lg:mx-0 break-words">
                                {!! $laptop->description !!}
                            </p>
                        </div>
                        <div class="mb-12 lg:mb-0">
                            <img src="{{ asset('storage/' . $laptop->img) }}"
                                class="h-56 w-full  bg-no-repeat object-scale-down sm:h-72 md:h-96 lg:h-56 lg:w-full"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Design Block -->

    </div>
    <!-- Section 2 -->


    <!-- Section 3 -->
    {{-- <section class="dark:bg-gray-500 pt-6 ">

        <div class="container mx-auto relative overflow-hidden  ">
            <div class="mx-auto max-w-7xl  ">
                <div class="relative z-10 bg-white  pb-8 sm:pb-16 md:pb-20 lg:w-full lg:max-w-full lg:pb-28 xl:pb-32 ">
                    <div>
                        <img class="h-56 w-full absolute  bg-no-repeat object-scale-down object-center sm:h-72 md:h-96 lg:h-full lg:w-full "
                            src="{{ asset('storage/' . $laptop->img) }}" alt="">
                    </div>
                    <div class="relative px-4 pt-6  sm:px-6 lg:px-8">
                        <main class="mx-auto mt-10 max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                            <div class="sm:text-center lg:text-left">
                                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl md:text-6xl h-6">
                                    <span class="block xl:inline">{{ $laptop->name }}</span>
                                </h1>
                                <p
                                    class="mt-3 text-base text-gray-500 sm:mx-auto sm:mt-5 sm:max-w-xl sm:text-lg md:mt-5 md:text-xl lg:mx-0 break-words">
                                    {!! $laptop->description !!}
                                </p>
                            </div>
                        </main>
                    </div>

                </div>
            </div>

        </div>

    </section> --}}
    <!-- Section 3 -->

    <!-- Section 5 -->
    <section class="dark:bg-gray-500 pt-6">
        <div class="md:container py-6 px-24 md:mx-auto">

            <div class="container mx-auto">
                <h2 class="text-4xl font-extrabold dark:text-white">Specifications</h2>
                <p class="my-4 text-lg text-gray-400"><strong
                        class="font-semibold text-gray-900 dark:text-white">GPU:</strong> {{ $laptop->gpu }}.</p>
                <p class="my-4 text-lg text-gray-400"><strong
                        class="font-semibold text-gray-900 dark:text-white">CPU:</strong> {{ $laptop->cpu }}.</p>

                <p class="my-4 text-lg text-gray-400"><strong
                        class="font-semibold text-gray-900 dark:text-white">Display:</strong> {{ $laptop->display }}.
                </p>
                <p class="my-4 text-lg text-gray-400"><strong
                        class="font-semibold text-gray-900 dark:text-white">Storage:</strong>
                    {{ $laptop->storage_mem }}.
                </p>
                <p class="my-4 text-lg text-gray-400"><strong
                        class="font-semibold text-gray-900 dark:text-white">Battery:</strong> {{ $laptop->battery }}.
                </p>
                <p class="my-4 text-lg text-gray-400"><strong
                        class="font-semibold text-gray-900 dark:text-white">Camera:</strong>
                    {{ $laptop->camera_display }}.
                </p>
                <p class="my-4 text-lg text-gray-400"><strong
                        class="font-semibold text-gray-900 dark:text-white">Features:</strong>
                    {{ $laptop->features_display }}.
                </p>

            </div>
        </div>
    </section>
    <!-- Section 5 -->
    <section class="dark:bg-gray-500 pt-6">
        <div class="md:container py-6 px-24 md:mx-auto">
            <h2 class="text-4xl font-extrabold dark:text-white">Reviews</h2>
            <p class="my-4 text-lg text-gray-400">
                {!! optional($laptop->review)->review ?? 'No Reviews Yet' !!}
            </p>
        </div>
    </section>
    <!-- Section 6 -->
    <section class="bg-gradient-to-r from-neutral-900 via-neutral-700 to-neutral-600 pt-6 pb-6">
        <div class="container mx-auto">
            <h5 class="text-xl font-extrabold text-white dark:text-white">The stores where you buy you buy the product:
            </h5>
        </div>
        @forelse ($laptop->users->unique() as $shop)
            <div class="container mx-auto py-4 px-4">
                <div class="bg-white dark:bg-gray-700 p-6 shadow-lg rounded-lg flex justify-between items-center">
                    <div class="flex dark:text-white">
                        <div class="mr-4">
                            <img class="shadow sm:w-24 sm:h-24 w-24 h-24  bg-gray-100"
                                src="{{ asset('storage/' . $shop->vendorInformation->avatar) }}" alt="Avatar" />
                        </div>
                        <div>
                            <p class="text-4xl font-extrabold line-clamp-1">{{ $shop->name }}</p>
                            <span class="flex items-center justify-start text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37"
                                    fill="currentColor" class="bi bi-building" viewBox="0 0 16 16" id="IconChangeColor">
                                    <path fill-rule="evenodd"
                                        d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"
                                        id="mainIconPathAttribute"></path>
                                    <path
                                        d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"
                                        id="mainIconPathAttribute"></path>
                                </svg>
                                {{ $shop->vendorInformation->type }}
                            </span>
                            <p class="text-sm text-gray-500 mt-1 line-clamp-2">
                                Main Products : {{ $shop->vendorInformation->main_products }}
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class=" font-semibold text-center text-gray-900 dark:text-white">
                            {{ $shop->pivot->price_string }} <br>
                            @if ($shop->pivot->device_description)
                                Freebies: {{ $shop->pivot->device_description }}
                            @endif
                        </div>
                        <a href="{{ route('store.profile', $shop) }}">
                            <button
                                class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                                <span
                                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    View Profile
                                </span>
                            </button>
                        </a>
                    </div>

                </div>
            </div>
        @empty
            <div class="container mx-auto py-4 px-4">
                <div class="bg-white dark:bg-gray-700 p-6 shadow-lg rounded-lg flex justify-between items-center">
                    <div class="flex dark:text-white justify-center">
                        <span class="text-4xl font-extrabold">No available shops</span>
                    </div>
                </div>
            </div>
        @endforelse
    </section>
    <!-- Section 6 -->
</x-guest-layout>
