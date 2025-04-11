<div class="p-6">
    <aside class="grid grid-cols-1 bg-indigo-100 max-w-40 rounded-lg gap-4 p-4">
        <x-stat>
            STR
            <x-slot:stat>{{ $character->strength }}</x-slot:stat>
            <x-slot:mod>{{ $strength_mod }}</x-slot:mod>
        </x-stat>
        <x-stat>
            DEX
            <x-slot:stat>{{ $character->dexterity }}</x-slot:stat>
            <x-slot:mod>{{ $dexterity_mod }}</x-slot:mod>
        </x-stat>
        <x-stat>
            CON
            <x-slot:stat>{{ $character->constitution }}</x-slot:stat>
            <x-slot:mod>{{ $constitution_mod }}</x-slot:mod>
        </x-stat>
        <x-stat>
            WIS
            <x-slot:stat>{{ $character->wisdom }}</x-slot:stat>
            <x-slot:mod>{{ $wisdom_mod }}</x-slot:mod>
        </x-stat>
        <x-stat>
            INT
            <x-slot:stat>{{ $character->intelligence }}</x-slot:stat>
            <x-slot:mod>{{ $intelligence_mod }}</x-slot:mod>
        </x-stat>
        <x-stat>
            CHA
            <x-slot:stat>{{ $character->charisma }}</x-slot:stat>
            <x-slot:mod>{{ $charisma_mod }}</x-slot:mod>
        </x-stat>
    </aside>
</div>