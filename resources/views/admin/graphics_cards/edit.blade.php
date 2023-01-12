<x-app-layout>
    <div class="min-h-screen bg-gray-100">

        <!-- Page Content -->
        <main class="max-w-7xl p-12 mx-auto">
            <form action="{{ route('admin.graphics_cards.update', $graphicsCard) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mt-1">
                    <x-label for="brand" value="Brand" class="dark:text-gray-300 mb-2"></x-label>
                    <x-input type="text" name="brand" class="w-full block text-black"></x-input>
                </div>

                <div class="mt-1">
                    <x-label for="name" value="Name" class="dark:text-gray-300 mb-2"></x-label>
                    <x-input type="text" name="name" class="w-full block text-black"></x-input>
                </div>

                <div class="mt-1">
                    <x-button>Submit</x-button>
                </div>
            </form>
        </main>
    </div>
</x-app-layout>
