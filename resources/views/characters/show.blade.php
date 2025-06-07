<x-layout>
    <x-header>
        <x-slot:heading>Character Sheet</x-slot:heading>
        <x-slot:subheading>What's in a name?</x-slot:subheading>
        @mobile
            <div class="flex gap-x-4">
                @if ($character->user == $user || $user->role == "runner")
                    @if (!$user->character || $user->character->id != $character->id)
                        <x-post-button action="/characters/{{ $character->id }}/use">+</x-post-button>
                    @else
                        <x-post-button padding="4" action="/longrest">Z</x-post-button>
                        <x-post-button padding="4" action="/initiative/roll">⚄</x-post-button>
                        <x-post-button padding="4" action="/characters/none">-</x-post-button>
                    @endif
                @endif
            </div>
        @endmobile

        @desktop
            <div class="flex gap-x-4">
                @if ($character->user == $user || $user->role == "runner")
                    @if (!$user->character || $user->character->id != $character->id)
                        <x-post-button action="/characters/{{ $character->id }}/use">SELECT</x-post-button>
                    @else
                        <x-post-button action="/longrest">LONG REST</x-post-button>
                        <x-post-button action="/initiative/roll">INITIATIVE</x-post-button>
                        <x-post-button action="/characters/none">DESELECT</x-post-button>
                    @endif
                @endif
            </div>
        @enddesktop
    </x-header>

    @desktop
        <x-sheet.desktop :character="$character" :user="$user" :actions="$actions"/>
    @enddesktop

    @mobile
        <x-sheet.mobile :character="$character" :user="$user" :actions="$actions"/>
    @endmobile
</x-layout>