<x-layout>
    <x-header>
        <x-slot:heading>Items</x-slot:heading>
        <x-slot:subheading>Shop! or don't!</x-slot:subheading>
    </x-header>
    <main class="p-4">
        @foreach ($weapons as $weapon)
        @endforeach
        @foreach ($armors as $armor)
        @endforeach
        @foreach ($items as $item)
        @endforeach
        @foreach ($tools as $tool)
        @endforeach
    </main>
</x-layout>