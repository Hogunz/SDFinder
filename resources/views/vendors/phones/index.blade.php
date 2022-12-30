<x-vendor-layout>
    <div class="w-full px-6 -mx-6">
        <div class="bg-indigo-800 p-6 shadow rounded">
            <h1 class="text-xl font-bold tracking-widest uppercase text-white">Phones</h1>
            <a href="{{ route('vendor.phones.create') }}">
                <x-button type="button">Add Phone</x-button>
            </a>

            <div class=" grid grid-cols-6 gap-4">
                @foreach ($phones as $phone)
                
                    <div class="shadow-2xl drop-shadow-2xl flex flex-col justify-between">
                        <div class="text-center">
                            <img src="{{ asset('storage/'.$phone->img) }}" alt="" class="w-full h-80 object-contain object-center">
                            <h1 class="font-bold text-lg uppercase break-words">{{ $phone->name }}</h1>
                        </div>
                        <div class="flex flex-col justify-end text-center">
                            <div>
                                <h3 class="mt-4 text-sm text-gray-800 dark:text-white">{{ $phone->brand->name }}</h3>
                            </div>
                            <div>
                                <h5>RAM: {{ $phone->pivot->variant['ram'] }} GB</h5>
                                <h5>STORAGE: {{ $phone->pivot->variant['storage'] }} GB</h5>
                                <p>{{ $phone->pivot->price_string }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-vendor-layout>
