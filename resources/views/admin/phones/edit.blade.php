<x-guest-layout>
    <div class="max-w-7xl p-12 mx-auto border shadow-sm rounded">
        <x-auth-validation-errors></x-auth-validation-errors>
        <form action="{{ route('admin.phones.update', $phone) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <h1 class="uppercase text-xl">Create phone</h1>
            <div class="border p-6 mt-2">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <h1 class="text-lg font-bold">Phone Name</h1>
                        <x-input type="text" class="w-full block" name="name" value="{{ $phone->name }}"></x-input>
                    </div>

                    <div>
                        <h1 class="text-lg font-bold">Brand</h1>
                        <select name="brand_id" id="" class="w-full block">
                            @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}" {{ $phone->brand_id == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
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
                    <div class="flex space-x-4 mt-2" x-data='{
                        networks: @json($networks),
                        selectedNetworks: @json($phone->networks),
                    }'>

                        <template x-for="(network, index) in networks" :key="index">
                            <div class="flex space-x-2">
                                <x-input type="checkbox" x-bind:value="network" x-bind:id="network" name="networks[]" x-bind:checked="selectedNetworks.includes(network)" />
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
                            <x-input type="number" step="0.1" min="0" class="w-24 block text-sm" name="length" value="{{ $phone->length }}" />
                            <span>x</span>
                            <x-input type="number" step="0.1" min="0" class="w-24 block text-sm" name="width" value="{{ $phone->width }}" />
                            <span>x</span>
                            <x-input type="number" step="0.1" min="0" class="w-24 block text-sm" name="thickness" value="{{ $phone->thickness }}" />
                            <span>mm</span>
                        </div>

                        <div class="mt-2">
                            <h2>Weight</h2>
                            <x-input type="number" step="0.1" min="0" name="weight" class="text-sm" value="{{ $phone->weight }}"></x-input>
                            <span>g</span>
                        </div>

                        <div class="mt-2">
                            <h2 class="text-lg font-bold">Build</h2>
                            <div>
                                <div class="grid grid-cols-3 gap-4 mt-2 items-center">
                                    <span class="text-sm">Front Material</span>
                                    <x-input type="text" name="front_material" class="w-full block text-sm col-span-2" value="{{ $phone->front_material }}"></x-input>
                                </div>
                                <div class="grid grid-cols-3 gap-4 mt-2 items-center">
                                    <span class="text-sm">Back Material</span>
                                    <x-input type="text" name="back_material" class="w-full block text-sm col-span-2" value="{{ $phone->back_material }}"></x-input>
                                </div>
                                <div class="grid grid-cols-3 gap-4 mt-2 items-center">
                                    <span class="text-sm">Frame Material</span>
                                    <x-input type="text" name="frame_material" class="w-full block text-sm col-span-2" value="{{ $phone->frame_material }}"></x-input>
                                </div>
                            </div>
                        </div>

                        <div class="mt-2">
                            <h2 class="text-lg font-bold">Body Additional Description</h2>
                            <div>
                                <x-input type="text" name="body_description" class="w-full block text-sm col-span-2" value="{{ $phone->body_description }}"></x-input>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-lg font-bold">SIM</h2>
                        <div x-data='{
                            selectedSims: [],
                            multiples: @json($multiples),
                            sims: @json($sims),
                            multiple: 1,
                            async init() {
                                await this.$nextTick()
                                this.multiple = {{ $phone->sim_count }}

                                await this.$nextTick()
                                this.selectedSims = @json($phone->sims)
                            }
                        }'>
                            <select name="sim_count" id="" x-model.number="multiple" class="w-full block">
                                <template x-for="(multiple, index) in multiples" :key="index">
                                    <option x-bind:value="index + 1" x-text="multiple"></option>
                                </template>
                            </select>
                            <div class="mt-2">
                                <template x-for="(i, mIndex) in multiple" :key="mIndex">
                                    <div class="grid grid-cols-3 gap-4 mt-2 items-center">
                                        <span class="text-sm" x-text="`SIM` + i + `: `"></span>
                                        <select name="sims[]" id="" class="w-full block col-span-2 text-sm" x-model="selectedSims[mIndex]">
                                            <template x-for="(sim, index) in sims" :key="index">
                                                <option x-bind:value="sim" x-text="sim"></option>
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
                            @foreach ($types as $type)
                                <option value="{{ $type }}" {{ $phone->display_type == $type ? 'selected' : '' }}>{{ $type }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <h2>Size</h2>
                        <x-input type="text" name="size" class="text-sm" value="{{ $phone->size }}"></x-input>
                        <span>in</span>
                    </div>

                    <div>

                        <h2>Screen Dimensions <span class="italic text-sm">(width x height)</span></h2>

                        <x-input type="number" name="display_width" class=" w-40 text-sm" value="{{ $phone->display_width }}"></x-input>
                        <span>x</span>
                        <x-input type="number" name="display_height" class=" w-40 text-sm" value="{{ $phone->display_height }}"></x-input>
                        <span>pixels</span>
                    </div>

                    <div>
                        <h2>Resolution</h2>
                        <select name="resolution" id="" class="w-full block text-sm">
                            @foreach ($resolutions as $i => $resolution)
                                <option value="{{ $i }}" {{ $i == $phone->resolution ? 'selected' : '' }}>{{ $resolution }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mt-2">
                    <h2 class="text-lg font-bold">Display Additional Description</h2>
                    <div>
                        <x-input type="text" name="display_description" class="w-full block text-sm col-span-2" value="{{ $phone->display_description }}" placeholder="AMOLED, Corning Gorilla Glass 5, 3.26 inches, 382 x 720 pixels, 250 PPI, 800 nits (HBM), 900 nits (peak)"></x-input>
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

                    <div x-data='{
                        variants: @json($phone->variants),
                        addVariant() {
                            this.variants.push({ ram:"1", storage:"1",})
                        },
                        deleteVariant(index){
                            this.variants.splice(index, 1)
                        }
                    }' >
                    <div class="flex space-x-2 items-center">

                        <h2 class="">Variants</h2>

                        <div>
                            <button type="button" class="text-xs bg-green-500 hover:bg-green-700 h-7 w-7 rounded text-white" @click="addVariant">+</button>
                        </div>
                    </div>

                        <template x-for="(variant, variantIndex) in variants" :key="variantIndex">
                            <div class="grid grid-cols-3 gap-4 items-center">
                                <div>
                                    <h2 class="text-sm">RAM</h2>
                                    <div class="flex items-center space-x-2">
                                        <select id="" x-bind:name="`variants[`+ variantIndex +`][ram]`" class="w-40 text-sm" x-model="variant.ram">
                                            @foreach ($rams as $ram)
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
                                            @foreach ($storages as $storage)
                                                <option value="{{ $storage }}">{{ $storage }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-sm">GB</span>
                                    </div>


                                </div>

                                <div x-show="variants.length > 1">
                                    <button type="button" class="text-xs bg-red-500 hover:bg-red-700 h-7 w-7 text-center rounded text-white" @click="deleteVariant(variantIndex)">-</button>
                                </div>
                            </div>

                        </template>


                    </div>

                </div>
            </div>

            <div class="border p-6 mt-2">
                <h1 class="text-lg font-bold">Main Camera</h1>
                <div>
                    <div x-data='{
                        cameras: 1,
                        camera_resolutions: [ [] ],
                        resetCameras() {
                            camera_resolutions = Array(cameras).fill("")
                        }
                    }' x-init='

                        $nextTick(() => {
                            cameras = {{ $phone->camera_count }}
                            camera_resolutions = @json($phone->camera_resolutions)
                        })


                    ' class="grid grid-cols-2 gap-4">
                        <div>
                            <div class="flex space-x-2 items-center">
                                <h2>Cameras: </h2>
                                <select name="camera_count" id="" x-model.number="cameras" class="text-sm" @change="resetCameras" >
                                    <template x-for="i in 5">
                                        <option :value="i" x-text="i"></option>
                                    </template>
                                </select>
                            </div>

                            <div>
                                <template x-for="(camera_resolution, index) in camera_resolutions" :key="index">
                                    <div class="mt-2">
                                        <div class="flex space-x-4 items-center">
                                            <h2>Resolution (in MP): </h2>
                                            <x-input type="text" name="camera_resolutions[]" x-model="camera_resolution" class="text-sm col-span-2"></x-input>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>

                        <div>
                            <div>
                                <h2>Videos</h2>
                                <x-input type="text" class="w-full block" name="video_quality" placeholder="4K@30fps,1080p@30/60/90/120fps" value="{{ $phone->video_quality }}"></x-input>
                                <div class="text-xs">Use comma to separate</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <h2 class="text-lg font-bold">Camera Additional Description</h2>
                    <div>
                        <x-input type="text" name="camera_description" class="w-full block text-sm col-span-2" value="{{ $phone->camera_description }}" placeholder="LED flash, HDR, panorama"></x-input>
                    </div>
                </div>
            </div>



            <div class="border p-6 mt-2">
                <h1 class="text-lg font-bold">Selfie Camera</h1>
                <div x-data='{
                    cameras: 1,
                    selfie_camera_resolutions: [ [] ],
                    resetCameras() {
                        selfie_camera_resolutions = Array(cameras).fill("")
                    }
                }' x-init='
                    $nextTick(() => {
                        cameras = {{ $phone->selfie_camera_count }}
                        selfie_camera_resolutions = @json($phone->selfie_camera_resolutions)
                    })
                '>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <div class="flex space-x-2 items-center">
                                <h2>Cameras: </h2>
                                <select name="selfie_camera_count" id="" x-model.number="cameras" class="text-sm" @change="resetCameras">
                                    <template x-for="i in 2">
                                        <option :value="i" x-text="i"></option>
                                    </template>
                                </select>
                            </div>

                            <div class="flex space-x-2 mt-2">

                                <x-input type="checkbox" value="1" id="pop-up" name="selfie_pop_up" :checked="$phone->selfie_pop_up " />
                                <x-label value="Pop-up Camera" for="pop-up"></x-label>
                            </div>
                        </div>

                        <div>
                            <template x-for="(selfie_camera_resolution, index) in selfie_camera_resolutions" :key="index">
                                <div class="flex space-x-4 items-center mt-2">

                                    <h2>Resolution (in MP): </h2>
                                    <x-input type="text" name="selfie_camera_resolutions[]" x-model="selfie_camera_resolution" class="text-sm"></x-input>

                                </div>
                            </template>
                        </div>

                    </div>
                </div>
                <div class="mt-2">
                    <h2 class="text-lg font-bold">Selfie Camera Additional Description</h2>
                    <div>
                        <x-input type="text" name="selfie_cameras_description" class="w-full block text-sm col-span-2" value="{{ $phone->selfie_cameras_description }}" placeholder="Panorama, 1080p@30fps"></x-input>
                    </div>
                </div>

            </div>

            <div class="border p-6 mt-2">
                <h1 class="text-lg font-bold">Sound</h1>
                <div class="grid grid-cols-2">
                    <div>
                        <h2>Loud Speaker</h2>
                        <select name="loud_speaker" id="" class="text-sm">
                            <option value="1" {{ $phone->loud_speaker == 1 ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ $phone->loud_speaker == 0 ? 'selected' : '' }}>No</option>
                        </select>
                    </div>

                    <div>
                        <h2>3.5mm jack</h2>
                        <select name="jack" id="" class="text-sm">
                            <option value="1" {{ $phone->jack == 1 ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ $phone->jack == 0 ? 'selected' : '' }}>No</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="border p-6 mt-2">
                <h1 class="text-lg font-bold">Battery</h1>

                <div class="grid grid-cols-4 gap-4">
                    <div>
                        <h2>Capacity (in mAh): </h2>
                        <x-input type="number" step="0.1" min="0" name="battery_capacity" class="text-sm" value="{{ $phone->battery_capacity }}"></x-input>
                    </div>
                    <div>
                        <h2>Wired Charging Power (in W): </h2>
                        <x-input type="number" step="0.1" min="0" name="wired_charging_power" class="text-sm" value="{{ $phone->wired_charging_power }}"></x-input>
                    </div>
                    <div>
                        <h2>Wireless Charging Power (in W): </h2>
                        <x-input type="number" step="0.1" min="0" name="wireless_charging_power" class="text-sm" value="{{ $phone->wireless_charging_power }}"></x-input>
                    </div>
                    <div>
                        <h2>Removable</h2>
                        <select name="removable_battery" id="" class="w-full block text-sm">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                </div>
                <div class="mt-2">
                    <h2 class="text-lg font-bold">Battery Additional Description</h2>
                    <div>
                        <x-input type="text" name="battery_description" class="w-full block text-sm col-span-2" value="{{ $phone->battery_description }}"></x-input>
                    </div>
                </div>
            </div>

            <div class="border p-6 mt-2" x-data='{
                features: @json($phone->features) ?? [],
                addFeature() {
                    this.features.push({key: "", value: ""})
                },
                deleteFeature(index) {
                    this.features.splice(index, 1)
                }
            }'>
                <div class="flex space-x-2 items-end">
                    <h1 class="text-lg font-bold">Features</h1>
                    <div>
                        <button type="button" class="text-xs bg-green-500 hover:bg-green-700 h-7 w-7 rounded text-white" @click="addFeature">+</button>
                    </div>
                </div>
                <template x-for="(feature, index) in features" :key="index">
                    <div class="flex space-x-2 mt-2">
                        <x-input type="text" x-bind:name="`features[`+ index +`][key]`" placeholder="Sensors" x-model="feature.key"></x-input>
                        <x-input type="text" x-bind:name="`features[`+ index +`][value]`" x-model="feature.value" placeholder="Fingerprint (side-mounted), accelerometer, dual gyro, dual proximity, compass, color spectrum" class="w-full"></x-input>
                        <div>
                            <button type="button" class="text-xs bg-red-500 hover:bg-red-700 h-7 w-7 text-center rounded text-white" @click="deleteFeature(index)">-</button>
                        </div>
                    </div>
                </template>
            </div>

            <div class="border p-6 mt-2" x-data='{
                miscs: @json($phone->misc) ?? [],
                addMisc() {
                    this.miscs.push({key: "", value: ""})
                },
                deleteMisc(index) {
                    this.miscs.splice(index, 1)
                }
            }'>
                <div class="flex space-x-2 items-end">
                    <h1 class="text-lg font-bold">Misc</h1>
                    <div>
                        <button type="button" class="text-xs bg-green-500 hover:bg-green-700 h-7 w-7 text-center rounded text-white" @click="addMisc">+</button>
                    </div>
                </div>
                <template x-for="(misc, index) in miscs" :key="index">
                    <div class="flex space-x-2 mt-2 items-center">
                        <x-input type="text" x-bind:name="`miscs[`+ index +`][key]`" x-model="misc.key" placeholder="Colors"></x-input>
                        <x-input type="text" x-bind:name="`miscs[`+ index +`][value]`" x-model="misc.value" placeholder="Black, Gold, Violet" class="w-full"></x-input>
                        <div>
                            <button type="button" class="text-xs bg-red-500 hover:bg-red-700 h-7 w-7 text-center rounded text-white" @click="deleteMisc(index)">-</button>
                        </div>
                    </div>
                </template>
            </div>

            <div class="border p-6 mt-2" x-data='{ description:"" }'>
                <textarea hidden name="description" x-model="description">{{  $phone->description  }}</textarea>
                <h1 class="text-lg font-bold">Additional Description</h1>
                <div x-ref="description" contenteditable class="border p-2 " @input="description = $event.target.innerHTML">{!!  $phone->description  !!}</div>
            </div>

            <div class="mt-2 float-right">
                <x-button>Update</x-button>
            </div>
        </form>
    </div>


</x-guest-layout>

<script>
    function os()
    {
        return {
            operatingSystems: @json($operatingSystems),
            selectedOs: "",
            selectedVersion: "",
            versions: [],
            init() {
                this.$nextTick(() => {
                    this.selectedOs = {{ $phone->operatingSystemVersion->operating_system_id }}
                    this.versions = this.operatingSystems.filter((e) => e.id == this.selectedOs)[0]["versions"]
                    this.selectedVersion = {{ $phone->operating_system_version_id }}
                })
            },
            getVersions() {
                this.selectedVersion = "",
                this.versions = this.operatingSystems.filter((e) => e.id == this.selectedOs)[0]["versions"]
            }
        }
    }
</script>
