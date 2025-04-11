@props(['field', 'title', 'color' => "white", 'border' => "gray-300", 'text' => "gray-500", 'height' => "[30rem]"])
<div>
    <label for="{{ $field }}" class="sr-only">{{ $title }}</label>
    <textarea 
        class="w-full bg-{{ $color }} border border-{{ $border }} text-{{ $text }} focus:outline-gray-500 h-{{ $height }} rounded-lg px-4 py-3 text-start" 
        id="{{ $field }}" 
        name="{{ $field }}" 
        placeholder="{{ $title }}" 
    ></textarea>
</div>