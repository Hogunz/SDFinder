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
                <div x-show="activeTab === 0">
                    @include('filter.mobile')
                </div>
                <div x-show="activeTab === 1">
                    @include('filter.laptop')
                </div>
            </div>

        </form>
    </div>
</x-guest-layout>
