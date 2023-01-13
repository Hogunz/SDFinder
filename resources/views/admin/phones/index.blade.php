<x-app-layout>
    <div class="mx-auto py-12 px-6">
        <a href="{{ route('admin.phones.create') }}" class="bg-green-500 hover:bg-green-700 px-2 py-1 rounded shadow-sm  text-white">Create</a>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
                <tr>
                    <th scope="col" class="py-3 px-6"></th>
                    <th scope="col" class="py-3 px-6">Name</th>
                    <th scope="col" class="py-3 px-6">Brand</th>
                    <th scope="col" class="py-3 px-6">Image</th>
                    <th scope="col" class="py-3 px-6">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($phones as $phone)
                    <tr
                        class="{{ $loop->iteration % 2 == 0 ? 'bg-gray-50 border-b dark:bg-gray-900 dark:border-gray-700' : 'bg-gray-200 border-b dark:bg-gray-800 dark:border-gray-700' }}">
                        <td class="px-6 py-3 text-center">{{ $loop->iteration }}</td>
                        <td class="px-6 py-3 text-center whitespace-nowrap">{{ $phone->name }}</td>
                        <td class="px-6 py-3 text-center">{{ $phone->brand->name }}</td>
                        <td class="px-6 py-3 text-center ">
                            <img src="{{ asset('storage/' . $phone->img) }}" class=" w-32 h-52 object-contain mx-auto">
                        </td>
                        <td class="px-6 py-3 text-center flex space-x-2">
                            @if(!$phone->trashed())
                                <a href="{{ route('admin.phones.edit', $phone) }}">
                                    <x-button type="button">Edit</x-button>
                                </a>
                                <a href="{{ route('admin.phones.show', $phone) }}">
                                    <x-button type="button">Create Review</x-button>
                                </a>
                                <form action="{{ route('admin.phones.destroy', $phone) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <x-button type="submit">Delete</x-button>
                                </form>
                            @else
                                <a href="{{ route('admin.phones.restore', $phone) }}">
                                    <x-button type="button">Restore</x-button>
                                </a>
                            @endif
                            <form action="{{ route('admin.phones.forceDelete', $phone) }}" method="post">
                                @csrf
                                @method('delete')
                                <x-button type="submit">Delete Permanently</x-button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</x-app-layout>
