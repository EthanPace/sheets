@props(['option_name', 'list_name'])
<li>
    <input type="radio" id="{{ $option_name }}" name="{{ $list_name }}" value="{{ $option_name }}" class="hidden peer" required />
    <label for="{{ $option_name }}" 
        class="inline-flex items-center text-center justify-between px-4 py-2 bg-white 
            border-2 border-gray-200 rounded-lg cursor-pointer 
            peer-checked:border-indigo-600 
            peer-checked:text-indigo-600
            peer-checked:bg-indigo-100
            hover:text-gray-600 hover:bg-gray-100"
        >                          
        <div class="block">
            <div class="w-full text-lg font-bold">{{ $title }}</div>
            <div class="w-full">{{ $slot }}</div>
        </div>
    </label>
</li>