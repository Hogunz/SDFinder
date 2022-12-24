<x-vendor-layout>
    <div class="w-full px-6 -mx-6">
        <div class="bg-indigo-800 p-6 shadow rounded">
            <h1 class="text-xl font-bold tracking-widest uppercase text-white">Phones</h1>
            <a href="{{ route('vendor.phones.create') }}">
                <x-button type="button">Add Phone</x-button>
            </a>

            <div class="mt-5 grid grid-cols-6 gap-4">
                @foreach ($phones as $phone)
                    <div class="rounded p-6 shadow-lg flex flex-col justify-between">
                        <div>
                            <img src="{{ asset('storage/'.$phone->img) }}" alt="" class="w-full h-80 object-fit">
                            <h1 class="font-bold text-lg uppercase break-words">{{ $phone->name }}</h1>
                        </div>
                        <div class="flex flex-col justify-end">
                            <div>
                                <h3 class="uppercase text-sm italic">{{ $phone->brand->name }}</h3>
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
