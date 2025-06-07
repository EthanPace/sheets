<div class="sm:ml-6 space-y-2">
    <x-nav.link page="characters/{{ Auth::user()->character->id }}">
        <x-slot:icon><x-icon.character/></x-slot:icon>
        Sheet
    </x-nav.link>

    @hasitems
        <x-nav.link page="inventory">
            <x-slot:icon><x-icon.shield/></x-slot:icon>
            Inventory
        </x-nav.link>
    @endish

    @caster
        <x-nav.link page="spellbook">
            <x-slot:icon><x-icon.book/></x-slot:icon>
            Spellbook
        </x-nav.link>
    @endish

    @initiative
        <x-nav.link page="combat">
            <x-slot:icon><x-icon.sword/></x-slot:icon>
            Combat
        </x-nav.link>
    @endish
</div>