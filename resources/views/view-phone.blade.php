<x-guest-layout>
    <div class="mx-auto py-12 px-6 bg-slate-100 max-w-7xl rounded">
        <div class="mb-2">
            <a href="{{ URL::previous() }}">
                <x-button>Back</x-button>
            </a>
        </div>
        <div class="flex space-x-2">
            <div>
                <img src="{{ asset('storage/'.$phone->img) }}" alt="" class="w-full h-52 object-fit">
            </div>
            <div>
                <div class="font-bold">
                    {{ $phone->name }}
                </div>
                <div class="italic">
                    {{ $phone->brand->name }}
                </div>
                <div>
                    {{ $phone->chipset->name }}
                </div>
                <div>
                    {{ $phone->chipset->no_of_cores }} Cores ({{ $phone->chipset->cpu }})
                </div>
                <div>
                    {{ $phone->chipset->gpu }}
                </div>
                <div>
                    Variants:
                    @foreach ($phone->variants as $variant)
                        <span>{{ $variant['ram'] }} GB {{ $variant['storage'] }} GB{{ $loop->last ? '' : ',' }}</span>
                    @endforeach
                </div>

            </div>
        </div>

        <hr class="my-6">

        <div>
            <div class="text-lg font-bold">Shops</div>
            <table class="w-full">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Variant</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($phone->users as $shop)
                    <tr>
                        <td class="text-center px-6 py-3">
                            {{ $shop->name }}
                        </td>
                        <td class="text-center px-6 py-3">
                            {{ $shop->pivot->variant['ram'] }} GB
                            {{ $shop->pivot->variant['storage'] }} GB
                        </td>
                        <td class="text-center px-6 py-3">
                            {{ $shop->pivot->price_string }}
                        </td>
                        <td class="text-center px-6 py-3">
                            <a href="{{ route('store.profile', $shop) }}" class="hover:underline text-indigo-500 hover:text-indigo-400">
                                View Shop
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>
</x-guest-layout>
