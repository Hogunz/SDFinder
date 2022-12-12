<x-guest-layout>
    <div class="mx-auto py-12 px-6">
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
                        <td class="px-6 py-3 text-center">
                            <img src="{{ asset('storage/' . $phone->img) }}" class="w-24 h-52 object-cover mx-auto">
                        </td>
                        <td class="px-6 py-3 text-center">
                            <form action="{{ route('admin.phones.destroy', $phone) }}" method="post">
                                @csrf
                                @method('delete')
                                <x-button type="submit">Delete</x-button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</x-guest-layout>
