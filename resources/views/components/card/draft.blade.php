<x-card.card :href="$link" width="fit">
    <x-slot:header>
        <div class="flex items-center">
            <h3 class="text-md sm:text-lg font-bold">{{ $character->name }},</h3>
            <p class="text-md sm:text-lg text-gray-500 ml-2">{{ $character->species->name }} {{ $character->archetype->name }}</p>
        </div>
    </x-slot:header>
</x-card.card>