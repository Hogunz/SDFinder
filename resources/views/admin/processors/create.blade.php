<x-app-layout>
    <div class="min-h-screen bg-gray-100">

        <!-- Page Content -->
        <main class="max-w-7xl p-12 mx-auto">
            <form action="{{ route('admin.processors.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mt-1">
                    <x-label for="name" value="Brand"></x-label>
                    <x-select name="brand" class="w-full block">
                        @foreach ($brands as $brand)
                            <option value="{{ $brand }}">{{ $brand }}</option>
                        @endforeach
                    </x-select>
                </div>

                <div class="mt-1">
                    <x-label for="name" value="Name"></x-label>
                    <x-input type="text" name="name" class="w-full block"></x-input>
                </div>

                <div class="mt-1">
                    <x-label for="no_of_cores" value="No of Cores"></x-label>
                    <x-input type="number" name="no_of_cores" class="w-full block"></x-input>
                </div>

                <div class="mt-1">
                    <x-label for="no_of_threads" value="No of Threads"></x-label>
                    <x-input type="number" name="no_of_threads" class="w-full block"></x-input>
                </div>

                <div class="mt-1">
                    <x-label for="base_clock" value="Base Clock (GHz)"></x-label>
                    <x-input type="number" step="0.1" name="base_clock" class="w-full block"></x-input>
                </div>

                <div class="mt-1">
                    <x-label for="max_boost_clock" value="Max Boost Clock (GHz)"></x-label>
                    <x-input type="number" step="0.1" name="max_boost_clock" class="w-full block"></x-input>
                </div>

                <div class="mt-1">
                    <x-button>Submit</x-button>
                </div>
            </form>
        </main>
    </div>
</x-app-layout>
