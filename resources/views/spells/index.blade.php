<x-layout>
    <x-header>
        <x-slot:heading>Spells</x-slot:heading>
        <x-slot:subheading></x-slot:subheading>
    </x-header>
    <main class="p-4 overflow-x-hidden overflow-y-scroll">
        <div class="grid lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-6 gap-4">
            @foreach ($spells as $spell)
                    @php
                        $spellbg = "white";
                        switch ($spell->school) {
                            case "Abjuration":
                                $spellbg = "blue";
                                break;
                            case "Conjuration":
                                $spellbg = "yellow";
                                break;
                            case "Divination":
                                $spellbg = "gray";
                                break;
                            case "Enchantment":
                                $spellbg = "pink";
                                break;
                            case "Evocation":
                                $spellbg = "red";
                                break;
                            case "Illusion":
                                $spellbg = "indigo";
                                break;
                            case "Necromancy":
                                $spellbg = "gray";
                                break;
                            case "Transmutation":
                                $spellbg = "orange";
                                break;
                        }
                    @endphp
                <a class="rounded-xl bg-white border border-{{ $spellbg }}-500 px-4 py-2 flex justify-between" href="/spells/{{ $spell->id }}">
                    <h1 class="text-lg">{{ $spell->name }}</h1>
                    <h2 class="text-lg bg-gray-100 w-[2rem] h-[2rem] border border-gray-300 rounded-lg text-center">{{ $spell->level }}</h2>
                </a>
            @endforeach
        </div>
    </main>
</x-layout>