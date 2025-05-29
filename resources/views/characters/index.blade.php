<x-layout>
    <x-header>
        <x-slot:heading>Character Sheets</x-slot:heading>
        <x-slot:subheading>Manage your characters</x-slot:subheading>

        <x-create-button href="/characters/create">New</x-create-button>
    </x-header>

    <div class="flex justify-between w-full overflow-x-none h-screen flex-1 overflow-y-auto">
        <div class="mx-4 sm:mx-6 mt-4 sm:mt-6 grid grid-cols-1 gap-4 sm:gap-6 w-full">
            @foreach ($characters as $character)
                <x-character-card href="/characters/{{ $character->id }}" :character="$character"/>
            @endforeach
        </div>
    </div>
</x-layout>