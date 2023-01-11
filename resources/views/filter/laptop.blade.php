<div class="bg-slate-300 p-6">
    <div>
        <h2 class="text-lg font-semibold">General</h2>
        <div class="w-full mt-2">
            <h4>Brands:</h4>
            <div class="max-h-24 overflow-y-auto rounded grid grid-cols-5 gap-4 border p-4">
                @foreach ($brands as $brand)
                    <div class="flex space-x-2 items-center">
                        <x-input type="checkbox" name="brands[]" value="{{ $brand->id }}"
                            id="{{ 'brand' . $brand->id }}" />
                        <x-label for="{{ 'brand' . $brand->id }}" :value="$brand->name" />
                    </div>
                @endforeach
            </div>
        </div>
        <div class="w-full mt-2" x-data="range()">
            <h4>Price Range:</h4>
            <div class="text-sm flex space-x-2 items-center mb-2">
                <x-input type="number" x-model.number="minPrice" name="price[min]" min="0" class="text-sm"
                    @blur="minTrigger()" />
                <span> - </span>
                <x-input type="number" x-model.number="maxPrice" name="price[max]" min="0" class="text-sm"
                    @blur="maxTrigger()" />
                <x-button type="button" @click="clearPrice()">Clear</x-button>
            </div>
        </div>
    </div>

    <hr class="my-6">

    <div>
        <h2 class="text-lg font-semibold"></h2>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <h4>CPU: </h4>
                <div class="border flex flex-col max-h-24 h-full px-4 py-2">

                    @foreach ($cpus as $cpu)
                        <div class="flex space-x-2">
                            <x-input type="checkbox" name="cpus[]" value="{{ $cpu->id }}"
                                id="{{ 'cpu'.$cpu->id }}" />
                            <x-label value="{{ $cpu->name }}" for="{{ 'cpu' . $cpu->id }}" />
                        </div>
                    @endforeach
                </div>

            </div>

            <div>
                <h4>GPU: </h4>
                <div class="border flex flex-col max-h-24 h-full px-4 py-2">
                    @foreach ($gpus as $gpu)
                        <div class="flex space-x-2">
                            <x-input type="checkbox" name="gpus[]" value="{{ $gpu->id }}"
                                id="{{ 'gpu'.$gpu->id }}" />
                            <x-label value="{{ $gpu->name }}" for="{{ 'gpu' . $gpu->id }}" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <hr class="my-6">

    <div>
        <h2 class="text-lg font-semibold">Memory</h2>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <h4>RAM</h4>
                <div class="border flex flex-col h-full px-4 py-2 max-h-24 overflow-y-auto">
                    @foreach ($rams as $i => $ram)
                        <div class="flex space-x-2">
                            <x-input type="checkbox" value="{{ $ram }}" id="{{ 'ram' . $i }}"
                                name="rams[]"></x-input>
                            <x-label for="{{ 'ram' . $i }}" :value="$ram . ' GB'"></x-label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div>
                <h4>Storage</h4>
                <div class="border flex flex-col h-full px-4 py-2 max-h-24 overflow-y-auto">
                    @foreach ($storages as $i => $storage)
                        <div class="flex space-x-2">
                            <x-input type="checkbox" value="{{ $storage }}" id="{{ 'storage' . $i }}"
                                name="storages[]"></x-input>
                            <x-label for="{{ 'storage' . $i }}" :value="$storage . ' GB'"></x-label>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

    <hr class="my-6">

    <div class="flex justify-end">
        <x-button type="button" @click="document.querySelector('#filter').submit()" name="laptop">Filter</x-button>
    </div>
</div>
