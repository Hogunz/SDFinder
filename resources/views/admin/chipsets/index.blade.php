<x-app-layout>
    <div class="min-h-screen bg-gray-100">

        <!-- Page Content -->
        <main class="max-w-7xl p-12 mx-auto">
            <a href="{{ route('admin.chipsets.create') }}" class="bg-green-500 px-2 py-1 rounded shadow-sm text-white">Create</a>

            <table class="w-full border mt-2">
                <thead>
                    <tr>
                        <th class="px-6 py-2">Name</th>
                        <th class="px-6 py-2">Cores</th>
                        <th class="px-6 py-2">CPU</th>
                        <th class="px-6 py-2">GPU</th>
                        <th class="px-6 py-2">
                            <span class="sr-only">
                                Action
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($chipsets as $chipset)
                        <tr>
                            <td class="px-6 py-2">{{ $chipset->name }}</td>
                            <td class="px-6 py-2">{{ $chipset->no_of_cores }}</td>
                            <td class="px-6 py-2">{{ $chipset->cpu }}</td>
                            <td class="px-6 py-2">{{ $chipset->gpu }}</td>
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
