@props(['action', 'theme' => "indigo", 'field', 'value'])
<form method="POST" action="{{ $action }}">
    @csrf
    <input type="hidden" name="{{ $field }}" value="{{ $value }}">
    <button class="text-xl py-2 px-4 border-2 border-{{ $theme }}-500 rounded-lg bg-{{ $theme }}-200 hover:bg-{{ $theme }}-100 trasition-themes duration-300 text-{{ $theme }}-700" type="submit">{{ $slot }}</button>
</form>
