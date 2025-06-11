@props(['character'])
<div class="bg-white rounded-xl py-4 px-4 border border-2 border-gray-300 flex flex-col gap-4 w-full">
    <div class="flex items-center justify-between">
        <x-button.simple-form theme="red" action="/combat/damage/{{ $character->id }}" field="damage" value="1">-</x-button.simple-form>
            <div class="flex items-center justify-center w-full">
                <h1 class="text-2xl font-bold mr-2 text-red-700">{{ $character->current_hit_points }}</h1>
                <h1 class="text-2xl font-bold text-gray-500"> / {{ $character->max_hit_points }} HP</h1>
            </div>
        <x-button.simple-form theme="red" action="/combat/heal/{{ $character->id }}" field="health" value="1">+</x-button.simple-form>
    </div>
</div>

<div class="bg-white rounded-xl py-4 px-4 border border-2 border-gray-300 flex flex-col gap-4 w-full">
    <form class="flex items-center justify-between gap-4" method="POST" action="/combat/health/{{ $character->id }}">
        @csrf
        <div class="w-full"><x-form.input field="health" title="health" bdr="border-2" bdr_color="gray-500"/></div>
        <x-post-button :form_included="false" theme="red">SET</x-get-button>
    </form>
</div>