<x-guest-layout>
    <!-- Section 1 -->
    <section class="dark:bg-gray-500 pt-24   ">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold underline underline-offset-8 decoration-yellow-600 tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Reviews</h1>
             
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup">
            </div>
        </div>
    </section>
    <!-- Section 1 -->
    <!-- Section 2 -->
    <section class="dark:bg-gray-500 pt-24 ">

        <div class="container mx-auto text-center">
            <header class=" ">
                <!-- Background image -->
                <div class="relative overflow-hidden bg-no-repeat bg-cover rounded-3xl"
                    style="
    background-position: 50%;
    background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/146.webp');
    height: 350px;
  ">
                    <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                        style="background-color: rgba(0, 0, 0, 0.75)">
                        <div class="flex justify-center items-center h-full">
                            <div class="text-center text-white px-6 md:px-12">
                                <h1 class="text-5xl font-bold mt-0 mb-6">Ads</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Background image -->
            </header>
        </div>
    </section>
    <!-- Section 2 -->

    <!-- Section 3 -->
    <section class="dark:bg-gray-500 pt-24">

        <div class="dark:bg-gray-500 pt-24">
            <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                <h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-900">Reviews</h2>
                @if($reviews->count() < 1)
                    <div class="text-center w-full dark:text-white uppercase">
                        No reviews yet
                    </div>
                @endif

                <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                    @foreach ($reviews as $review)
                        <div class="group relative">
                            <div class="aspect-w-1 aspect-h-1 w-full    xl:aspect-w-7 xl:aspect-h-8">
                                <img src="{{ asset('storage/'.$review->reviewable->img) }}" alt="Front of men&#039;s Basic Tee in black."
                                    class=" object-contain object-center ">
                            </div>
                            <div class="mt-4 flex flex-col text-center">
                                <div>
                                    <h3 class="dark:text-white text-sm text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class=" absolute inset-0"></span>
                                            {{ $review->reviewable->name }}
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>


                    @endforeach
                </div>
            </div>
        </div>




    </section>
    <!-- Section 3 -->
</x-guest-layout>
