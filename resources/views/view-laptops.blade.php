<x-guest-layout>
    <div class="mx-auto py-12 max-w-7xl rounded dark:bg-gray-500 container">

        <div class="flex flex-row gap-4">
            <div class="shrink-0">
                <div class="shadow-lg">
                    <a href="{{ route('laptop.finder') }}" class="block w-full text-center bg-blue-500 hover:bg-blue-700 text-white py-3 tracking-tight">
                        DEVICE FILTER
                    </a>

                    <div class="grid grid-cols-3  w-full h-full justify-items-stretch">
                        @foreach ($brands as $brand)

                        <a href="{{ route('laptop.viewLaptops', ['brands' => [$brand->id]]) }}" class="block w-full text-center text-sm uppercase hover:bg-blue-700 hover:text-white px-5 py-3">
                            <span class="tracking-tighter leading-tight">
                                {{ $brand->name }}
                            </span>
                        </a>

                        @endforeach
                    </div>

                    <a href="{{ route('laptop.viewLaptops') }}" class="block w-full text-center bg-blue-500 hover:bg-blue-700 text-white py-3 tracking-tight">RESET FILTER</a>
                </div>


            </div>
            <div class="w-full relative">
                @if($laptops->count() < 1) <div class="inset-x-0 text-center font-bold">
                    NO RESULT FOUND
            </div>
            @endif
            <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-2">
                @foreach ($laptops as $laptop)
                <a href="{{ route('laptop.viewLaptop', $laptop) }}" class="rounded p-6 shadow-lg relative group">
                    <div>
                        <img src="{{ asset('storage/'.$laptop->img) }}" alt="" class="w-full h-40 object-center object-contain">
                    </div>
                    <div class="font-bold uppercase break-words text-center text-sm">{{ $laptop->name }}</div>
                </a>

                @endforeach
            </div>
        </div>

    </div>

    </div>
</x-guest-layout>