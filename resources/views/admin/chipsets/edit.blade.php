<x-app-layout>
    <div class="min-h-screen">

        <!-- Page Content -->
        <main class="max-w-7xl p-12 mx-auto">
            <form action="{{ route('admin.chipsets.update', $chipset) }}" method="post">
                @csrf
                @method('put')

                <div class="mt-1">
                    <x-label for="name" value="Name" class="dark:text-gray-300 mb-2"></x-label>
                    <x-input type="text" name="name" id="name" value="{{ $chipset->name }}"
                        class="w-full block text-black"></x-input>
                </div>

                <div class="mt-1">
                    <x-label for="no_of_cores" value="Number of Cores" class="dark:text-gray-300 mb-2"></x-label>
                    <x-input type="number" name="no_of_cores" id="no_of_cores" value="{{ $chipset->no_of_cores }}"
                        class="w-full block text-black">
                    </x-input>
                </div>

                <div class="mt-1">
                    <x-label for="cpu" value="CPU" class="dark:text-gray-300 mb-2"></x-label>
                    <x-input type="text" name="cpu" id="cpu" value="{{ $chipset->cpu }}"
                        class="w-full block text-black"></x-input>
                </div>

                <div class="mt-1">
                    <x-label for="gpu" value="GPU" class="dark:text-gray-300 mb-2"></x-label>
                    <x-input type="text" name="gpu" id="gpu" value="{{ $chipset->gpu }}"
                        class="w-full block text-black"></x-input>
                </div>

                <div class="mt-1">
                    <x-button>Submit</x-button>
                </div>
            </form>
        </main>
    </div>
</x-app-layout>
