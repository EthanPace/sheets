<x-layout>
    <x-header>
        <x-slot:heading>Users</x-slot:heading>
        <x-slot:subheading>Manage, Invite, And Ban!</x-slot:subheading>
    </x-header>

    <div class="p-4 w-full h-full overflow-y-scroll flex gap-4">
        <div class="w-full h-full">
            <div class="w-full rounded-xl border-2 border-gray-300 h-fit">
                <table class="w-full">
                    <thead>
                        <tr class="text-xl">
                            <th scope="col" class="p-4 pl-8 text-left rounded-tl-xl">User</th>
                            <th scope="col" class="p-4 pr-8 text-center">Role</th>
                            <th scope="col" class="p-4 pr-8 text-right rounded-tr-xl">Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="odd:bg-gray-200 even:bg-white last:!bg-transparent">
                                <th scope="row" class="py-2 px-4 text-left text-gray-600 text-lg pl-8">{{ $user->username }}</th>
                                <td class="py-2 px-8 text-center">{{ $user->role }}</td>
                                <td class="py-2 px-4 text-right">
                                    <x-post-button action="/users/{{ $user->id }}/password-reset" method="POST" theme="rose">RESET</x-post-button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <x-form.success scope="post-reset"/>
        </div>
        <div>
            <x-form.wrapper>
                <x-form.error fields="username,role"/>
                <x-form action="/users/create" method="POST">
                    <x-form.input field="username" title="USERNAME"/>
                    <x-form.dropdown field="role" title="ROLE" :options="['admin', 'runner', 'player']"/>
                    <x-form.submit-button title="ADD"/>
                </x-form>
                <x-form.success scope="form"/>
            </x-form.wrapper>
        </div>
    </div>
</x-layout>