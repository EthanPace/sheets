@props(['field', 'title', 'color' => "white", 'bdr_color' => "gray-300", 'text' => "gray-500", 'padding_y' => 3, 'width' => "full", 'bdr' => "border", 'type' => "text"])
<div>
    <label for="{{ $field }}" class="sr-only">{{ $title }}</label>
    <input 
        type="{{ $type }}"
        class="w-{{ $width }} h-full bg-{{ $color }} {{ $bdr }} border-{{ $bdr_color }} text-{{ $text }} focus:outline-{{ $bdr_color }} rounded-lg px-4 py-{{ $padding_y }} text-start" 
        id="{{ $field }}" 
        name="{{ $field }}" 
        placeholder="{{ $title }}" 
    >
</div>