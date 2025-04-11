<x-layout>
    <!-- Top Header/Toolbar -->
    <x-header>
        <x-slot:heading>Character Sheets</x-slot:heading>
        <x-slot:subheading>Manage your characters</x-slot:subheading>

        <div class="flex items-center space-x-6">
            <x-search-button href="#search">Search</x-search-button>
            <x-create-button href="/characters/create">New Character</x-create-button>
        </div>
    </x-header>
    
    <!-- Content Area -->
    <div class="flex justify-between h-screen flex-1 overflow-auto">
        <div class="mx-6 mt-6 grid grid-cols-1 gap-6 w-full">
            @foreach ($characters as $character)
                <x-character-card href="/characters/{{ $character->id }}" :character="$character"/>
            @endforeach
        </div>
    </div>
</x-layout>