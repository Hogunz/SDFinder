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
    <!-- Section 3 -->
    <section class="dark:bg-gray-500 pt-6">

        <div class="container mx-auto relative overflow-hidden ">
            <div class="mx-auto max-w-7xl ">
                <div class="relative z-10 bg-white  pb-8 sm:pb-16 md:pb-20 lg:w-full lg:max-w-2xl lg:pb-28 xl:pb-32">
                    <svg class="absolute inset-y-0 right-0 hidden h-full w-48 translate-x-1/2 transform text-white lg:block"
                        fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                        <polygon points="50,0 100,0 50,100 0,100" />
                    </svg>

                    <div>
                        <div class="relative px-4 pt-6 sm:px-6 lg:px-8">

                        </div>

                        <!--
          Mobile menu, show/hide based on menu open state.

          Entering: "duration-150 ease-out"
            From: "opacity-0 scale-95"
            To: "opacity-100 scale-100"
          Leaving: "duration-100 ease-in"
            From: "opacity-100 scale-100"
            To: "opacity-0 scale-95"
        -->

                    </div>

                    <main class="mx-auto mt-10 max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                        <div class="sm:text-center lg:text-left">
                            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
                                <span class="block xl:inline">{{ $phone->name }}</span>
                            </h1>
                            <p class="mt-3 text-base text-gray-500 sm:mx-auto sm:mt-5 sm:max-w-xl sm:text-lg md:mt-5 md:text-xl lg:mx-0 break-words">
                                {!! $phone->description !!}
                            </p>
                        </div>
                    </main>
                </div>
            </div>
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img class="h-56 w-full object-contain sm:h-72 md:h-96 lg:h-full lg:w-full"
                    src="{{ asset('storage/'.$phone->img) }}" alt="">
            </div>
        </div>

    </section>
    <!-- Section 3 -->

    <!-- Section 5 -->
    <section class="dark:bg-gray-500 pt-6">
        <div class="md:container py-6 px-24 md:mx-auto">

            <div class="container mx-auto">
                <h2 class="text-4xl font-extrabold dark:text-white">Specifications</h2>
                <p class="my-4 text-lg text-gray-400"><strong
                        class="font-semibold text-gray-900 dark:text-white">Body:</strong> {{ $phone->body }}.</p>
                <p class="my-4 text-lg text-gray-400"><strong
                        class="font-semibold text-gray-900 dark:text-white">Display:</strong> {{ $phone->display }}.</p>
                <p class="my-4 text-lg text-gray-400"><strong
                        class="font-semibold text-gray-900 dark:text-white">Chipset:</strong> {{ $phone->chipset->description }}.</p>
                <p class="my-4 text-lg text-gray-400"><strong
                        class="font-semibold text-gray-900 dark:text-white">Memory:</strong> {{ $phone->memory }}.</p>
                <p class="my-4 text-lg text-gray-400"><strong
                        class="font-semibold text-gray-900 dark:text-white">OS/Software:</strong> {{ $phone->os }}.</p>
                <p class="my-4 text-lg text-gray-400"><strong class="font-semibold text-gray-900 dark:text-white">Rear
                        camera:</strong> {{ $phone->rear_camera }}.</p>
                <p class="my-4 text-lg text-gray-400"><strong class="font-semibold text-gray-900 dark:text-white">Front
                        camera:</strong> {{ $phone->front_camera }}.
                </p>
                <p class="my-4 text-lg text-gray-400"><strong
                        class="font-semibold text-gray-900 dark:text-white">Battery:</strong> {{ $phone->battery_info }}.</p>
                <p class=" text-lg text-gray-400"><strong
                        class="font-semibold text-gray-900 dark:text-white">Misc:</strong> {{ $phone->other_features }}.</p>
            </div>
        </div>
    </section>
    <!-- Section 5 -->
    <section class="dark:bg-gray-500 pt-6">
        <div class="md:container py-6 px-24 md:mx-auto">
            <h2 class="text-4xl font-extrabold dark:text-white">Reviews</h2>
            <p class="my-4 text-lg text-gray-400">
                {!! optional($phone->review)->review ?? "No Reviews Yet" !!}
            </p>
        </div>
    </section>
    <!-- Section 6 -->
    <section class="bg-gradient-to-r from-neutral-900 via-neutral-700 to-neutral-600 pt-6 pb-6">
        <div class="container mx-auto">
            <h5 class="text-xl font-extrabold text-white dark:text-white">The stores where you buy you buy the product:
            </h5>
        </div>

    </section>
    <!-- Section 6 -->
</x-guest-layout>
