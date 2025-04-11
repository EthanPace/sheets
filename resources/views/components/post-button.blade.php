@props(['action'])
<form method="POST" action="{{ $action }}">
    @csrf
    <button class="mr-6 py-2 px-8 border-2 border-indigo-500 rounded-lg bg-indigo-200 hover:bg-indigo-100 trasition-colors duration-300 text-indigo-700" type="submit">{{ $slot }}</button>
</form>