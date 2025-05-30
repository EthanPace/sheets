<x-layout>
    <x-header>
        <x-slot:heading>Inventory</x-slot:heading>
        <x-slot:subheading>These are yours!</x-slot:subheading>
    </x-header>
    <div class="p-4 overflow-y-scroll w-full">
        <div class="flex flex-wrap w-full gap-4 mx-auto">
            @foreach ($items as $item)
                <x-item-card :item="$item->equippable" type="{{ class_basename($item->equippable_type) }}"/>
            @endforeach
        </div>
    </div>
</x-layout>