<x-vendor-layout>
    <div class="w-full px-6 -mx-6">
        <div class="bg-indigo-800 p-6 shadow rounded">
            <h1 class="text-xl font-bold tracking-widest uppercase text-white">Laptop</h1>
            <a href="{{ route('vendor.laptops.create') }}">
                <x-button type="button">Add Laptop</x-button>
            </a>

            <div class=" grid grid-cols-6 gap-4">
                @foreach ($laptops as $laptop)

                    <div class="shadow-2xl drop-shadow-2xl flex flex-col justify-between">
                        <div class="text-center">
                            <img src="{{ asset('storage/'.$laptop->img) }}" alt="" class="p-8 object-scale-down h-48 w-96 object-center">
                            <h1 class="font-bold text-lg uppercase break-words">{{ $laptop->name }}</h1>
                        </div>
                        <div class="flex flex-col justify-end text-center">
                            <div>
                                <h3 class="mt-4 text-sm text-gray-800 dark:text-white">{{ $laptop->brand->name }}</h3>
                            </div>
                            <div>
                                <h5>RAM: {{ $laptop->ram }} GB</h5>
                                <h5>Storage: {{ $laptop->storage }} GB</h5>
                                <p>{{ $laptop->pivot->price_string }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-vendor-layout>
