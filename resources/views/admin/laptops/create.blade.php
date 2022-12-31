<x-app-layout>

    <!-- Page Content -->
    <main class="max-w-7xl p-12 mx-auto">
        <x-auth-validation-errors></x-auth-validation-errors>
        <form action="{{ route('admin.laptops.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="border p-6 mt-2">
                <div class="grid grid-cols-2 gap-4">
                    <div class="mt-1">
                        <x-label for="name" value="Name"></x-label>
                        <x-input type="text" name="name" class="w-full block"></x-input>
                    </div>

                    <div class="mt-1">
                        <x-label value="Brand"></x-label>
                        <x-select name="brand_id" id="" class="w-full block">
                            <option value="" selected>Select Brand</option>
                            @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                            @endforeach
                        </x-select>
                    </div>
                </div>


                <div class="mt-2">
                    <h1 class="text-lg font-bold">Main Image</h1>
                    <x-input type="file" name="image" class="w-full block" accept="image/*" />
                </div>

                <div class="mt-2">
                    <h1 class="text-lg font-bold">Gallery</h1>
                    <x-input type="file" name="galleries[]" class="w-full block" accept="image/*" multiple />
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="mt-1">
                        <x-label for="name" value="Processor"></x-label>
                        <x-select name="processor_id" class="w-full block">
                            <option value="">Select Processor</option>
                            @foreach ($processors as $processor)
                                <option value="{{ $processor->id }}">{{ $processor->name }}</option>
                            @endforeach
                        </x-select>
                    </div>

                    <div class="mt-1">
                        <x-label for="name" value="Graphics Card"></x-label>
                        <x-select name="graphics_card_id" class="w-full block">
                            <option value="">Select Graphics Card</option>
                            @foreach ($graphicsCards as $graphicsCard)
                                <option value="{{ $graphicsCard->id }}">{{ $graphicsCard->name }}</option>
                            @endforeach
                        </x-select>
                    </div>
                </div>

            </div>


            <div class="border p-6 mt-2">
                <h1 class="text-lg font-bold">Display</h1>
                <div class="grid grid-rows-2 grid-flow-col gap-4">
                    <div>
                        <h2>Type</h2>
                        <x-select name="display_type" id="" class="w-full block text-sm">
                            @foreach ($types as $type)
                                <option value="{{ $type }}">{{ $type }}</option>
                            @endforeach
                        </x-select>
                    </div>

                    <div>
                        <h2>Size</h2>
                        <x-input type="text" name="screen_size" class="text-sm" value="{{ old('size') }}"></x-input>
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
                        <x-select name="display_resolution" id="" class="w-full block text-sm">
                            @foreach ($resolutions as $i => $resolution)
                                <option value="{{ $i }}">{{ $resolution }}</option>
                            @endforeach
                        </x-select>
                    </div>
                </div>

                <div class="mt-2">
                    <h2 class="text-lg font-bold">Display Additional Description</h2>
                    <div>
                        <x-input type="text" name="display_description" class="w-full block text-sm col-span-2" value="{{ old('display_description') }}" placeholder="AMOLED, Corning Gorilla Glass 5, 3.26 inches, 382 x 720 pixels, 250 PPI, 800 nits (HBM), 900 nits (peak)"></x-input>
                    </div>
                </div>
            </div>

            <div class="border p-6 mt-2">

                <div class="grid grid-cols-2 gap-4">
                    <div class="mt-1">
                        <x-label for="name" value="RAM (GB)"></x-label>
                        <x-input type="text" name="ram" class="w-full block"></x-input>
                    </div>

                    <div class="mt-1">
                        <x-label for="name" value="Storage (GB)"></x-label>
                        <x-input type="text" name="storage" class="w-full block"></x-input>
                    </div>
                </div>


                <div class="mt-1">
                    <x-label for="name" value="Storage Description"></x-label>
                    <x-input type="text" name="storage_description" class="w-full block"></x-input>
                </div>

            </div>

            <div class="border p-6 mt-2">

                <div class="flex space-x-2 mt-2">

                    <x-input type="checkbox" value="1" id="camera" name="camera" />
                    <x-label value="Camera" for="camera"></x-label>
                </div>

                <div class="mt-2">
                    <h2 class="text-lg font-bold">Camera Description</h2>
                    <div>
                        <x-input type="text" name="camera_description" class="w-full block text-sm col-span-2" value="{{ old('camera_description') }}" placeholder="720P HD RGB with Microphone"></x-input>
                    </div>
                </div>
            </div>

            <div class="border p-6 mt-2">
                <h1 class="text-lg font-bold">Battery</h1>

                <div class="grid grid-cols-4 gap-4">
                    <div>
                        <h2>Capacity (in mAh): </h2>
                        <x-input type="number" step="0.1" min="0" name="battery_capacity" class="text-sm" value="{{ old('battery_capacity') }}"></x-input>
                    </div>
                </div>
                <div class="mt-2">
                    <h2 class="text-lg font-bold">Battery Additional Description</h2>
                    <div>
                        <x-input type="text" name="battery_description" class="w-full block text-sm col-span-2" value="{{ old('battery_description') }}"></x-input>
                    </div>
                </div>
            </div>

            <div class="border p-6 mt-2" x-data="{
                features: [  ],
                addFeature() {
                    this.features.push({key: '', value: ''})
                },
                deleteFeature(index) {
                    this.features.splice(index, 1)
                }
            }">
                <div class="flex space-x-2 items-end">
                    <h1 class="text-lg font-bold">Features</h1>
                    <div>
                        <button type="button" class="text-xs bg-green-500 hover:bg-green-700 h-7 w-7 rounded text-white" @click="addFeature">+</button>
                    </div>
                </div>
                <template x-for="(feature, index) in features" :key="index">
                    <div class="flex space-x-2 mt-2">
                        <x-input type="text" x-bind:name="`features[`+ index +`][key]`" placeholder="Sensors"></x-input>
                        <x-input type="text" x-bind:name="`features[`+ index +`][value]`" placeholder="Fingerprint (side-mounted), accelerometer, dual gyro, dual proximity, compass, color spectrum" class="w-full"></x-input>
                        <div>
                            <button type="button" class="text-xs bg-red-500 hover:bg-red-700 h-7 w-7 text-center rounded text-white" @click="deleteFeature(index)">-</button>
                        </div>
                    </div>
                </template>
            </div>

            <div class="mt-1" x-data="{ description: ''}">
                <textarea hidden name="description" x-model="description"></textarea>
                <h1 class="text-lg font-bold">Additional Description</h1>
                <div contenteditable class="bg-white p-2 rounded dark:text-black" @input="description = $event.target.innerHTML"></div>
            </div>

            <div class="mt-1">
                <x-button>Submit</x-button>
            </div>
        </form>
    </main>

</x-app-layout>
