@props(['level','label' => "LEVEL X", 'charges' => 0, 'theme' => "blue"])
<div class="flex flex-col gap-2 border-2 border-{{ $theme }}-300 px-6 py-2 rounded-xl bg-{{ $theme }}-50 justify-center text-center">
    <h1 class="text-sm font-bold text-{{ $theme }}-500 border-b border-{{ $theme }}-500 w-full">{{ $label }}</h1>
    <h1 class="text-md text-{{ $theme }}-600">{{ $charges }}</h1>
    <x-button.counter action="/cast/{{ $level }}" :theme="$theme"><x-icon.zap margin="0"/></x-button.counter>
</div>