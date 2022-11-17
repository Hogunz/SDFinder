<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

            <!-- Page Content -->
            <main class="max-w-7xl p-12 mx-auto">
                <h1 class="uppercase text-xl">Create phone</h1>
                <div class="border p-6 mt-2">
                    <div>
                        <h1 class="text-lg font-bold">Phone Name</h1>
                        <x-input type="text" class="w-full block"></x-input>
                    </div>

                    <div>
                        <h1 class="text-lg font-bold">Brand</h1>
                        <select name="" id="">
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <x-input type="file" />
                    </div>
                </div>

                <div class="border p-6 mt-2">
                    <div>
                        <h1 class="text-lg font-bold">Network</h1>
                        <h2>Technology</h2>
                        <div class="flex space-x-4">

                            @foreach (['2G', '3G', '4G', '5G'] as $network)
                            <div class="flex space-x-2">
                                <x-input type="checkbox" :value="$network" :id="$network"></x-input>
                                <x-label :value="$network" :for="$network"></x-label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="border p-6 mt-2">

                    <h1 class="text-lg font-bold">Body</h1>
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <h2>Dimensions</h2>
                            <div class="flex space-x-2 items-center">
                                <x-input type="number" class="w-24"></x-input>
                                <span>x</span>
                                <x-input type="number" class="w-24"></x-input>
                                <span>x</span>
                                <x-input type="number" class="w-24"></x-input>
                                <span>mm</span>
                            </div>
                        </div>

                        <div>
                            <h2>Weight</h2>
                            <x-input type="number"></x-input>
                            <span>g</span>
                        </div>

                        <div>
                            <h2>Build</h2>
                            <div>
                                <span>Front Material</span>
                                <x-input type="text"></x-input>
                            </div>
                            <div>
                                <span>Back Material</span>
                                <x-input type="text"></x-input>
                            </div>
                            <div>
                                <span>Frame Material</span>
                                <x-input type="text"></x-input>
                            </div>
                        </div>

                        <div>
                            <h2>SIM</h2>
                            <div x-data="{
                                multiple: 1,
                                multiples: ['Single', 'Dual', 'Triple', 'Quad'],
                                sims: ['Mini', 'Micro', 'Nano']
                            }">
                                <select name="" id="" x-model.number="multiple">
                                    <template x-for="(multiple, index) in multiples" :key="index">
                                        <option x-bind:value="index + 1" x-text="multiple"></option>
                                    </template>
                                </select>
                                <div>
                                    <template x-for="i in multiple">
                                        <div>
                                            <span x-text="`SIM` + i"></span>
                                            <select name="" id="">
                                                <template x-for="(sim, index) in sims" :key="index">
                                                    <option x-bind:value="index + 1" x-text="sim"></option>
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
                    <div>
                        <h2>Type</h2>
                        <select name="" id="">
                            @foreach (['IPS', 'OLED'] as $type)
                                <option value="{{ $type }}">{{ $type }}</option>
                            @endforeach
                        </select>
                        <h2>Size</h2>
                        <x-input type="number"></x-input>
                        <span>in</span>
                        <h2>Resolution</h2>
                        <x-input type="number"></x-input>
                        <span>x</span>
                        <x-input type="number"></x-input>
                        <span>pixels</span>
                    </div>
                </div>

                <div class="border p-6 mt-2">
                    <h1 class="text-lg font-bold">Platform</h1>
                    <div class="grid grid-cols-2 gap-2" x-data="os">


                        <div>
                            <h2>OS</h2>
                            <select name="" id="" x-model="selectedOs" x-on:change="getVersions()">
                                <option value="" hidden>Select OS</option>
                                <template x-for="(os, index) in operatingSystems" :key="index">
                                    <option :value="os.id" x-text="os.name"></option>
                                </template>
                            </select>
                        </div>

                        <div>
                            <h2>OS Version</h2>
                            <select name="" id="" x-model="selectedVersion">
                                <option value="">Select OS</option>
                                <template x-for="(version, index) in versions" :key="index">
                                    <option :value="version.id" x-text="version.name"></option>
                                </template>
                            </select>
                        </div>


                        <div>
                            <h2>Chipset</h2>
                            <select name="" id="">
                                @foreach (['Snapdragon'] as $chipset)
                                    <option value="{{ $chipset }}">{{ $chipset }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                </div>

                <div class="border p-6 mt-2">
                    <div>
                        <h1 class="text-lg font-bold">Memory</h1>
                        <h2>Card Slot</h2>
                        <select name="" id="">
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                        <div x-data="{
                            variants: 1
                        }">
                            <template x-for="i in variants">
                                <div class="flex space-x-2" >
                                    <div>
                                        <h2>RAM</h2>
                                        <select name="" id="">
                                            @foreach (['1', '2', '3', '4', '6', '8', '10', '12', '16'] as $ram)
                                            <option value="{{ $ram }}">{{ $ram }}</option>
                                            @endforeach
                                        </select>
                                        <span>GB</span>
                                    </div>
                                    <div>
                                        <h2>Storage</h2>
                                        <select name="" id="">
                                            @foreach (['1', '2', '4', '8', '16', '32', '64', '128', '256', '512', '1024'] as $storage)
                                                <option value="{{ $storage }}">{{ $storage }}</option>
                                            @endforeach
                                        </select>
                                        <span>GB</span>
                                    </div>

                                </div>

                            </template>

                            <div class="flex space-x-2 mt-1">

                                <div>
                                    <x-button type="button" @click="variants++">Add Variants</x-button>
                                </div>
                                <div x-show="variants > 1">
                                    <x-button type="button" @click="variants--">Remove</x-button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="border p-6 mt-2">
                    <h1 class="text-lg font-bold">Main Camera</h1>
                    <div class="grid grid-cols-2 gap-2">
                        <div x-data="{
                            cameras: 1
                        }" >
                            <h2>Cameras</h2>
                            <select name="" id="" x-model.number="cameras">
                                <template x-for="i in 5">
                                    <option :value="i" x-text="i"></option>
                                </template>
                            </select>
                            <template x-for="i in cameras">
                                <div>
                                    <div>
                                        <h2>Resolution</h2>
                                        <x-input type="text"></x-input>
                                    </div>
                                </div>
                            </template>
                        </div>

                        <div>
                            <div>
                                <h2>Videos</h2>
                                <x-input type="text" class="w-full block" placeholder="4K@30fps,1080p@30/60/90/120fps"></x-input>
                                <div class="text-xs">Use comma to separate</div>
                            </div>
                        </div>


                    </div>
                </div>



                <div class="border p-6 mt-2">
                    <h1 class="text-lg font-bold">Selfie Camera</h1>
                    <div x-data="{
                        cameras: 1
                    }" >
                        <h2>Cameras</h2>
                        <select name="" id="" x-model.number="cameras">
                            <template x-for="i in 2">
                                <option :value="i" x-text="i"></option>
                            </template>
                        </select>
                        <template x-for="i in cameras">
                            <div>
                                <div>
                                    <h2>Resolution</h2>
                                    <x-input type="text"></x-input>
                                </div>
                            </div>
                        </template>
                    </div>
                    <div class="flex space-x-2">
                        <x-input type="checkbox" value="1" id="pop-up"></x-input>
                        <x-label value="Pop-up Camera" for="pop-up"></x-label>
                    </div>

                </div>

                <div class="border p-6 mt-2">
                    <h1 class="text-lg font-bold">Sound</h1>
                    <div class="flex space-x-2">
                        <x-input type="checkbox" value="1" id="loud-speaker"></x-input>
                        <x-label value="Loud Speaker" for="loud-speaker"></x-label>
                    </div>
                    <div class="flex space-x-2">
                        <x-input type="checkbox" value="1" id="jack"></x-input>
                        <x-label value="3.5mm jack" for="jack"></x-label>
                    </div>
                </div>

                <div class="border p-6 mt-2">
                    <h1 class="text-lg font-bold">Battery</h1>
                    <div class="grid grid-cols-4">

                        <div>
                            <h2>Capacity</h2>
                            <x-input type="number" min="0"></x-input>
                            <span>mAh</span>
                        </div>
                        <div>

                            <h2>Wired Charging Power</h2>
                            <x-input type="number" min="0"></x-input>
                            <span>W</span>
                        </div>
                        <div>

                            <h2>Wireless Charging Power</h2>
                            <x-input type="number" min="0"></x-input>
                            <span>W</span>
                        </div>
                        <div>
                            <h2>Removable</h2>
                            <select name="" id="">
                                <option value="no">No</option>
                                <option value="yes">Yes</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="border p-6 mt-2" x-data="{ description: ''}">
                    <input type="hidden" x-model="description" name="description">
                    <h1 class="text-lg font-bold">Additional Description</h1>
                    <div contenteditable class="border p-6" @input="description = $event.target.textContent">

                    </div>
                </div>


                <x-button>Create</x-button>
            </main>
        </div>
    </body>

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
