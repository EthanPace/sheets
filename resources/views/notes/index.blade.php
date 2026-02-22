<x-layout>
    <x-header>
        <x-slot:heading>Notes</x-slot:heading>
        <x-slot:subheading>Write something.</x-slot:subheading>
    </x-header>

    <main class="overflow-y-scroll overflow-x-hidden w-full h-screen">
        <div class="flex flex-wrap overflow-none gap-4 p-4">
            @foreach ($notes as $note)
                <x-note.post-it :note="$note"/>
            @endforeach
            <a href="/notes/create" class="bg-green-100 hover:bg-green-50 border-2 border-green-300 rounded-xl w-[6rem] h-[6rem] sm:w-[14rem] sm:h-[14rem] grid justify-center text-green-300">
                <div class="mt-1 sm:mt-[3rem] pt-2">
                    @desktop
                        <x-icon.plus size="24"/>
                    @enddesktop

                    @mobile
                        <x-icon.plus size="16"/>
                    @endmobile
                </div>
            </a>
        </div>
    </main>
</x-layout>