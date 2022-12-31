<x-app-layout>
    <div class="min-h-screen bg-gray-100">

        <!-- Page Content -->
        <main class="max-w-7xl p-12 mx-auto">
            <h1 class="uppercase">{{ $operatingSystem->name }}</h1>

            <a href="{{ route('admin.os.version.create', $operatingSystem) }}" class="bg-green-500 px-2 py-1 rounded shadow-sm text-white">Create</a>

            <table class="w-full border mt-2">
                <thead>
                    <tr>
                        <th class="px-6 py-2">Name</th>
                        <th class="px-6 py-2">
                            <span class="sr-only">
                                Action
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($operatingSystem->versions as $version)
                        <tr>
                            <td class="px-6 py-2">{{ $version->name }}</td>
                            <td class="px-6 py-2">
                                <x-button type="button">Edit</x-button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </div>
</x-app-layout>
