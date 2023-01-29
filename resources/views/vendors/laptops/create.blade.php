<x-guest-layout>
    <div class="w-full px-6">
        <x-auth-validation-errors></x-auth-validation-errors>
        <form action="{{ route('vendor.laptops.store') }}" method="post">
            @csrf
            <div class="bg-gray-200 p-6 shadow rounded" x-data="phones()">
                <h1 class="text-xl font-bold tracking-widest uppercase">Add Laptop to Store</h1>
                <a href="{{ route('vendor.laptops.index') }}">
                    <x-button type="button">Back</x-button>
                </a>

                <div class="mt-2">
                    <x-label for="brand_id" value="Select Brand" />
                    <x-select name="brand_id" id="brand_id" x-model="brand_id" @change="selectBrand"
                        class="w-full block rounded">
                        <option value="" hidden>Select Brand</option>
                        <template x-for="(brand, index) in brands" :key="index">
                            <option :value="brand.id" x-text="brand.name"></option>
                        </template>
                    </x-select>
                </div>

                <div class="mt-2" x-show="brand_id != ''">
                    <x-label for="laptop_id" value="Select Laptop" />
                    <x-select name="laptop_id" id="laptop_id" x-model="laptop_id" class="w-full block rounded">
                        <option value="" hidden>Select Laptop</option>
                        <template x-for="(laptop, index) in laptops" :key="index">
                            <option :value="laptop.id" x-text="laptop.name"></option>
                        </template>
                        <template x-if="laptops.length == 0">
                            <option value="" disabled>No Laptop Available</option>
                        </template>
                    </x-select>
                </div>

                <div class="mt-2" x-show="laptop_id != ''">
                    <x-label for="price" value="Price" />
                    <x-input id="price" type="number" step="0.01" name="price" x-model.number="price"
                        class="w-full block rounded"></x-input>
                </div>

                <div class="mt-2" x-show="price != 0">
                    <x-button>Save</x-button>
                </div>
            </div>
        </form>

    </div>

</x-guest-layout>

<script>
    function phones() {
        return {
            brands: @json($brands),
            laptops: [],
            brand_id: '',
            laptop_id: '',
            price: 0,
            selectBrand() {
                this.laptop_id = ''
                this.price = 0
                this.laptops = this.brands.filter((brand) => brand.id == this.brand_id)[0].laptops
            },
        }
    }
</script>
