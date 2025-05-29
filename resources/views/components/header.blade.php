<header class="bg-white border-b border-gray-200 p-4 h-16 sm:h-20 flex justify-between items-center">
    <div>
        <h2 class="text-lg font-semibold">{{ $heading }}</h2>
        <p class="text-sm text-gray-500 invisible sm:visible w-0 h-0 sm:w-fit sm:h-fit">{{ $subheading }}</p>
    </div>

    {{ $slot }}
</header>