@props([ 'field', 'title', 'options' => null ])
<select name="{{ $field }}" id="{{ $field }}" class="border-2 border-gray-300 rounded-lg px-4 py-3 w-full text-gray-600">
    @foreach ($options as $option)
        <option value="{{ $option }}" class="text-gray-600">{{ strtoupper($option) }}</option>
    @endforeach
</select>