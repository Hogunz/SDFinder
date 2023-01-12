<x-guest-layout>
    <!-- Section 1 -->
    <div class="container mx-auto py-4 ">
      <div class="bg-white dark:bg-gray-700 p-6 shadow-lg rounded-lg flex justify-between items-center">
        <div class="flex dark:text-white">
          <div class="mr-4 h-full">
            <img class="shadow h-full w-40   bg-gray-100" src="{{  asset('storage/'.$user->vendorInformation->avatar)  }}" alt="Avatar" />
          </div>
          <div>
            <p class="text-4xl font-extrabold line-clamp-1">{{ $user->name }}</p>
            <p class="text-gray-500">Address: {{ $user->vendorInformation->address }}</p>
            <p class="text-gray-500">Contact: {{ $user->vendorInformation->contact }}</p>
            <p class="text-gray-500 text-sm">{{ $user->vendorInformation->type }}</p>
            <p class="text-sm text-gray-500 line-clamp-2 italic">{{ $user->vendorInformation->main_products }}</p>
          </div>
        </div>

      </div>
    </div>

    <!-- Section 1 -->


    <!-- Section 2 -->
    <section class="container mx-auto bg-white dark:bg-gray-300">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper ">
            <!-- Slides -->
                @foreach($user->getMobiles() as $mobile)
                    <div class="swiper-slide shadow-lg">
                        <a href="{{ $mobile['url'] }}" class="rounded p-6 ">
                            <div>
                                <img src="{{ asset('storage/'.$mobile['img']) }}" alt="" class="w-full h-40 object-center object-contain">
                            </div>
                            <div class="font-bold uppercase break-words text-center text-sm">{{ $mobile['name'] }}</div>
                            <div class="font-bold uppercase break-words text-center text-sm">{{ $mobile['variant'] }}</div>
                            <div class="font-bold uppercase break-words text-center text-sm">{{ $mobile['price'] }}</div>
                        </a>
                    </div>

                @endforeach
                <div class="swiper-slide h-auto flex flex-col justify-center">

                        <a href="{{ route('store.mobiles', $user) }}" class="hover:underline text-xl">View All ></a>


                </div>

            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>


    </section>
    <!-- Section 2 -->

    <!-- Section 3 -->
    <section class="container mx-auto bg-white dark:bg-gray-500 pt-6">
        <!-- Article -->
        <div class="grid grid-rows-3 grid-flow-col gap-4 text-center w-full content-center pb-10">
            <div class="border  dark:border-transparent  border-zinc-200 row-span-3 w-96 px-8 py-8">

                <figure class="max-w-lg pb-4">
                    <img class="max-w-full h-auto rounded-lg" src="https://storage.pixteller.com/designs/designs-videos/2090558-5fe0b83524270/thumb.gif" alt="image description">
                </figure>
                <figure class="max-w-lg pb-4">
                    <img class="max-w-full h-auto rounded-lg" src="https://storage.pixteller.com/designs/designs-videos/2086175-5fe0b8374c636/thumb.webp" alt="image description">
                </figure>
            </div>

            <div class="border rounded-lg border-transparent border-zinc-200 shadow-xl row-span-3 col-span-2">
                <div class="col-span-2  p-8 ">
                    <h1 class="font-bold text-2xl text-left text-gray-800 dark:text-white">STORE OVERVIEW</h1>
                    <h2 class="font-bold text-base text-left text-gray-800 dark:text-white pt-6">BASIC INFORMATION </h2>
                    <p class="text-lg text-justify indent-8 text-gray-600 dark:text-gray-400"> {!! $user->vendorInformation->information !!}</p>
                </div>
                <hr class="my-8 h-px bg-gray-200 border-0 dark:bg-gray-700">
                <div class="2xl:container 2xl:mx-auto md:py-12 lg:px-20 md:px-6 py-9 px-4">
                    <div class="text-center">
                        <h2 class="font-semibold dark:text-white lg:text-4xl text-3xl lg:leading-9 md:leading-7 leading-9 text-gray-800 md:w-full w-9/12 mx-auto">Company Album</h2>
                        <p class="font-normal text-base leading-6 dark:text-gray-400 text-gray-600 mt-4 lg:w-5/12 md:w-9/12 mx-auto">Follow us on <span class="underline cursor-pointer ">{{ $user->vendorInformation->website }}</span> and tag us to get featured on our timeline</p>
                    </div>
                    <div class="grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 lg:grap-8 md:gap-6 gap-4 mt-10">
                        @foreach($user->vendorInformation->galleries as $gallery)
                            <div class="relative group">
                                <img src="{{ asset('storage/'.$gallery) }}" alt="A picture of a sitting dog" class="lg:block hidden w-full object-fit object-center" />
                                <img src="{{ asset('storage/'.$gallery) }}" alt="A picture of a sitting dog" class="lg:hidden block w-full object-fit object-center" />
                                <div class="flex justify-center items-center opacity-0 bg-gradient-to-t from-gray-800 via-gray-800 to-opacity-30 group-hover:opacity-50 absolute top-0 left-0 h-full w-full"></div>
                            </div>
                        @endforeach
                    </div>

                </div>


                <hr class=" bg-gray-200 border-0 dark:bg-gray-700">

                <iframe class="w-full mt-2 h-80" src="{{ $user->vendorInformation->embed_google_map }}" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <!-- Article -->


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

<script>
     window.onload = function(){
        const swiper = new Swiper('.swiper', {
            rewind: true,
            speed: 400,
            spaceBetween: 100,
            slidesPerView: 4,
            autoplay: {
                delay: 5000,
            },
            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },
        });

    }
</script>
