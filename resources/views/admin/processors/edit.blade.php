<x-app-layout>
    <div class="min-h-screen bg-gray-100">

        <!-- Page Content -->
        <main class="max-w-7xl p-12 mx-auto">
            <form action="{{ route('admin.processors.update', $processor) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mt-1">
                    <x-label for="brand" value="Brand"></x-label>
                    <x-input type="text" name="brand" value="{{ $processor->brand }}"
                        class="w-full block text-black"></x-input>
                </div>

                <div class="mt-1">
                    <x-label for="name" value="Name"></x-label>
                    <x-input type="number" name="name" value="{{ $processor->name }}"
                        class="w-full block text-black"></x-input>
                </div>

                <div class="mt-1">
                    <x-label for="no_of_cores" value="No. of cores"></x-label>
                    <x-input type="number" name="no_of_cores" value="{{ $processor->no_of_cores }}"
                        class="w-full block text-black"></x-input>
                </div>

                <div class="mt-1">
                    <x-label for="no_of_threads" value="No. of threads"></x-label>
                    <x-input type="number" name="no_of_threads" value="{{ $processor->no_of_threads }}"
                        class="w-full block text-black"></x-input>
                </div>

                <div class="mt-1">
                    <x-label for="base_clock" value="Base clock"></x-label>
                    <x-input type="number" name="base_clock" value="{{ $processor->base_clock }}"
                        class="w-full block text-black"></x-input>
                </div>
                <div class="mt-1">
                    <x-label for="max_boost_clock" value="Max boost clock"></x-label>
                    <x-input type="number" name="max_boost_clock" value="{{ $processor->max_boost_clock }}"
                        class="w-full block text-black"></x-input>
                </div>

                <div class="mt-1">
                    <x-button>Submit</x-button>
                </div>
            </form>
        </main>
    </div>
</x-app-layout>
