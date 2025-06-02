<nav class="flex-1 overflow-none px-2 sm:px-4 py-4">
    <div class="mb-6 space-y-2">
        <x-nav.link page="characters">
            <x-icon.people/>
            <h1 class="invisible sm:visible">Characters</h1>
        </x-nav.link>

        @selective
            <x-nav.section.character/>
        @endish

        <x-nav.link page="items">
            <x-icon.shield/>
            <h1 class="invisible sm:visible">Items</h1>
        </x-nav.link>

        <x-nav.link page="spells">
            <x-icon.zap/>
            <h1 class="invisible sm:visible">Spells</h1>
        </x-nav.link>

        <x-nav.link page="notes">
            <x-icon.note/>
            <h1 class="invisible sm:visible">Notes</h1>
        </x-nav.link>
    <!--
        <x-nav.link page="quests">
            <x-icon.clipboard/>
            Quests
        </x-nav.link>

        <x-nav.link page="potions">
            <x-icon.potion/>
            Potions
        </x-nav.link>

        <x-nav.link page="almanac">
            <x-icon.planet/>
            Almanac
        </x-nav.link>

        <x-nav.link page="maps">
            <x-icon.map/>
            Compass
        </x-nav.link>

        <x-nav.link page="contacts">
            <x-icon.people/>
            Contacts
        </x-nav.link>

        <x-nav.link page="notes">
            <x-icon.book/>
            Markdown
        </x-nav.link>
    -->
    </div>
</nav>