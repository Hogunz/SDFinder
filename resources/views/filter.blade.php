<x-guest-layout>

    <div class="mx-auto py-12 px-6 bg-slate-100 max-w-7xl rounded" x-data>

        <form action="{{ route('mobile.viewPhones') }}" method="get" id="filter">
            <h1 class="uppercase font-bold text-xl tracking-wide">Device Filter</h1>

            <div>
                <h2 class="text-lg font-semibold">General</h2>
                <div class="w-full mt-2">
                    <h4>Brands:</h4>
                    <div class="max-h-24 overflow-y-auto rounded grid grid-cols-5 gap-4 border p-4">
                        @foreach ($brands as $brand)
                            <div class="flex space-x-2 items-center">
                                <x-input type="checkbox" name="brands[]" value="{{ $brand->id }}" id="{{ 'brand'.$brand->id }}" />
                                <x-label for="{{ 'brand'.$brand->id }}" :value="$brand->name" />
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="w-full mt-2" x-data="range()">
                    <h4>Price Range:</h4>
                    <div class="text-sm flex space-x-2 items-center mb-2">
                        <x-input type="number" x-model.number="minPrice" name="price[min]" min="0" class="text-sm" @blur="minTrigger()" />
                        <span> - </span>
                        <x-input type="number" x-model.number="maxPrice" name="price[max]" min="0" class="text-sm" @blur="maxTrigger()" />
                        <x-button type="button" @click="clearPrice()">Clear</x-button>
                    </div>
                </div>
            </div>

            <hr class="my-6">

            <div>
                <h2 class="text-lg font-semibold">Networks</h2>
                <div class="flex space-x-4 items-center">
                    @foreach ($networks as $i => $network)
                        <div class="flex space-x-2">
                            <x-input type="checkbox" :id="'network'.$i" :value="$network" name="networks[]" />
                            <x-label :for="'network'.$i" :value="$network" />
                        </div>
                    @endforeach
                </div>
            </div>

            <hr class="my-6">

            <div>
                <h2 class="text-lg font-semibold">Sim</h2>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <h4>Sizes: </h4>
                        <div class="border flex flex-col max-h-24 h-full px-4 py-2">

                            @foreach ($sims as $i => $sim)
                                <div class="flex space-x-2">
                                    <x-input type="checkbox" name="sims[]" value="{{ $sim }}" id="{{ 'sim'.$i }}" />
                                    <x-label value="{{ $sim }}" for="{{ 'sim'.$i }}" />
                                </div>
                            @endforeach
                        </div>

                    </div>

                    <div>
                        <h4>Multiples: </h4>
                        <div class="border flex flex-col max-h-24 h-full px-4 py-2">
                            @foreach ($multiples as $i => $multiple)
                                <div class="flex space-x-2">
                                    <x-input type="checkbox" name="multiples[]" value="{{ $i }}" id="{{ 'multiple'.$i }}" />
                                    <x-label value="{{ $multiple }}" for="{{ 'multiple'.$i }}" />
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-6">

            <div>
                <h2 class="text-lg font-semibold">Platforms</h2>

                <div x-data="os">
                    <div class="grid grid-cols-4 gap-4">
                        <div>
                            <h4>OS: </h4>
                            <div class="border flex flex-col h-full px-4 py-2 max-h-24 overflow-y-auto">

                                <template x-for="(os, index) in operatingSystems" :key="`os`+index">
                                    <div class="flex space-x-2">
                                        <x-input type="checkbox" x-model.number="selectedOs" x-bind:value="os.id" x-bind:id="`os` + os.id" x-on:change="getVersions()" class="os" name="os[]" />
                                        <x-label x-bind:for="`os` + os.id" x-text="os.name" />
                                    </div>
                                </template>
                            </div>
                        </div>

                        <div>
                            <h4>OS Versions: </h4>
                            <div class="border flex flex-col h-full px-4 py-2 max-h-24 overflow-y-auto">
                                <template x-if="selectedOs.length < 1">
                                    <div class="text-sm">Select OS first</div>
                                </template>
                                <template x-for="(version, index) in versions" :key="`version`+index">
                                    <div class="flex space-x-2">
                                        <x-input type="checkbox" name="versions[]" x-model="selectedVersion" x-bind:value="version.id" x-bind:id="`version` + version.id" />
                                        <x-label x-bind:for="`version` + version.id" x-text="version.name" />
                                    </div>
                                </template>
                            </div>
                        </div>

                        <div>
                            <h4>Chipsets</h4>
                            <div class="border flex flex-col h-full px-4 py-2 max-h-24 overflow-y-auto">
                                @foreach ($chipsets as $chipset)
                                    <div class="flex space-x-2">
                                        <x-input type="checkbox" value="{{ $chipset->id }}" id="{{ 'chipset'.$chipset->id }}" name="chipsets[]"></x-input>
                                        <x-label for="{{ 'chipset'.$chipset->id }}" :value="$chipset->name" ></x-label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div>
                            <h4>CPU Cores: </h4>
                            <div class="border flex flex-col h-full px-4 py-2 max-h-24 overflow-y-auto">
                                @foreach ($cores as $core)
                                    <div class="flex space-x-2">
                                        <x-input type="checkbox" value="{{ $core }}" id="{{ 'core'.$core }}" name="cores[]"></x-input>
                                        <x-label for="{{ 'core'.$core }}" :value="$core" ></x-label>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-6">

            <div>
                <h2 class="text-lg font-semibold">Memory</h2>
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <h4>RAM</h4>
                        <div class="border flex flex-col h-full px-4 py-2 max-h-24 overflow-y-auto">
                            @foreach ($rams as $i => $ram)
                                <div class="flex space-x-2">
                                    <x-input type="checkbox" value="{{ $ram }}" id="{{ 'ram'.$i }}" name="rams[]"></x-input>
                                    <x-label for="{{ 'ram'.$i }}" :value="$ram.' GB'" ></x-label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <h4>Card Slot</h4>
                        <div class="border flex flex-col h-full px-4 py-2 max-h-24 overflow-y-auto">
                            <x-select class="text-sm" name="card_slot">
                                <option value="" selected></option>
                                <option value=0>No</option>
                                <option value=1>Yes</option>
                            </x-select>
                        </div>
                    </div>

                    <div>
                        <h4>Storage</h4>
                        <div class="border flex flex-col h-full px-4 py-2 max-h-24 overflow-y-auto">
                            @foreach ($storages as $i => $storage)
                                <div class="flex space-x-2">
                                    <x-input type="checkbox" value="{{ $storage }}" id="{{ 'storage'.$i }}" name="storages[]"></x-input>
                                    <x-label for="{{ 'storage'.$i }}" :value="$storage.' GB'" ></x-label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

            <hr class="my-6">

            <div>
                <h2 class="text-lg font-semibold">Display</h2>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <h4>Technology</h4>
                        <div class="border flex flex-col h-full px-4 py-2 max-h-24 overflow-y-auto">
                            @foreach ($types as $i => $type)
                                <div class="flex space-x-2">
                                    <x-input type="checkbox" value="{{ $type }}" id="{{ 'type'.$i }}" name="types[]"></x-input>
                                    <x-label for="{{ 'type'.$i }}" :value="$type" ></x-label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <h4>Resolution</h4>
                        <div class="border flex flex-col h-full px-4 py-2 max-h-24 overflow-y-auto">
                            @foreach ($resolutions as $i => $resolution)
                                <div class="flex space-x-2">
                                    <x-input type="checkbox" value="{{ $i }}" id="{{ 'resolution'.$i }}" name="resolutions[]"></x-input>
                                    <x-label for="{{ 'resolution'.$i }}" :value="$resolution" ></x-label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

            <hr class="my-6">

            <div>
                <h2 class="text-lg font-semibold">Main Camera</h2>

                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <h4>Resolution</h4>
                        <div class="border flex flex-col h-full px-4 py-2 max-h-24 overflow-y-auto">
                            @foreach ($cameraResolutions as $i => $cameraResolution)
                                <div class="flex space-x-2">
                                    <x-input type="checkbox" value="{{ $cameraResolution }}" id="{{ 'cameraResolution'.$i }}" name="cameraResolutions[]"></x-input>
                                    <x-label for="{{ 'cameraResolution'.$i }}" :value="$cameraResolution.'MP'" ></x-label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <h4>Video</h4>
                        <div class="border flex flex-col h-full px-4 py-2 max-h-24 overflow-y-auto">
                            @foreach ($videos as $i => $video)
                                <div class="flex space-x-2">
                                    <x-input type="checkbox" value="{{ $video }}" id="{{ 'video'.$i }}" name="videos[]"></x-input>
                                    <x-label for="{{ 'video'.$i }}" :value="$video" ></x-label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <h4>Camera</h4>
                        <div class="border flex flex-col h-full px-4 py-2 max-h-24 overflow-y-auto">
                            <template x-for="i in 5" :key="i">
                                <div class="flex space-x-2">
                                    <x-input type="checkbox" x-bind:value="i" x-bind:id="`camera`+i" name="cameraCounts[]"></x-input>
                                    <x-label x-bind:for="`camera`+i" x-text="i"></x-label>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-6">

            <div>
                <h2 class="text-lg font-semibold">Selfie Camera</h2>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <h4>Resolution</h4>
                        <div class="border flex flex-col h-full px-4 py-2 max-h-24 overflow-y-auto">
                            @foreach ($selfieResolutions as $selfieResolution)
                                <div class="flex space-x-2">
                                    <x-input type="checkbox" value="{{ $selfieResolution }}" id="{{ 'selfieResolution'.$i }}" name="selfieResolutions[]"></x-input>
                                    <x-label for="{{ 'selfieResolution'.$i }}" :value="$selfieResolution.'MP'" ></x-label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <h4>Dual Camera</h4>
                        <div class="border flex flex-col h-full px-4 py-2 max-h-24 overflow-y-auto">
                            <x-select class="text-sm" name="dualCamera">
                                <option value="" selected></option>
                                <option value="1">No</option>
                                <option value="2">Yes</option>
                            </x-select>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-6">

            <div class="float-right block">
                <x-button type="button" @click="document.querySelector('#filter').submit()">Filter</x-button>
            </div>
        </form>

    </div>

</x-guest-layout>

<script>
    function range()  {
        return {
            minPrice: '',
            maxPrice: '',

            minTrigger() {
                if(this.maxPrice !== '') {

                    this.minPrice = Math.min(this.minPrice, this.maxPrice - 100)
                    this.minPrice = this.minPrice < 0 ? 0 : this.minPrice
                }
            },
            maxTrigger() {
                if(this.minPrice !== '')
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
