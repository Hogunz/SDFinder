<x-app-layout>
    <div class="min-h-screen ">

        <!-- Page Content -->
        <main class="max-w-7xl p-12 mx-auto">
            <a href="{{ route('admin.processors.create') }}" class="bg-green-500 hover:bg-green-700 px-2 py-1 rounded shadow-sm text-white">Create</a>

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-2">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
                    <tr>
                    <th class="px-6 py-2"></th>
                        <th class="px-6 py-3">Name</th>
                        <th scope="col" class="py-3 px-6">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($processors as $processor)
                        <tr  class="{{ $loop->iteration % 2 == 0 ? 'bg-gray-50 border-b  dark:bg-gray-900 dark:border-gray-700' : 'bg-gray-200 border-b dark:bg-gray-800 dark:border-gray-700' }}">
                        <td class="px-6 py-3 text-center">{{ $loop->iteration }}</td>  
                        <td class="px-6 py-3 text-center">{{ $processor->name }}</td>
                            <td class="px-6 py-3 text-center">
                                <a href="{{ route('admin.processors.edit', $processor) }}">
                                    <x-button type="button">Edit</x-button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </div>
</x-app-layout>
