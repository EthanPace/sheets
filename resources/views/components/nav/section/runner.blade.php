<nav class="flex-1 overflow-none px-2 sm:px-4 py-4">
    <div class="mb-6 space-y-2">
        <x-nav.link page="characters">
            <x-slot:icon><x-icon.people/></x-slot:icon>
            Characters
        </x-nav.link>

        @selective
            <x-nav.section.character/>
        @endish

        <x-nav.link page="items">
            <x-slot:icon><x-icon.shield/></x-slot:icon>
            Items
        </x-nav.link>

        <x-nav.link page="spells">
            <x-slot:icon><x-icon.zap/></x-slot:icon>
            Spells
        </x-nav.link>

        <x-nav.link page="notes">
            <x-slot:icon><x-icon.note/></x-slot:icon>
            Notes
        </x-nav.link>

        <x-nav.link page="combat">
            <x-slot:icon><x-icon.sword/></x-slot:icon>
            Combat
        </x-nav.link>
    </div>
</nav>