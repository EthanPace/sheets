@props(['option_name', 'list_name'])
<li>
    <input type="radio" id="{{ $option_name }}" name="{{ $list_name }}" value="{{ $option_name }}" class="hidden peer" required />
    <label for="{{ $option_name }}" 
        class="inline-flex items-center justify-between w-full p-4 bg-white 
            border-2 border-gray-200 rounded-lg cursor-pointer 
            peer-checked:border-indigo-600 
            peer-checked:text-indigo-600
            peer-checked:bg-indigo-100
            hover:text-gray-600 hover:bg-gray-100"
        >                          
        <div class="block">
            <div class="w-full text-lg font-semibold">{{ $title }}</div>
            <div class="w-full">{{ $slot }}</div>
        </div>
    </label>
</li>