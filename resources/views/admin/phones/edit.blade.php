<x-guest-layout>
    <x-auth-validation-errors></x-auth-validation-errors>
    <div class="max-w-7xl p-12 mx-auto border shadow-sm rounded">
        <form action="{{ route('admin.phones.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <h1 class="uppercase text-xl">Create phone</h1>
            <div class="border p-6 mt-2">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <h1 class="text-lg font-bold">Phone Name</h1>
                        <x-input type="text" class="w-full block" name="name" value="{{ old('name') }}"></x-input>
                    </div>

                    <div>
                        <h1 class="text-lg font-bold">Brand</h1>
                        <select name="brand_id" id="" value="{{ old('brand_id') }}" class="w-full block">
                            @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mt-2">
                    <h1 class="text-lg font-bold">Main Image</h1>
                    <x-input type="file" name="img" class="w-full block" accept="image/*" />
                </div>

                <div class="mt-2">
                    <h1 class="text-lg font-bold">Gallery</h1>
                    <x-input type="file" name="galleries[]" class="w-full block" accept="image/*" multiple />

                </div>
            </div>

            <div class="border p-6 mt-2">
                <div>
                    <h1 class="text-lg font-bold">Network</h1>
                    <h2>Technology</h2>
                    <div class="flex space-x-4 mt-2" x-data="{
                        networks: ['2G', '3G', '4G', '5G'],
                    }">

                        <template x-for="(network, index) in networks" :key="index">
                            <div class="flex space-x-2">
                                <x-input type="checkbox" x-bind:value="network" x-bind:id="network" name="networks[]" ></x-input>
                                <x-label x-text="network" x-bind:for="network"></x-label>
                            </div>
                        </template>


                    </div>
                </div>
            </div>

            <div class="border p-6 mt-2">

                <h1 class="text-lg font-bold">Body</h1>
                <div class="grid grid-cols-2 gap-8">
                    <div>
                        <h2 class="mt-2">Dimensions</h2>
                        <div class="flex space-x-2 items-center">
                            <x-input type="number" class="w-24 block text-sm" name="length" value="{{ old('length') }}"></x-input>
                            <span>x</span>
                            <x-input type="number" class="w-24 block text-sm" name="width" value="{{ old('width') }}"></x-input>
                            <span>x</span>
                            <x-input type="number" class="w-24 block text-sm" name="thickness" value="{{ old('thickness') }}"></x-input>
                            <span>mm</span>
                        </div>

                        <div class="mt-2">
                            <h2>Weight</h2>
                            <x-input type="number" name="weight" class="text-sm" value="{{ old('weight') }}"></x-input>
                            <span>g</span>
                        </div>

                        <div class="mt-2">
                            <h2 class="text-lg font-bold">Build</h2>
                            <div>
                                <div class="grid grid-cols-3 gap-4 mt-2 items-center">
                                    <span class="text-sm">Front Material</span>
                                    <x-input type="text" name="front_material" class="w-full block text-sm col-span-2" value="{{ old('front_material') }}"></x-input>
                                </div>
                                <div class="grid grid-cols-3 gap-4 mt-2 items-center">
                                    <span class="text-sm">Back Material</span>
                                    <x-input type="text" name="back_material" class="w-full block text-sm col-span-2" value="{{ old('back_material') }}"></x-input>
                                </div>
                                <div class="grid grid-cols-3 gap-4 mt-2 items-center">
                                    <span class="text-sm">Frame Material</span>
                                    <x-input type="text" name="frame_material" class="w-full block text-sm col-span-2" value="{{ old('frame_material') }}"></x-input>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-lg font-bold">SIM</h2>
                        <div x-data="{
                            multiple: 1,
                            multiples: ['Single', 'Dual', 'Triple', 'Quad'],
                            sims: ['Mini', 'Micro', 'Nano']
                        }">
                            <select name="sim_count" id="" x-model.number="multiple" class="w-full block">
                                <template x-for="(multiple, index) in multiples" :key="index">
                                    <option x-bind:value="index + 1" x-text="multiple"></option>
                                </template>
                            </select>
                            <div class="mt-2">
                                <template x-for="i in multiple">
                                    <div class="grid grid-cols-3 gap-4 mt-2 items-center">
                                        <span class="text-sm" x-text="`SIM` + i + `: `"></span>
                                        <select name="sims[]" id="" class="w-full block col-span-2 text-sm">
                                            <template x-for="(sim, index) in sims" :key="index">
                                                <option x-bind:value="sims[index]" x-text="sim"></option>
                                            </template>
                                        </select>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="border p-6 mt-2">
                <h1 class="text-lg font-bold">Display</h1>
                <div class="grid grid-rows-2 grid-flow-col gap-4">
                    <div>
                        <h2>Type</h2>
                        <select name="display_type" id="" class="w-full block text-sm">
                            @foreach (['IPS', 'OLED'] as $type)
                                <option value="{{ $type }}">{{ $type }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <h2>Size</h2>
                        <x-input type="text" name="size" class="text-sm" value="{{ old('size') }}"></x-input>
                        <span>in</span>
                    </div>

                    <div>

                        <h2>Screen Dimensions <span class="italic text-sm">(width x height)</span></h2>

                        <x-input type="number" name="display_width" class=" w-40 text-sm" value="{{ old('display_width') }}"></x-input>
                        <span>x</span>
                        <x-input type="number" name="display_height" class=" w-40 text-sm" value="{{ old('display_height') }}"></x-input>
                        <span>pixels</span>
                    </div>

                    <div>
                        <h2>Resolution</h2>
                        <select name="resolution" id="" class="w-full block text-sm">
                            <option value="hd">HD</option>
                            <option value="fhd">FHD</option>
                            <option value="2k">2K, Quad HD</option>
                            <option value="4k">4K, Ultra HD</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="border p-6 mt-2">
                <h1 class="text-lg font-bold">Platform</h1>
                <div class="grid grid-cols-2 gap-4" x-data="os">


                    <div>
                        <h2>OS</h2>
                        <select name="" id="" x-model="selectedOs" x-on:change="getVersions()" class="w-full block text-sm">
                            <option value="" hidden>Select OS</option>
                            <template x-for="(os, index) in operatingSystems" :key="index">
                                <option :value="os.id" x-text="os.name"></option>
                            </template>
                        </select>
                    </div>

                    <div>
                        <h2>OS Version</h2>
                        <select name="operating_system_version_id" id="" x-model="selectedVersion" class="w-full block text-sm">
                            <option value="">Select OS</option>
                            <template x-for="(version, index) in versions" :key="index">
                                <option :value="version.id" x-text="version.name"></option>
                            </template>
                        </select>
                    </div>


                    <div>
                        <h2>Chipset</h2>
                        <select name="chipset_id" id="" class="w-full block text-sm">
                            @foreach ($chipsets as $chipset)
                                <option value="{{ $chipset->id }}">{{ $chipset->name }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
            </div>

            <div class="border p-6 mt-2">
                <h1 class="text-lg font-bold">Memory</h1>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <h2>Card Slot</h2>
                        <select name="card_slot" id="" class="text-sm">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>

                    <div x-data="{
                        variants: [
                            {
                                ram: '1',
                                storage: '1',
                            },
                        ]
                    }">
                    <div class="flex space-x-2 items-center">

                        <h2 class="">Variants</h2>

                        <x-button type="button" class="text-xs" @click="variants.push({ ram: '1', storage: '1',})">Add</x-button>
                    </div>

                        <template x-for="(variant, variantIndex) in variants" :key="variantIndex">
                            <div class="grid grid-cols-3 gap-4 items-end">
                                <div>
                                    <h2 class="text-sm">RAM</h2>
                                    <div class="flex items-center space-x-2">
                                        <select id="" x-bind:name="`variants[`+ variantIndex +`][ram]`" class="w-40 text-sm" x-model="variant.ram">
                                            @foreach (['1', '2', '3', '4', '6', '8', '10', '12', '16'] as $ram)
                                                <option value="{{ $ram }}">{{ $ram }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-sm">GB</span>
                                    </div>

                                </div>
                                <div>
                                    <h2 class="text-sm">Storage</h2>
                                    <div class="flex items-center space-x-2">
                                        <select id="" x-bind:name="`variants[`+ variantIndex +`][storage]`" class="w-40 text-sm" x-model="variant.storage">
                                            @foreach (['1', '2', '4', '8', '16', '32', '64', '128', '256', '512', '1024'] as $storage)
                                                <option value="{{ $storage }}">{{ $storage }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-sm">GB</span>
                                    </div>


                                </div>

                                <div>
                                    <x-button type="button" class="ml-3 bg-red-500 hover:bg-red-700" x-show="variants.length > 1"
                                        @click="variants.splice(variantIndex, 1)"
                                        >Delete</x-button>
                                </div>
                            </div>

                        </template>


                    </div>

                </div>
            </div>

            <div class="border p-6 mt-2">
                <h1 class="text-lg font-bold">Main Camera</h1>
                <div>
                    <div x-data="{
                        cameras: 1
                    }" class="grid grid-cols-2 gap-4">
                        <div>
                            <div class="flex space-x-2 items-center">
                                <h2>Cameras: </h2>
                                <select name="camera_count" id="" x-model.number="cameras" class="text-sm" >
                                    <template x-for="i in 5">
                                        <option :value="i" x-text="i"></option>
                                    </template>
                                </select>
                            </div>

                            <div>
                                <template x-for="i in cameras">
                                    <div class="mt-2">
                                        <div class="flex space-x-4 items-center">
                                            <h2>Resolution (in MP): </h2>
                                            <x-input type="text" name="camera_resolutions[]" class="text-sm col-span-2"></x-input>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>

                        <div>
                            <div>
                                <h2>Videos</h2>
                                <x-input type="text" class="w-full block" name="video_quality" placeholder="4K@30fps,1080p@30/60/90/120fps"></x-input>
                                <div class="text-xs">Use comma to separate</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="border p-6 mt-2">
                <h1 class="text-lg font-bold">Selfie Camera</h1>
                <div x-data="{
                    cameras: 1
                }">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <div class="flex space-x-2 items-center">
                                <h2>Cameras: </h2>
                                <select name="selfie_camera_count" id="" x-model.number="cameras" class="text-sm">
                                    <template x-for="i in 2">
                                        <option :value="i" x-text="i"></option>
                                    </template>
                                </select>
                            </div>

                            <div class="flex space-x-2 mt-2">
                                <x-input type="checkbox" value="1" id="pop-up" name="selfie_pop_up"></x-input>
                                <x-label value="Pop-up Camera" for="pop-up"></x-label>
                            </div>
                        </div>

                        <div>
                            <template x-for="i in cameras">
                                <div class="flex space-x-4 items-center mt-2">

                                    <h2>Resolution (in MP): </h2>
                                    <x-input type="text" name="selfie_camera_resolutions[]" class="text-sm"></x-input>

                                </div>
                            </template>
                        </div>

                    </div>
                </div>

            </div>

            <div class="border p-6 mt-2">
                <h1 class="text-lg font-bold">Sound</h1>
                <div class="grid grid-cols-2">
                    <div>
                        <h2>Loud Speaker</h2>
                        <select name="loud_speaker" id="" class="text-sm">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>

                    <div>
                        <h2>3.5mm jack</h2>
                        <select name="jack" id="" class="text-sm">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="border p-6 mt-2">
                <h1 class="text-lg font-bold">Battery</h1>
                <div class="grid grid-cols-4 gap-4">
                    <div>
                        <h2>Capacity (in mAh): </h2>
                        <x-input type="number" min="0" name="battery_capacity" class="text-sm" value="{{ old('battery_capacity') }}"></x-input>
                    </div>
                    <div>
                        <h2>Wired Charging Power (in W): </h2>
                        <x-input type="number" min="0" name="wired_charging_power" class="text-sm" value="{{ old('wired_charging_power') }}"></x-input>
                    </div>
                    <div>
                        <h2>Wireless Charging Power (in W): </h2>
                        <x-input type="number" min="0" name="wireless_charging_power" class="text-sm" value="{{ old('wireless_charging_power') }}"></x-input>
                    </div>
                    <div>
                        <h2>Removable</h2>
                        <select name="removable_battery" id="" class="w-full block text-sm">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="border p-6 mt-2" x-data="{ description: ''}">
                <textarea hidden name="description" x-model="description"></textarea>
                <h1 class="text-lg font-bold">Additional Description</h1>
                <div contenteditable class="border p-2 " @input="description = $event.target.innerHTML"></div>
            </div>

            <div class="mt-2 float-right">

                <x-button>Create</x-button>
            </div>
        </form>
    </div>


</x-guest-layout>

<script>
    function os()
    {
        return {
            operatingSystems: @json($operatingSystems),
            selectedOs: '',
            selectedVersion: '',
            versions: [],
            getVersions() {
                this.selectedVersion = '',
                this.versions = this.operatingSystems.filter((e) => e.id == this.selectedOs)[0]['versions']
            }
        }
    }
</script>
