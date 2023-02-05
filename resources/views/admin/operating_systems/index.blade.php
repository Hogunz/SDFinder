<x-app-layout>
    <div class="min-h-screen">

        <!-- Page Content -->
        <main class="max-w-7xl p-12 mx-auto">
            <a href="{{ route('admin.os.create') }}"
                class="bg-green-500 hover:bg-green-700 px-2 py-1 rounded shadow-sm text-white">Create</a>

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-2">
                <thead
                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
                    <tr>

                        <th scope="col" class="py-3 px-6">Name</th>
                        <th scope="col" class="py-3 px-6">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($operatingSystems as $os)
                        <tr
                            class="{{ $loop->iteration % 2 == 0 ? 'bg-gray-50 border-b  dark:bg-gray-900 dark:border-gray-700' : 'bg-gray-200 border-b dark:bg-gray-800 dark:border-gray-700' }}">
                            <td class="px-6 py-3 text-center whitespace-nowrap">{{ $os->name }}</td>
                            <td class="px-6 py-3 text-center justify-center flex space-x-2">
                                @if (!$os->trashed())
                                    <a href="{{ route('admin.os.edit', $os) }}">
                                        <x-button type="button">Edit</x-button>
                                    </a>
                                    <form action="{{ route('admin.os.destroy', $os) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <x-button type="submit">Delete</x-button>
                                    </form>
                                @else
                                    <a href="{{ route('admin.os.restore', $os) }}">
                                        <x-button type="button">Restore</x-button>
                                    </a>
                                @endif
                                <form action="{{ route('admin.os.forceDelete', $os) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <x-button type="submit">Delete Permanently</x-button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </div>
</x-app-layout>
