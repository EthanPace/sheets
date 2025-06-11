<x-layout>
    <x-header>
        <x-slot:heading>Combat</x-slot:heading>
        <x-slot:subheading>Hit your friends!</x-slot:subheading>
    </x-header>
    <main class="p-4 overflow-y-scroll w-full flex flex-wrap gap-4 justify-between">
        @desktop
            <x-combat.desktop :round="$round" :user="$user"/>
        @enddesktop

        @mobile
            <x-combat.mobile :round="$round" :user="$user"/>
        @endmobile
    </main>
</x-layout>