<x-guest-layout>
    <!-- Section 1 -->
    <div class="container mx-auto relative overflow-hidden bg-no-repeat bg-cover bg-center"
                style="
    background-image: url('https://www.boldbusiness.com/wp-content/uploads/2018/08/Amazon-Sponsored-Ads.gif');
    height: 300px;
    width: 900px;
  ">
            </div>
    <div class="mr-auto place-self-center lg:col-span-7 pt-12">
        <h1 class="mb-4 text-3xl font-extrabold underline underline-offset-8 decoration-yellow-600 tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white text-center">
            Reviews</h1>
    </div>
    <!-- Section 1 -->
    <!-- Section 2 -->
    <section class="dark:bg-gray-500 ">

        <div class="dark:bg-gray-500 ">
            <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                @if($reviews->count() < 1) <div class="text-center w-full dark:text-white uppercase">
                    No reviews yet
            </div>
            @endif

            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($reviews as $review)
                <div class="group relative">
                    <div class="aspect-w-1 aspect-h-1 w-full    xl:aspect-w-7 xl:aspect-h-8">
                        <img src="{{ asset('storage/'.$review->reviewable->img) }}" alt="Front of men&#039;s Basic Tee in black." class=" object-contain object-center ">
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
    <!-- Section 2 -->
</x-guest-layout>