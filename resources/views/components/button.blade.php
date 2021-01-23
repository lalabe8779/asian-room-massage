@props([
'type' => 'button',
'color' => 'default',
'trailingIcon' => false,
'leadingIcon' => false
])

@php
    switch ($color) {
        case 'danger':
            $colors = 'bg-red-600 hover:bg-red-500 focus:ring-red active:bg-red-700';
            break;
        case 'secondary':
            $colors = 'text-gray-500 bg-gray-200 hover:bg-gray-300 focus:ring-gray-300 active:bg-gray-300';
            break;
        default:
            $colors = 'bg-black hover:bg-gray-800 active:bg-gray-800 focus:ring-black';
            break;
    }
@endphp

<button
        type="{{ $type }}"
        {{ $attributes->merge([ 'class' => $colors . ' uppercase text-xs font-bold tracking-widest flex justify-center px-4 py-2 border border-transparent leading-5 focus:outline-none focus:ring-2 focus:ring-offset-2 text-white transition ease-in-out duration-150 disabled:opacity-75 disabled:cursor-not-allowed' ]) }}
>
    @if($leadingIcon)
        <div class="-ml-1 mr-2 h-5 w-5">
            {{ $leadingIcon }}
        </div>
    @endif
    {{ $slot }}
    @if($trailingIcon)
        <div class="ml-2 -mr-1 h-5 w-5">
            {{ $trailingIcon }}
        </div>
    @endif
</button>
