<x-layout>
    <x-header>
        <x-slot:heading>Character Sheet</x-slot:heading>
        <x-slot:subheading>What's in a name?</x-slot:subheading>
        @if ($character->user == $user)
            @if (!$user->character || $user->character->id != $character->id)
                <x-post-button action="/characters/{{ $character->id }}/use">SELECT</x-post-button>
            @else
                <x-post-button action="/characters/none">DESELECT</x-post-button>
            @endif
        @endif
    </x-header>

    <main class="p-6 flex justify-center overflow-y-auto overflow-x-hidden h-screen flex-1">

        <!-- SIDE BAR -->
        <div class="w-[7rem] h-[7rem] rounded-lg grid grid-cols-1 gap-y-4 mr-4">
            @foreach ($character->statistics as $statistic)
                <x-stat>
                    {{ $statistic->short() }}
                    <x-slot:stat>{{ $statistic->score }}</x-slot:stat>
                    <x-slot:mod>{{ $statistic->mod() }}</x-slot:mod>
                </x-stat>
            @endforeach
        </div>

        <!-- FIRST ROW -->
        <div class="w-[90%]">
            <div class="flex gap-4 justify-between mb-4">
                <x-attribute-box>
                    <x-slot:label>NAME</x-slot:label>
                    {{ $character->name }}
                </x-attribute-box>
                <x-attribute-box>
                    <x-slot:label>CLASS & LEVEL</x-slot:label>
                    {{ $character->archetype->name }} {{ $character->level }}
                </x-attribute-box>
                <x-attribute-box>
                    <x-slot:label>SPECIES</x-slot:label>
                    {{ $character->species->name }}
                </x-attribute-box>
                <x-attribute-box>
                    <x-slot:label>BACKGROUND</x-slot:label>
                    {{ $character->background->name }}
                </x-attribute-box>
            </div>

            <!-- SECOND ROW -->
            <div class="flex gap-4 justify-between mb-4">
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

            <!-- LAST ROW -->
            <div class="flex gap-4">

                <!-- LEFT -->
                <div class="w-1/4 min-w-[250px]">
                    <!-- TOP LEFT -->
                    <div class="bg-white p-4 rounded-xl border border-gray-400 mb-4">
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

                    <!-- BOTTOM LEFT -->
                    <div class="bg-white p-4 rounded-xl border border-gray-400 mb-4">
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
                </div>

                <!-- RIGHT -->
                <div class="w-3/4 min-w-[250px]">
                    <!-- TOP -->
                    <div class="flex w-full gap-4 mb-4">

                        <!-- TOP MIDDLE -->
                        <div class="w-[300px] bg-white rounded-xl border border-gray-400 p-4">
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

                        <!-- TOP LEFT -->
                        <div class="w-full bg-white rounded-xl border border-gray-400 p-4">
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
                    </div>

                    <!-- OTHER -->
                    @if ($character->archetype->has_charges)
                        <div class="flex gap-x-4 justify-between mb-4">
                            @foreach ($character->archetype->charges as $charges)
                                <x-charges type="{{ $charges->name }}">
                                    {{ $charges->at_level($character->level) }}
                                </x-charges>
                            @endforeach
                        </div>
                    @endif

                    <div class="grid grid-cols-1 gap-y-4">
                        @if ($character->archetype->spellcaster != "NONE")
                            <x-feature-card type="SPELLSLOTS">
                                <div class="grid grid-cols-{{ count($character->archetype->spellslots->levels()) }} justify-between text-center mt-4">
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
                            </x-feature-card>
                        @endif
                        
                        <div class="w-full border-b border-gray-300"></div>

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
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>