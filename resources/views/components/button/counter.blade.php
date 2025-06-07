@props(['action', 'theme' => "indigo"])

<form method="POST" action="{{ $action }}">
    @csrf
    <button 
        class="px-4 border-2 border-{{ $theme }}-400
            rounded-full bg-{{ $theme }}-100 hover:bg-{{ $theme }}-50 
            trasition-colors duration-300 text-{{ $theme }}-500"
        type="submit"
    >{{ $slot }}</button>
</form>
