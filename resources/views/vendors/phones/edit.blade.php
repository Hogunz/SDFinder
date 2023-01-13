<x-guest-layout>
    <div class="w-full px-6">
        <x-auth-validation-errors></x-auth-validation-errors>
        <form action="{{ route('vendor.phones.update', $phone) }}" method="post">
            @csrf
            @method('put')
            <div class="bg-gray-200 p-6 shadow rounded" >
                <h1 class="text-xl font-bold tracking-widest uppercase">Edit Phone to Store</h1>
                <a href="{{ route('vendor.phones.index') }}">
                    <x-button type="button">Back</x-button>
                </a>

            <div>
                {{ $phone->name }}
            </div>
            <div>

                RAM: {{ $variant['ram'] }} GB
                STORAGE: {{ $variant['storage'] }} GB
            </div>
            <input type="hidden" value="{{ $variant['ram'] }}" name="variant[ram]">
            <input type="hidden" value="{{ $variant['storage'] }}" name="variant[storage]">
                <div class="mt-2">
                    <x-label for="price" value="Price" />
                    <x-input id="price" type="number" name="price" class="w-full block rounded"></x-input>
                </div>

                <div class="mt-2" x-show="price != 0">
                    <x-button>Save</x-button>
                </div>
            </div>
        </form>

    </div>

</x-guest-layout>
