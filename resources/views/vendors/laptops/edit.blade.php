<x-guest-layout>
    <div class="w-full px-6">
        <x-auth-validation-errors></x-auth-validation-errors>
        <form action="{{ route('vendor.laptops.update', $laptop) }}" method="post">
            @csrf
            @method('put')
            <div class="bg-gray-200 p-6 shadow rounded">
                <h1 class="text-xl font-bold tracking-widest uppercase">Add Laptop to Store</h1>
                <a href="{{ route('vendor.laptops.index') }}">
                    <x-button type="button">Back</x-button>
                </a>

                <div class="mt-2" x-show="laptop_id != ''">
                    {{ $laptop->name }}
                </div>

                <div class="mt-2" x-show="laptop_id != ''">
                    <x-label for="price" value="Price" />
                    <x-input id="price" type="number" name="price" x-model.number="price" class="w-full block rounded"></x-input>
                </div>

                <div class="mt-2" x-show="price != 0">
                    <x-button>Save</x-button>
                </div>
            </div>
        </form>

    </div>

</x-guest-layout>
