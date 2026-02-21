@props(['option_name', 'list_name', 'enabled' => true])
<li>
    @if ($enabled)
        <input type="checkbox" id="{{ $option_name }}" name="{{ $list_name }}" value="{{ $option_name }}" class="hidden peer"/>
        <label for="{{ $option_name }}" 
            class="inline-flex items-center text-center justify-between px-4 py-1 bg-white 
                border-2 border-gray-300 rounded-lg cursor-pointer w-full
                peer-checked:border-indigo-600 
                peer-checked:text-indigo-600
                peer-checked:bg-indigo-100
                hover:text-gray-600 hover:bg-gray-100"
            >                          
            <div class="block">
                <div class="w-full text-md font-bold">{{ $title }}</div>
                <div class="w-full">{{ $slot }}</div>
            </div>
        </label>
    @else
        <input disabled type="checkbox" id="{{ $option_name }}" name="{{ $list_name }}" value="{{ $option_name }}" class="hidden peer" />
        <label for="{{ $option_name }}"
            class="inline-flex items-center text-center justify-between px-4 py-1 bg-gray-50 
                text-gray-300 border-2 border-gray-200 rounded-lg w-full"
            >
            <div class="block">
                <div class="w-full text-md font-bold">{{ $title }}</div>
                <div class="w-full">{{ $slot }}</div>
            </div>
        </label>
    @endif

</li>