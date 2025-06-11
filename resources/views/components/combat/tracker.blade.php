@props(['round'])
@if ($round->isNotEmpty())
    <div class="p-4 bg-white border border-2 border-gray-300 rounded-xl flex w-full flex-col gap-y-8">
        @foreach ($round as $turn)
            <div class="flex gap-4 justify-between w-full items-center">
                <h1 class="sm:text-2xl font-bold text-gray-500 border-r-2 border-l-2 border-gray-300 px-6 py-2 rounded-lg w-3/4 w-full sm:w-[16rem]">{{ $turn->name }}</h1>
                <h1 class="sm:text-2xl font-bold text-green-700 border-r-2 border-l-2 border-gray-300 px-6 py-2 rounded-lg text-center sm:w-[8rem]">{{ $turn->turn_order }}</h1>
                @runner
                    @desktop
                        <h1 class="sm:text-2xl font-bold text-red-600 border-r-2 border-l-2 border-gray-300 px-6 py-2 rounded-lg text-center sm:w-[8rem]">{{ $turn->current_hit_points }}</h1>
                        @if (class_basename($turn) == "Character")
                            <x-post-button action="/initiative/kill/{{ $turn->id }}">KILL</x-post-button>
                        @else
                            <x-post-button action="/initiative/{{ $turn->id }}" :delete="true">KILL</x-post-button>
                        @endif
                    @enddesktop
                @endrunner
            </div>
        @endforeach
    </div>
@endif