@props(['action' => null, 'method' => null, 'center' => true])
<form class="bg-white border-2 border-gray-300 rounded-xl px-4 py-6 {{ $center ? 'mx-auto' : '' }} sm:w-[30rem] flex flex-col gap-4" method="{{ $method }}" action="{{ $action }}">
    @csrf
    {{ $slot }}
</form>