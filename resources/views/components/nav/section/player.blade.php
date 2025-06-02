<nav class="flex-1 overflow-none px-2 sm:px-4 py-4 mr-1">
    <div class="mb-6 space-y-2">
        <x-nav.link page="characters">
            <x-icon.people/>
            <h1 class="invisible sm:visible">Characters</h1>
        </x-nav.link>

        @selective
            <x-nav.section.character/>
        @endish
        
        <x-nav.link page="notes">
            <x-icon.note/>
            <h1 class="invisible sm:visible">Notes</h1>
        </x-nav.link>
    </div>
</nav>