<x-layout>
    <x-header>
        <x-slot:heading>{{ Auth::user()->username }}</x-slot:heading>
        <x-slot:subheading>You can do it!</x-slot:subheading>
    </x-header>

    <div class="p-4 w-full h-full overflow-y-scroll flex flex-col gap-8 justify-end">
        <x-menu>
            <x-menu.item href="/profile/password">
                <x-slot:icon><x-icon.lock/></x-slot:icon>
                Change Password
            </x-menu.item>
            <x-menu.post href="/logout">
                <x-slot:icon><x-icon.leave/></x-slot:icon>
                Logout
            </x-menu.post>
        </x-menu>
    </div>
</x-layout>
