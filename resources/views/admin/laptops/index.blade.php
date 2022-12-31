<x-app-layout>


    <!-- Page Content -->
    <main class="max-w-7xl p-12 mx-auto">
        <a href="{{ route('admin.laptops.create') }}" class="bg-green-500 px-2 py-1 rounded shadow-sm text-white">Create</a>

        <table class="w-full border mt-2">
            <thead>
                <tr>
                    <th class="px-6 py-2">Name</th>
                    <th class="px-6 py-2">Image</th>
                    <th class="px-6 py-2">
                        <span class="sr-only">
                            Action
                        </span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($laptops as $laptop)
                    <tr>
                        <td class="px-6 py-2">{{ $laptop->name }}</td>
                        <td class="px-6 py-2">
                            <img src="{{ asset('storage/'.$laptop->image ) }}" alt="" class=" w-32 h-52 object-contain mx-auto">
                        </td>
                        <td class="px-6 py-2">
                            <a href="{{ route('admin.laptops.edit', $laptop) }}">
                                <x-button type="button">Edit</x-button>
                            </a>
                            <a href="{{ route('admin.laptops.show', $laptop) }}">
                                <x-button type="button">Create Review</x-button>
                            </a>
                            <form action="{{ route('admin.laptops.destroy', $laptop) }}" method="post">
                                @csrf
                                @method('delete')
                                <x-button type="submit">Delete</x-button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>

</x-app-layout>
