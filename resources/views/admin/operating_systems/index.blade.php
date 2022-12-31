<x-app-layout>
    <div class="min-h-screen bg-gray-100">

        <!-- Page Content -->
        <main class="max-w-7xl p-12 mx-auto">
            <a href="{{ route('admin.os.create') }}" class="bg-green-500 px-2 py-1 rounded shadow-sm text-white">Create</a>

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
                    @foreach ($operatingSystems as $os)
                        <tr>
                            <td class="px-6 py-2">{{ $os->name }}</td>
                            <td class="px-6 py-2">
                                <x-button type="button">Edit</x-button>
                                <a href="{{ route('admin.os.show', $os) }}">
                                    <x-button type="button">Show</x-button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </div>
</x-app-layout>
