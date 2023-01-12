<x-guest-layout>
    <div class="mx-auto max-w-7xl rounded" x-data>
        <form action="{{ route('mobile.viewPhones') }}" method="get" id="filter">
            <h1 class="mb-4 text-3xl font-extrabold underline underline-offset-8 decoration-yellow-600 tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white text-center">Device Filter</h1>

            <div x-data="{ activeTab: 0, tabs: ['Phone', 'Laptop'] }">
                <div class="flex justify-end">
                    <div class="grid grid-cols-2 divide-x">
                        <template x-for="(tab, index) in tabs" :key="index">
                            <button type="button" @click="activeTab = index" class="uppercase bg-slate-300 py-3 px-2" x-bind:class="activeTab === index || 'bg-slate-600 text-white hover:bg-slate-700'" x-text="tab"></button>
                        </template>
                    </div>
                </div>
                <template x-if="activeTab === 0">
                    @include('filter.mobile')
                </template>
                <template x-if="activeTab === 1">
                    @include('filter.laptop')
                </template>
            </div>

        </form>
    </div>
</x-guest-layout>


<script>
    function range() {
        return {
            minPrice: '',
            maxPrice: '',

            minTrigger() {
                if (this.maxPrice !== '') {

                    this.minPrice = Math.min(this.minPrice, this.maxPrice - 100)
                    this.minPrice = this.minPrice < 0 ? 0 : this.minPrice
                }
            },
            maxTrigger() {
                if (this.minPrice !== '')
                    this.maxPrice = Math.max(this.maxPrice, this.minPrice + 100)
            },
            clearPrice() {
                this.minPrice = ''
                this.maxPrice = ''
            }
        }
    }

    function os() {
        return {
            operatingSystems: @json($operatingSystems),
            selectedOs: [],
            selectedVersion: [],
            versions: [],
            getVersions() {

                this.selectedVersion = []
                // let array = Alpine.raw(this.selectedOs)
                var h = this.operatingSystems.filter((e) => this.selectedOs.includes(e.id))

                this.versions = []

                h.forEach((e) => {
                    e['versions'].forEach((value) => {
                        this.versions.push(value)
                    })

                })

            }
        }
    }
</script>
