<x-app-layout>
    <div class="min-h-screen bg-gray-100">

        <!-- Page Content -->
        <main class="max-w-7xl p-12 mx-auto">
            <form action="{{ route('admin.brands.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mt-1">
                    <x-label for="name" value="Name"></x-label>
                    <x-input type="text" name="name" class="w-full block"></x-input>
                </div>

                <div class="mt-1">
                    <x-label for="image" value="Logo"></x-label>
                    <x-input type="file" accepts="images/*" name="image" class="w-full block"></x-input>
                </div>

                <div class="mt-1">
                    <x-button>Submit</x-button>
                </div>
            </form>
        </main>
    </div>
</x-app-layout>