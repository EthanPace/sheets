<x-layout>
    <x-header>
        <x-slot:heading>Items</x-slot:heading>
        <x-slot:subheading>Shop! or don't!</x-slot:subheading>
    </x-header>
    <main class="p-4 overflow-scroll">
        @foreach ($weapons as $weapon)
            <h1>{{ $weapon->name }}</h1>
        @endforeach
        @foreach ($armors as $armor)
            <h1>{{ $armor->name }}</h1>
        @endforeach
        @foreach ($items as $item)
            <h1>{{ $item->name }}</h1>
        @endforeach
        @foreach ($tools as $tool)
            <h1>{{ $tool->name }}</h1>
        @endforeach
    </main>
</x-layout>