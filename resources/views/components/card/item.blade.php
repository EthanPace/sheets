@props(['item','type','link'])
<x-card.card :href="$link">
    <x-slot:header>
        <h1 class="text-xl font-bold text-gray-500 ml-2">{{ $item->name }}</h1>
        <h1 class="text-xl text-gray-500 mr-2">{{ $type }}</h1>
    </x-slot:header>
    <div class="flex gap-x-4 justify-between py-2 px-4 rounded-full bg-gray-100 text-sm sm:text-base">
        @if ($type == "Weapon")
            <h2>{{ $item->damage_die_number }}d{{ $item->damage_die }}</h2>
            <h2>{{ $item->damage_type }}</h2>
        @elseif ($type == "Armor")
            <h2>{{ $item->armor_class }}</h2>
            <h2>{{ $item->category }}</h2>
        @elseif ($type == "Tools")
            <h2>{{ $item->category }}</h2>
            <h2>{{ $item->ability }}</h2>
        @elseif ($type == "Item")
            <h2>{{ $item->type }}</h2>
            <h2>{{ $item->properties }}</h2>
        @endif
        <h2>{{ $item->price() }}</h2>
    </div>
    @if ($type == "Weapon")
        <div class="flex gap-x-4 justify-between mt-4 py-2 px-4 rounded-full bg-gray-100 text-sm sm:text-base">
            <h2>{{ $item->properties }}</h2>
            <h2>{{ $item->mastery }}</h2>
        </div>
    @endif
</x-card.card>