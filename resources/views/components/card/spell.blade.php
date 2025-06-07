@props(['spell', 'link'])
@php
    // set the border color by school
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
<a class="rounded-xl bg-white border border-2 border-{{ $spellbg }}-500 px-4 py-2 flex justify-between" href="{{ $link }}">
    <h1 class="text-lg">{{ $spell->name }}</h1>
    <h2 class="text-lg bg-gray-100 w-[2rem] h-[2rem] border border-gray-300 rounded-lg text-center">{{ $spell->level }}</h2>
</a>