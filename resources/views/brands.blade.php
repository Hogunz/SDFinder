<x-guest-layout>

    <!-- Section 1 -->
    <div class="container mx-auto relative overflow-hidden bg-no-repeat bg-contain bg-center" style="
    background-image: url('https://camo.envatousercontent.com/c0893c49ba709dffd4cbaad5cce99161291c9388/68747470733a2f2f746869736b6f2e66696c65732e776f726470726573732e636f6d2f323031372f30372f766964656f2d646f776e6c6f61642e676966');
    height: 164px;
    width: 900px;
  ">
    </div>
    <div class="mr-auto place-self-center lg:col-span-7 pt-12">
        <h1 class="mb-4 text-3xl font-extrabold underline underline-offset-8 decoration-yellow-600 tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white text-center">
            All Smart<br>Device Brands</h1>
    </div>
    <!-- Section 1 -->
    <!-- Section 2 -->

    <!-- Section 2 -->
    <!-- Section 3 -->
    <section class="dark:bg-gray-500 ">

        <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="m-8 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($brands as $brand)
                <div class="group relative p-8 bg-transparent">
                    <div class="aspect-w-1 aspect-h-1 mx-auto w-48  xl:aspect-w-7 xl:aspect-h-8">
                        <img src="{{ asset('storage/'.$brand->image) }}" alt="Front of men&#039;s Basic Tee in black." class=" object-contain object-center ">
                    </div>
                    <div class="mt-4 flex flex-col text-center ">
                        <div>
                            <h3 class="mt-4 text-sm text-gray-800 dark:text-white">
                                <a href="{{ route('mobile.viewPhones', ['brands' => [$brand->id]]) }}">
                                    <span aria-hidden="true" class="mb-6 absolute inset-0"></span>
                                    {{ $brand->name }}
                                </a>
                            </h3>
                        </div>
                        <div class="flex space-x-2 justify-center">
                            <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block mt-6 px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">View
                                All</button>
                        </div>
                    </div>
                </div>
                <!-- More products... -->
                @endforeach
            </div>
        </div>





    </section>
    <!-- Section 3 -->

</x-guest-layout>