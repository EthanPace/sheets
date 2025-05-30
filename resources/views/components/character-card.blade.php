<a {{ $attributes }} class="bg-white h-24 sm:h-fit w-full p-6 border border-2 border-gray-300 rounded-3xl shadow-md hover:shadow-lg transition-shadow duration-300" draggable="false">
    <div class="flex justify-between items-center mb-4">
        <div>
            <h3 class="text-md sm:text-lg font-bold">{{ $character->name }}</h3>
            <p class="text-xs sm:text-sm text-gray-500">{{ $character->species->name }} {{ $character->archetype->name }}, Level {{ $character->level }}</p>
        </div>
        <div>
            @if (Auth::user()->role == "player")
                @if (Auth::user()->character != null)
                    @if (Auth::user()->character->id == $character->id)
                        <h1 class="rounded-full bg-indigo-200 py-2 px-2 sm:px-0 sm:w-[7rem] text-xs font-bold text-indigo-700 text-center">ACTIVE</h1>
                    @endif
                @endif
            @else
                <h1 class="rounded-full bg-indigo-200 py-1 sm:py-2 px-2 sm:px-0 sm:w-[7rem] text-xs font-bold text-indigo-500 text-center">{{ strtoupper($character->user->username) }}</h1>
            @endif
        </div>
    </div>
    @desktop
        <div class="flex gap-4 justify-between">
            <div class="flex gap-2">
                @foreach ($character->statistics as $stat)
                    <x-stat height="short">
                        <x-slot:mod>{{ $stat->mod() }}</x-slot:mod>
                        <x-slot:stat>{{ $stat->score }}</x-slot:stat>
                        {{ $stat->short() }}
                    </x-stat>
                @endforeach
            </div>
                <div class="flex gap-2">
                <div class="w-[5rem] h-full bg-white border border-gray-300 rounded-lg px-4 pb-3 pt-1 text-center">
                    <h1 class="font-bold">HP</h1>
                    <h2 class="bg-white rounded-2xl py-1 text-sm w-full mx-auto text-center justify-center border border-gray-200">{{ $character->current_hit_points }}</h2>
                </div>
                <div class="w-[5rem] h-full bg-white border border-gray-300 rounded-lg px-4 pb-3 pt-1 text-center">
                    <h1 class="font-bold">AC</h1>
                    <h2 class="bg-white rounded-2xl py-1 text-sm w-full mx-auto text-center justify-center border border-gray-200">{{ $character->armor_class }}</h2>
                </div>
                <div class="w-[5rem] h-full bg-white border border-gray-300 rounded-lg px-4 pb-3 pt-1 text-center">
                    <h1 class="font-bold">INIT</h1>
                    <h2 class="bg-white rounded-2xl py-1 text-sm w-full mx-auto text-center justify-center border border-gray-200">{{ $character->initiative }}</h2>
                </div>
            </div>
        </div>
    @enddesktop
</a>