<x-layout>
    <x-header>
        <x-slot:heading>Wrong Way!</x-slot:heading>
        <x-slot:subheading>You're not supposed to be here!</x-slot:subheading>
    </x-header>

    <div class="mx-auto mt-[20%] text-center">
        <h1 class="text-3xl mb-16">Looks like you hit a dead end...</h1>
        <a href="/" class="bg-white border border-2 border-gray-300 px-5 py-2 rounded-full text-xl">
            Go Home?
        </a>
    </div>
</x-layout>