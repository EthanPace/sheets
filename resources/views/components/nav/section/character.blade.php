<div class="sm:ml-6 space-y-2">
    <x-nav.link page="characters/{{ Auth::user()->character->id }}">
        <x-icon.character/>
        <h1 class="invisible sm:visible">Sheet</h1>
    </x-nav.link>

    @hasitems
        <x-nav.link page="inventory">
            <x-icon.shield/>
            <h1 class="invisible sm:visible">Inventory</h1>
        </x-nav.link>
    @endish

    @caster
        <x-nav.link page="spellbook">
            <x-icon.book/>
            <h1 class="invisible sm:visible">Spellbook</h1>
        </x-nav.link>
    @endish

    @initiative
        <x-nav.link page="combat">
            <x-icon.sword/>
            <h1 class="invisible sm:visible">Combat</h1>
        </x-nav.link>
    @endish
</div>