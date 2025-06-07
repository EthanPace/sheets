@props(['action', 'form_included' => true, 'delete' => false, 'theme' => "indigo", 'padding' => 8])
@if ($form_included)
<form method="POST" action="{{ $action }}">
    @csrf
@endif
    
    <button class="py-2 px-{{ $padding }} border-2 border-{{ $theme }}-500 rounded-lg bg-{{ $theme }}-200 hover:bg-{{ $theme }}-100 trasition-colors duration-300 text-{{ $theme }}-700" type="submit">{{ $slot }}</button>

@if ($delete)
    <input type="hidden" name="_method" value="DELETE">
@endif

@if ($form_included)
</form>
@endif
