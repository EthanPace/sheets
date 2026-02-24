@props(['padding' => '3', 'title' => null])
<button type="submit" class="w-full rounded-lg bg-white p-{{ $padding }} border-2 border-gray-300 text-gray-500">
    {{ $title ?? 'SUBMIT' }}
</button>