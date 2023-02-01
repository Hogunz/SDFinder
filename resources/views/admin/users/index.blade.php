<x-app-layout>
    <div class="mx-auto py-12 px-6">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
                <tr>
                    <th scope="col" class="py-3 px-6">ID</th>
                    <th scope="col" class="py-3 px-6">Name</th>
                    <th scope="col" class="py-3 px-6">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="">
                        <td class="px-6 py-3 text-center">
                            {{ $user->id }}
                        </td>
                        <td class="px-6 py-3 text-center whitespace-nowrap">
                            {{ $user->name }}
                        </td>
                        <td class="px-6 py-3 text-center">
                            {{ $user->email }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</x-app-layout>
