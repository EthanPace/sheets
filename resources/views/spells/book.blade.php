<x-layout>
    <x-header>
        <x-slot:heading>Spells</x-slot:heading>
        <x-slot:subheading>Now with 75% less screenspace!</x-slot:subheading>
    </x-header>
    <main class="p-4 flex gap-4 justify-between">
        <section class="w-2/5">
            <div class="flex flex-col gap-4 bg-white rounded-xl border border-2 border-gray-300 p-4 min-h-0 overflow-y-scroll">
                @php
                    $index = request()->query('index') ?: 0;
                    $open = request()->query('open') ?: $spells[0]->id;

                    if ($index - 10 < 0) {
                        $index_minus = 0;
                    } else {
                        $index_minus = $index - 9;
                    }

                    if ($index + 21 > count($spells)) {
                        $index_plus = count($spells) - 11;
                    } else {
                        $index_plus = $index + 9;
                    }
                @endphp

                <a class="flex justify-center py-3 border-2 border-gray-500 text-gray-800 rounded-xl" href="?index={{ $index_minus }}&open={{ $open }}">Ʌ PREV PAGE Ʌ</a>

                @for ($i = $index; $i <= ($index + 9); $i++)
                    <x-card.spell :spell="$spells[$i]" link="?index={{ $index }}&open={{ $spells[$i]->id }}"></x-card.spell>
                @endfor

                <a class="flex justify-center py-3 border-2 border-gray-500 text-gray-800 rounded-xl" href="?index={{ $index_plus }}&open={{ $open }}">V NEXT PAGE V</a>
            </div>
        </section>

        <section class="flex flex-col justify-between w-full">
            <div class="flex flex-col gap-4 bg-white rounded-xl border border-2 border-gray-300 p-4 max-h-[42rem] overflow-y-scroll">
                @open($open > 0)
                    <x-detail.spell :spell="$spells->where('id', $open)->first()"></x-detail.spell>
                @endopen
            </div>

            @if ($user->character->archetype->spellslots)
                <div class="flex flex-row justify-between text-center rounded-xl border border-2 border-gray-300 p-4 w-full">
                    @php
                        $index = 0;
                        $slots = $user->character->slots_per_level();
                    @endphp
                    @foreach ($user->character->archetype->spellslots->levels() as $level)
                        <x-counter.spell-slot :level="$index + 1" :label="$level" :charges="$slots[$index]" theme="blue"/>

                        @php
                            $index++;
                        @endphp
                    @endforeach
                </div>
            @endif
        </section>
    </main>
</x-layout>