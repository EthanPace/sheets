@props(['scope' => 'form'])
@success($scope)
    <p class="bg-green-200 border border-green-500 py-4 px-8 rounded-2xl text-xs text-green-500 font-semibold m-2">{{ strtoupper(session('success')) }}</p>
@else
    <p class="bg-transparent border border-transparent py-4 px-8 rounded-2xl text-xs text-transparent font-semibold m-2 select-none">THIS IS A HIDDEN SUCCESS MESSAGE</p>
@endsuccess