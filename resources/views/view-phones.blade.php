<x-guest-layout>
    <div class="mx-auto py-12 px-6 bg-slate-100 max-w-7xl rounded">
        <div class="mb-2">
            <a href="{{ route('mobile.finder') }}">
                <x-button>Search Again</x-button>
            </a>
        </div>
        <div class="grid grid-cols-4 gap-4">

            @foreach ($phones as $phone)

                <div class="bg-white rounded p-6 shadow-lg flex flex-col justify-between">
                    <a href="{{ route('mobile.viewPhone', $phone) }}">
                        <div>
                            <img src="{{ asset('storage/'.$phone->img) }}" alt="" class="w-full h-52 object-fit">
                            <h1 class="font-bold text-lg uppercase break-words">{{ $phone->name }}</h1>
                        </div>
                        <div class="flex flex-col justify-end">
                            <div>
                                <h3 class="uppercase text-sm italic">{{ $phone->brand->name }}</h3>
                            </div>
                        </div>
                    </a>

                </div>
            @endforeach
        </div>
    </div>
</x-guest-layout>
