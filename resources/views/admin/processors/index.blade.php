<x-app-layout>
    <div class="min-h-screen ">

        <!-- Page Content -->
        <main class="max-w-7xl p-12 mx-auto">
            <a href="{{ route('admin.processors.create') }}" class="bg-green-500 hover:bg-green-700 px-2 py-1 rounded shadow-sm text-white">Create</a>

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-2">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
                    <tr>
                    <th class="px-6 py-2"></th>
                    <th class="px-6 py-3">Brand</th>
                        <th class="px-6 py-3">Name</th>
                        <th class="px-6 py-3">No. of cores</th>
                        <th class="px-6 py-3">No. of threads</th>
                        <th class="px-6 py-3">Base clock</th>
                        <th class="px-6 py-3">Max boost clock</th>
                        <th scope="col" class="py-3 px-6">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($processors as $processor)
                        <tr  class="{{ $loop->iteration % 2 == 0 ? 'bg-gray-50 border-b  dark:bg-gray-900 dark:border-gray-700' : 'bg-gray-200 border-b dark:bg-gray-800 dark:border-gray-700' }}">
                        <td class="px-6 py-3 text-center">{{ $loop->iteration }}</td>
                        <td class="px-6 py-3 text-center">{{ $processor->brand }}</td>
                        <td class="px-6 py-3 text-center">{{ $processor->name }}</td>
                        <td class="px-6 py-3 text-center">{{ $processor->no_of_cores }}</td>
                        <td class="px-6 py-3 text-center">{{ $processor->no_of_threads }}</td>
                        <td class="px-6 py-3 text-center">{{ $processor->base_clock }}</td>
                        <td class="px-6 py-3 text-center">{{ $processor->max_boost_clock }}</td>
                        <td class="px-6 py-3 text-center flex space-x-2">
                            @if(!$processor->trashed())
                                <a href="{{ route('admin.processors.edit', $processor) }}">
                                    <x-button type="button">Edit</x-button>
                                </a>
                                <form action="{{ route('admin.processors.destroy', $processor) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <x-button type="submit">Delete</x-button>
                                </form>
                            @else
                                <a href="{{ route('admin.processors.restore', $processor) }}">
                                    <x-button type="button">Restore</x-button>
                                </a>
                            @endif
                        </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </div>
</x-app-layout>
