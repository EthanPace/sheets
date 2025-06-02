@props(['character' => null, 'user' => Auth::user(), 'actions' => null])
<section class="flex flex-col gap-y-2 p-2 overflow-y-scroll h-screen w-full">
    <div class="flex flex-col gap-y-2 w-full">
        <x-attribute-box>
            <x-slot:label>NAME</x-slot:label>
            {{ $character->name }}
        </x-attribute-box>

        <x-attribute-box>
            <x-slot:label>CLASS & SPECIES</x-slot:label>
            {{ $character->species->name }} {{ $character->archetype->name }}, Level {{ $character->level }}
        </x-attribute-box>
    </div>

    <div class="p-4 bg-white rounded-xl border border-2 border-indigo-400 flex justify-between">
        <a class="p-2 text-xs bg-indigo-100 rounded-xl font-bold text-gray-600" href="?page=skills">SKILLS</a>
        <a class="p-2 text-xs bg-indigo-100 rounded-xl font-bold text-gray-600" href="?page=actions">ACTIONS</a>
        <a class="p-2 text-xs bg-indigo-100 rounded-xl font-bold text-gray-600" href="?page=charges">CHARGES</a>
        <a class="p-2 text-xs bg-indigo-100 rounded-xl font-bold text-gray-600" href="?page=features">FEATURES</a>
    </div>

    @subpageorbase('skills')
        <div class="p-4 bg-white rounded-xl border border-2 border-gray-400">
            <div class="grid grid-cols-3 gap-y-4 gap-x-6 mx-auto w-fit">
                @foreach ($character->statistics as $statistic)
                    <x-stat height="short">
                        {{ $statistic->short() }}
                        <x-slot:stat>{{ $statistic->score }}</x-slot:stat>
                        <x-slot:mod>{{ $statistic->mod() }}</x-slot:mod>
                    </x-stat>
                @endforeach
            </div>
        </div>

        <div class="bg-white p-4 rounded-xl border border-2 border-gray-400">
            <h2 class="text-xs text-gray-400 mb-2">SAVING THROWS</h2>
            @foreach ($character->statistics as $stat)
                <div class="flex gap-2 mb-1 border-b last:border-none border-gray-100">
                    @php
                        if ($stat->proficient) {
                            $truth = "true";
                            $num = $character->proficiency_bonus;
                        } else {
                            $truth = "false";
                            $num = 0;
                        }
                    @endphp
                    <x-boolean-box :truth="$truth"/>
                    <div class="w-[30px] text-center"><h1>{{ $stat->modify($num) }}</h1></div>
                    <h1>{{ $stat->ability }}</h1>
                </div>
            @endforeach
        </div>

        <div class="bg-white p-4 rounded-xl border border-2 border-gray-400">
            <h2 class="text-xs text-gray-400 mb-2">SKILLS</h2>
            @foreach ($character->skills as $skill)
                <div class="flex gap-2 mb-1 border-b last:border-none border-gray-100">
                    @php
                        if ($skill->proficient) {
                            $truth = "true";
                            $num = $character->proficiency_bonus;
                        } else {
                            $truth = "false";
                            $num = 0;
                        }
                    @endphp
                    <x-boolean-box :truth="$truth"/>
                    <div class="w-[30px] text-center"><h1>{{ $skill->modify($num) }}</h1></div>
                    <h1>{{ $skill->name }}</h1>
                </div>
            @endforeach
        </div>
    @endsubpage

    @subpage('actions')
        <div class="p-4 bg-white rounded-xl border border-2 border-gray-400">
            <h2 class="text-xs text-gray-400 mb-2">HEALTH</h2>
            <div class="text-center mb-4 grid grid-cols-2 justify-between mx-6 gap-x-6 gap-y-4">
                <div>
                    <h1 class="text-xl border-b">{{ $character->current_hit_points }}</h1>
                    <h2 class="text-gray-400">Current</h2>
                </div>
                <div>
                    <h1 class="text-xl border-b">{{ $character->max_hit_points }}</h1>
                    <h2 class="text-gray-400">Max</h2>
                </div>
                <div>
                    <h1 class="text-xl border-b">{{ $character->temporary_hit_points }}</h1>
                    <h2 class="text-gray-400">Temp</h2>
                </div>
                <div>
                    <h1 class="text-xl border-b">{{ $character->level . "d" . $character->archetype->hit_die }}</h1>
                    <h2 class="text-gray-400">Hit Dice</h2>
                </div>
            </div>
        </div>

        <div class="p-4 bg-white rounded-xl border border-2 border-gray-400">
            <h2 class="text-xs text-gray-400 mb-2">ATTACKS</h2>
            @foreach ($actions as $action)
                <div class="py-1 grid grid-cols-4 border-b last:border-none mb-1 text-center text-lg">
                    <h1>{{ $action->name }}</h1>
                    <h1>{{ $character->statistics->where('ability',$action->ability)->first()->modify($character->proficiency_bonus) }}</h1>
                    <h1>{{ $action->damage }} {{ $character->statistics->where('ability', $action->ability)->first()->mod() }}</h1>
                    <h1>{{ $action->type }}</h1>
                </div>
            @endforeach
        </div>
    @endsubpage

    @subpage('charges')
        <div class="p-4 bg-white rounded-xl border border-2 border-gray-400">
            <div class="grid grid-cols-2 gap-4 justify-between">
                <x-attribute-box type="bot">
                    <x-slot:label>INSPIRATION</x-slot:label>
                    @if ($character->inspiration)
                        <x-boolean-box truth="true"/>
                    @else
                        <x-boolean-box truth="false"/>
                    @endif
                </x-attribute-box>
                <x-attribute-box type="bot">
                    <x-slot:label>PROFICIENCY BONUS</x-slot:label>
                    {{ $character->proficiency_bonus }}
                </x-attribute-box>
                <x-attribute-box type="bot">
                    <x-slot:label>PASSIVE PERCEPTION</x-slot:label>
                    {{ 10 + $character->skills->where('name', 'PERCEPTION')->first()->modifier }}
                </x-attribute-box>
                <x-attribute-box type="bot">
                    <x-slot:label>ARMOR CLASS</x-slot:label>
                    {{ $character->armor_class }}
                </x-attribute-box>
                <x-attribute-box type="bot">
                    <x-slot:label>INITIATIVE</x-slot:label>
                    {{ $character->initiative }}
                </x-attribute-box>
                <x-attribute-box type="bot">
                    <x-slot:label>SPEED</x-slot:label>
                    {{ $character->species->speed }}
                </x-attribute-box>
            </div>
        </div>

        @if ($character->archetype->has_charges)
            @foreach ($character->archetype->charges as $charges)
                <x-charges mobile="true" type="{{ $charges->name }}">
                    {{ $charges->at_level($character->level) }}
                </x-charges>
            @endforeach
        @endif

        
        @if ($character->archetype->spellslots)
            <div class="grid grid-cols-1 p-4 bg-white rounded-xl border border-2 border-gray-400">
                <h2 class="text-xs text-gray-400 mb-2">SPELLSLOTS</h2>
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
            </div>
        @endif
    @endsubpage

    @subpage('features')
        @foreach ($character->species->features as $feature)
            <x-feature-card type="SPECIES TRAIT">
                <h1 class="text-xl font-bold text-indigo-600 mt-1 mb-2">{{ $feature->name }}</h1>
                <div class="grid grid-cols-1 gap-y-4">
                    @foreach (explode("\n", $feature->description) as $para)
                        <p>{{ $para }}</p>
                    @endforeach
                </div>
            </x-feature-card>
        @endforeach

        <div class="w-full border-b border-gray-300"></div>

        @foreach ($character->archetype->features as $feature)
            @if ($feature->level <= $character->level)
                <x-feature-card type="CLASS FEATURE">
                    <h1 class="text-xl font-bold text-indigo-600 mt-1 mb-2">{{ $feature->name }}</h1>
                    <div class="grid grid-cols-1 gap-y-4">
                        @foreach (explode("\n", $feature->description) as $para)
                            <p>{{ $para }}</p>
                        @endforeach
                    </div>
                </x-feature-card>
            @endif
        @endforeach
    @endsubpage
</section>