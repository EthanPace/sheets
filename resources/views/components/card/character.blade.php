<x-card.card :href="$link">
    <x-slot:header>
        <div>
                <h3 class="text-md sm:text-lg font-bold">{{ $character->name }}</h3>
                <p class="text-xs sm:text-sm text-gray-500">{{ $character->species->name }} {{ $character->archetype->name }}, Level {{ $character->level }}</p>
        </div>
        <div>
            @player
                @character($character->id)
                    <h1 class="rounded-full bg-indigo-200 py-2 px-2 sm:px-0 sm:w-[7rem] text-xs font-bold text-indigo-700 text-center">ACTIVE</h1>
                @endcharacter
            @endplayer
            @runner
                <h1 class="rounded-full bg-indigo-200 py-1 sm:py-2 px-2 sm:px-0 sm:w-[7rem] text-xs font-bold text-indigo-500 text-center">{{ strtoupper($character->user->username) }}</h1>
            @endrunner
        </div>
    </x-slot:header>
    @desktop
    <div class="flex gap-4 justify-between">
        <div class="flex gap-2">
            @foreach ($character->statistics as $stat)
                <x-stat height="short">
                    <x-slot:mod>{{ $stat->mod() }}</x-slot:mod>
                    <x-slot:stat>{{ $stat->score }}</x-slot:stat>
                    {{ $stat->short }}
                </x-stat>
            @endforeach
        </div>

        <div class="flex gap-2">
            <x-stat height="short">
                <x-slot:mod>{{ $character->current_hit_points }}</x-slot:mod>
                <x-slot:score></x-slot:score>
                HP
            </x-stat>
            <x-stat height="short">
                <x-slot:mod>{{ $character->armor_class }}</x-slot:mod>
                <x-slot:score></x-slot:score>
                AC
            </x-stat>
            <x-stat height="short">
                <x-slot:mod>{{ $character->initiative }}</x-slot:mod>
                <x-slot:score></x-slot:score>
                INIT
            </x-stat>
        </div>
    </div>
    @enddesktop
</x-card.card>