<x-layout>
    <x-header>
        <x-slot:heading>Users</x-slot:heading>
        <x-slot:subheading>Manage, Invite, And Ban!</x-slot:subheading>
    </x-header>

    <div class="p-4 w-full h-full overflow-y-scroll">
        <table class="w-full">
            <thead>
                <tr class="text-xl bg-white">
                    <th scope="col" class="p-4 pl-8 text-left">User</th>
                    <th scope="col" class="p-4 pr-8 text-right">Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="odd:bg-gray-200 even:bg-white">
                        <th scope="row" class="py-2 px-4 text-left text-gray-600 text-lg pl-8">{{ $user->username }}</th>
                        <td class="py-2 px-8 text-right">{{ $user->role }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>