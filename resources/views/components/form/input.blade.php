@props([
    'value' => '',
    'type' => 'text',
    'hasError' => false,
    'leadingIcon' => false,
    'trailingIcon' => false,
    'placeholder' => false
])

<div class="mt-1 relative rounded-sm">
    @if ($leadingIcon)
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            {{ $leadingIcon }}
        </div>
    @endif

    <input
        {{ $attributes->merge([ 'class' =>
            ($hasError ? 'border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red ' : '') .
            ($leadingIcon ? 'pl-10 ' : '') .
            ($trailingIcon ? 'pr-10 ' : '') .
            'bg-beige border border-gray-300 appearance-none block w-full px-3 py-2 rounded-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black transition duration-150 ease-in-out text-sm sm:leading-5'
        ]) }}
        placeholder="{{ $placeholder }}"
        type="{{ $type }}"
        value="{{ $value }}"
    />

    @if($trailingIcon)
        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
            {{ $trailingIcon }}
        </div>
    @endif

</div>
