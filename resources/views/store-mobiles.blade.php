<x-guest-layout>
    <div class="mx-auto py-12 max-w-7xl rounded dark:bg-gray-500 container">

        <div class="mr-auto place-self-center lg:col-span-7 pt-12">
            <h1 class="mb-4 text-3xl font-extrabold underline underline-offset-8 decoration-yellow-600 tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white text-center">
                MOBILES
        </div>
        <div class="grid grid-cols-4 gap-4">

            @foreach($user->getMobiles() as $mobile)
            <a href="{{ $mobile['url'] }}" class="rounded p-6 shadow-lg relative group">
                <div>
                    <img src="{{ asset('storage/'.$mobile['img']) }}" alt="" class="w-full h-40 object-center object-contain">
                </div>
                <div class="font-bold uppercase break-words text-center text-sm">{{ $mobile['name'] }}</div>
                <div class="font-bold uppercase break-words text-center text-sm">{{ $mobile['variant'] }}</div>
                <div class="font-bold uppercase break-words text-center text-sm">{{ $mobile['price'] }}</div>
            </a>
            @endforeach
        </div>

    </div>
</x-guest-layout>


