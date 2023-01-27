<x-guest-layout>
    <div class="w-full px-6">
        <x-auth-validation-errors></x-auth-validation-errors>
        <form action="{{ route('vendor.phones.store') }}" method="post">
            @csrf
            <div class="bg-gray-200 p-6 shadow rounded" x-data="phones()">
                <h1 class="text-xl font-bold tracking-widest uppercase">Add Phone to Store</h1>
                <a href="{{ route('vendor.phones.index') }}">
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
                    <x-label for="phone_id" value="Select Phone" />
                    <x-select name="phone_id" id="phone_id" x-model="phone_id" @change="selectPhone"
                        class="w-full block rounded">
                        <option value="" hidden>Select Phone</option>
                        <template x-for="(phone, index) in phones" :key="index">
                            <option :value="phone.id" x-text="phone.name"></option>
                        </template>
                        <template x-if="phones.length == 0">
                            <option value="" disabled>No Phone Available</option>
                        </template>
                    </x-select>
                </div>

                <div class="mt-2" x-show="phone_id != ''">
                    <x-label for="variant" value="Select Variant" />
                    <x-select name="variant" id="variant" x-model="variant" class="w-full block rounded">
                        <option value="" hidden>Select Varant</option>
                        <template x-for="(variant, index) in variants" :key="index">
                            <option :value="JSON.stringify(variant)" x-text="variant.ram+` GB,`+variant.storage+` GB`">
                            </option>
                        </template>
                    </x-select>
                </div>

                <div class="mt-2" x-show="variant != ''">
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
            phones: [],
            variants: [],
            brand_id: '',
            phone_id: '',
            variant: '',
            price: 0,
            selectBrand() {
                this.phone_id = ''
                this.variant = ''
                this.price = 0
                this.phones = this.brands.filter((brand) => brand.id == this.brand_id)[0].phones
            },
            selectPhone() {
                this.variant = ''
                this.price = 0
                this.variants = this.phones.filter((phone) => phone.id == this.phone_id)[0].variants
            }
        }
    }
</script>
