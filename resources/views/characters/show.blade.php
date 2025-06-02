<x-layout>
    <x-header>
        <x-slot:heading>Character Sheet</x-slot:heading>
        <x-slot:subheading>What's in a name?</x-slot:subheading>
        @if ($character->user == $user || $user->role == "runner")
            @if (!$user->character || $user->character->id != $character->id)
                <x-post-button action="/characters/{{ $character->id }}/use">SELECT</x-post-button>
            @else
                <x-post-button action="/characters/none">DESELECT</x-post-button>
            @endif
        @endif
    </x-header>

    @desktop
        <x-sheet.desktop :character="$character" :user="$user" :actions="$actions"/>
    @enddesktop

    @mobile
        <x-sheet.mobile :character="$character" :user="$user" :actions="$actions"/>
    @endmobile
</x-layout>