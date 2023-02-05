<x-guest-layout>

    {{-- MAIN PAGE Mobile Finder --}}
    <div class="mx-auto py-12 max-w-7xl rounded dark:bg-gray-500 container" x-data="data">
        @if (!request()->get('phone') && !request()->get('laptop'))
            <div class="flex justify-end">
                <div class="grid grid-cols-4 divide-x">
                    <button type="button" @click="filter(1)"
                        class="uppercase bg-blue-500 hover:bg-blue-700 text-white py-3 px-2">Phones</button>
                    <button type="button" @click="filter(2)"
                        class="uppercase bg-blue-500 hover:bg-blue-700 text-white py-3 px-2">Laptops</button>
                    <button type="button" @click="filter(0)"
                        class="uppercase bg-blue-500 hover:bg-blue-700 text-white py-3 px-2">All</button>
                    <button type="button" @click="filter(3)"
                        class="uppercase bg-blue-500 hover:bg-blue-700 text-white py-3 px-2">Shops</button>
                </div>

            </div>
        @endif

        <div class="flex flex-row gap-4 mt-2 ">
            <div class="shrink-0 ">
                <div class="shadow-lg ">
                    <div class="grid grid-cols-3  w-full h-full justify-items-stretch  shadow-lg rounded  ">
                        @foreach ($brands as $brand)
                            <a href="{{ route('mobile.viewPhones', ['brands' => [$brand->id]]) }}"
                                class=" block w-full text-center text-sm uppercase hover:bg-blue-700 hover:text-white px-5 py-3">
                                <span class="tracking-tighter leading-tight">
                                    {{ $brand->name }}
                                </span>
                            </a>
                        @endforeach
                    </div>
                </div>
                <a href="{{ route('mobile.finder') }}"
                    class="border border-transparent block w-full text-center bg-blue-500 hover:bg-blue-700 text-white py-3 tracking-tight mb-2">
                    DEVICE FILTER
                </a>
                <a href="{{ route('mobile.viewPhones') }}"
                    class="border border-transparent block w-full text-center bg-red-500 hover:bg-red-700 text-white py-3 tracking-tight">RESET
                    FILTER</a>
            </div>
            <div class="w-full relative">
                <div class="inset-x-0 text-center font-bold" x-show="mobiles.length == 0">
                    NO RESULT FOUND
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-2" x-show="activeTab != 3">
                    <template x-for="(mobile, index) in mobiles" :key="index">
                        <a x-bind:href="mobile.url" class="rounded p-6 shadow-lg relative group">
                            <div>
                                <img x-bind:src="`{{ asset('storage/') }}/` + mobile.img" alt=""
                                    class="w-full h-40 object-center object-contain">
                            </div>
                            <div class="font-bold uppercase break-words text-center text-sm" x-text="mobile.name"></div>
                        </a>
                    </template>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-2" x-show="activeTab == 3">
                    <template x-for="(shop, index) in shops" :key="index">
                        <a x-bind:href="`/profile/` + shop.id" class="rounded p-6 shadow-lg relative group">
                            <div>
                                <img x-bind:src="`{{ asset('storage/') }}/` + shop.vendor_information.avatar"
                                    alt="" class="w-full h-40 object-center object-contain">
                            </div>
                            <div class="font-bold uppercase break-words text-center text-sm" x-text="shop.name"></div>
                        </a>
                    </template>
                </div>

            </div>
        </div>
    </div>

</x-guest-layout>

<script>
    function data() {
        return {
            activeTab: 0,
            allMobiles: @json($mobiles),
            mobiles: [],
            shops: @json($shops),
            async init() {
                this.$nextTick();
                this.mobiles = this.allMobiles
            },
            filter(a) {
                this.activeTab = a
                switch (a) {
                    case 1:
                        this.mobiles = this.allMobiles.filter((p) => p.type == 'phone')
                        break
                    case 2:
                        this.mobiles = this.allMobiles.filter((p) => p.type == 'laptop')
                        break
                    default:
                        this.mobiles = this.allMobiles
                }

            }
        };
    }
</script>
