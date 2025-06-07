<nav class="flex-1 overflow-none px-2 sm:px-4 py-4">
    <div class="mb-6 space-y-2">
        <x-nav.link page="users">
            <x-slot:icon><x-icon.people/></x-slot:icon>
            Users
        </x-nav.link>

        <x-nav.link page="notes">
            <x-slot:icon><x-icon.note/></x-slot:icon>
            Notes
        </x-nav.link>
    </div>
</nav>