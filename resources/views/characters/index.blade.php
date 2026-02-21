<x-layout>
    <x-header>
        <x-slot:heading>Character Sheets</x-slot:heading>
        <x-slot:subheading>Manage your characters</x-slot:subheading>

        <x-create-button href="/builder/character">New</x-create-button>
    </x-header>

    <div class="flex flex-col p-4 gap-4 w-full overflow-x-hidden h-screen flex-1 overflow-y-auto">
        @if($drafts->isNotEmpty())
            <div class="grid grid-cols-1 gap-4 sm:gap-6 p-4 w-full bg-white border-2 border-gray-300 rounded-xl">
                <h2 class="text-gray-400">DRAFTS</h2>
                <div class="flex flex-wrap gap-4">
                    @foreach ($drafts as $draft)
                        <x-card.draft link="/builder/character/{{ $draft->id }}" :character="$draft"/>
                    @endforeach
                </div>
            </div>
        @endif

        <div class="grid grid-cols-1 gap-4 sm:gap-6 w-full">
            @foreach ($characters as $character)
                <x-card.character link="/characters/{{ $character->id }}" :character="$character"/>
            @endforeach
        </div>
    </div>
</x-layout>