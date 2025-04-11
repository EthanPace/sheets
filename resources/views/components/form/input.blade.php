@props(['field', 'title', 'color' => "white", 'border' => "gray-300", 'text' => "gray-500"])
<div>
    <label for="{{ $field }}" class="sr-only">{{ $title }}</label>
    <input 
        class="w-full bg-{{ $color }} border border-{{ $border }} text-{{ $text }} focus:outline-{{ $border }} rounded-lg px-4 py-3 text-start" 
        id="{{ $field }}" 
        name="{{ $field }}" 
        placeholder="{{ $title }}" 
    >
</div>