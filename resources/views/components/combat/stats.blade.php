@props(['character'])
@selective
    <a class="bg-white rounded-xl py-4 px-4 border border-2 border-gray-300 flex w-full justify-between" href="/characters/{{ $character->id }}" draggable=false>
        <x-stat height="short">
            AC
            <x-slot:mod>{{ $character->armor_class }}</x-slot:mod>
        </x-stat>
        <x-stat height="short">
            INI
            <x-slot:mod>{{ $character->initiative }}</x-slot:mod>
        </x-stat>
        <x-stat height="short">
            SPD
            <x-slot:mod>{{ $character->species->speed }}</x-slot:mod>
        </x-stat>
    </a>

    @desktop
        <x-combat.health :character="$character"/>
    @enddesktop

    @if ($character->actions->isNotEmpty())
        <a class="px-4 pt-4 pb-2 bg-white rounded-xl border border-2 border-gray-300 w-full" href="/inventory">
            @foreach ($character->actions as $action)
                <div class="py-1 grid grid-cols-4 border-b last:border-none mb-1 text-center text-lg">
                    <h1>{{ $action->name }}</h1>
                    <h1>{{ $character->statistics->where('ability',$action->ability)->first()->modify($character->proficiency_bonus) }}</h1>
                    <h1>{{ $action->damage }} {{ $character->statistics->where('ability', $action->ability)->first()->mod() }}</h1>
                    <h1>{{ $action->type }}</h1>
                </div>
            @endforeach
        </a>
    @endif

    @if ($character->archetype->spellslots)
        <a class="grid grid-cols-1 p-4 bg-white rounded-xl border border-2 border-gray-300 w-full" href="/spellbook">
            <div class="grid grid-cols-{{ count($character->archetype->spellslots->levels()) }} justify-between text-center">
                @php
                    $index = 0;
                    $slots = $character->archetype->spellslots->slots_at_level($character->level);
                @endphp
                @foreach ($character->archetype->spellslots->levels() as $level)
                    <div class="w-[60px] m-auto">
                        <h1 class="text-sm text-gray-400 border-b border-gray-300">{{ $level }}</h1>
                        <h1 class="text-lg mt-1">{{ $slots[$index] }}</h1>
                    </div>

                    @php
                        $index++;
                    @endphp
                @endforeach
            </div>
        </a>
    @endif
@endselective