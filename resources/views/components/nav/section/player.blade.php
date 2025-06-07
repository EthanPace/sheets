<nav class="flex-1 overflow-none px-2 sm:px-4 py-4 mr-1">
    <div class="mb-6 space-y-2">
        <x-nav.link page="characters">
            <x-slot:icon><x-icon.people/></x-slot:icon>
            Characters
        </x-nav.link>

        @selective
            <x-nav.section.character/>
        @endish
        
        <x-nav.link page="notes">
            <x-slot:icon><x-icon.note/></x-slot:icon>
            Notes
        </x-nav.link>
    </div>
</nav>