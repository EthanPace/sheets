<x-layout>
    <x-header>
        <x-slot:heading>{{ $spell->name }}</x-slot:heading>
        <x-slot:subheading>Level {{ $spell->level }}</x-slot:subheading>
    </x-header>

    <main class="p-4 overflow-x-hidden overflow-y-scroll items-center">
        <div class="flex gap-4 justify-between mt-2">
            <!-- LEFT -->
            <div class="flex flex-col gap-4 w-3/4">
                <div class="p-4 bg-white rounded-lg border border-gray-300 flex h-fit flex-col justify-between">
                    <div>
                        <h1 class="text-lg font-bold">{{ $spell->name }}</h1>
                        <p class="text-wrap whitespace-pre-wrap mt-2">{{ $spell->description }}</p>
                    </div>
                </div>
                
                @if ($spell->higher_levels)
                    <div class="p-4 bg-white rounded-lg border border-gray-300 flex h-fit flex-col justify-between">
                        <div>
                            <h1 class="text-lg font-bold">Higher Levels</h1>
                            <p class="text-wrap whitespace-pre-wrap mt-2">{{ $spell->higher_levels }}</p>
                        </div>
                    </div>
                @endif

                @if ($spell->material)
                <div class="p-4 bg-white rounded-lg border border-gray-300 flex h-fit flex-col justify-between">
                    <div>
                        <h1 class="text-lg font-bold">Materials</h1>
                        <p class="text-wrap whitespace-pre-wrap mt-2">{{ $spell->material }}</p>
                    </div>
                </div>
                @endif
            </div>
            <!-- RIGHT -->
            <div class="w-1/4 flex flex-col gap-4">
                <div class="flex flex-col gap-2 rounded-xl p-4 border border-gray-300 bg-white h-fit">
                    <div class="flex gap-2 justify-between">
                        <h2 class="font-bold">Level</h2>
                        <p>{{ $spell->level }}</p>
                    </div>
                </div>

                @if ($spell->school)
                    <div class="flex flex-col gap-2 rounded-xl p-4 border border-gray-300 bg-white h-fit">
                        <div class="flex gap-2 justify-between">
                            <h2 class="font-bold">School</h2>
                            <p class="text-wrap whitespace-pre-wrap">{{ $spell->school }}</p>
                        </div>
                    </div>
                @endif

                <div class="flex flex-col gap-2 rounded-xl p-4 border border-gray-300 bg-white h-fit">
                    <div class="flex gap-2 justify-between">
                        @php
                            $s = [];
                            if ($spell->verbal) {array_push($s, "V");}
                            if ($spell->somatic) {array_push($s, "S");}
                            if ($spell->material) {array_push($s, "M");}
                            $s = implode(", ", $s);
                        @endphp
                        @if ($s != "")
                            <h2 class="font-bold">Components</h2>
                            <p>{{ $s }}</p>
                        @endif
                    </div>
                    <div class="flex gap-2 justify-between">
                        <h2 class="font-bold">Range</h2>
                        <p class="text-wrap whitespace-pre-wrap">{{ $spell->range }}</p>
                    </div>
                    <div class="flex gap-2 justify-between">
                        <h2 class="font-bold">Casting Time</h2>
                        <p class="text-wrap whitespace-pre-wrap">{{ $spell->casting_time }}</p>
                    </div>
                    <div class="flex gap-2 justify-between">
                        <h2 class="font-bold">Duration</h2>
                        <p class="text-wrap whitespace-pre-wrap">{{ $spell->duration }}</p>
                    </div>
                </div>

                @if ($spell->spell_lists)
                    @if (strlen($spell->spell_lists) > 8)
                        <div class="flex flex-col gap-2 rounded-xl p-4 border border-gray-300 bg-white h-fit">
                            <div>
                                <h2 class="font-bold mb-4">Spell Lists</h2>
                                <p class="text-wrap whitespace-pre-wrap">{{ $spell->spell_lists }}</p>
                            </div>
                        </div>
                    @else
                        <div class="flex flex-col gap-2 rounded-xl p-4 border border-gray-300 bg-white h-fit">
                            <div class="flex gap-2 justify-between">
                                <h2 class="font-bold">Spell Lists</h2>
                                <p>{{ $spell->spell_lists }}</p>
                            </div>
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </main>
</x-layout>