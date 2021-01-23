@props([
    'value' => '',
    'type' => 'text',
    'rows' => '3',
    'hasError' => false
])

<div class="mt-1 relative">
    <textarea
        {{ $attributes->merge([ 'class' =>
            ($hasError ? 'border-red-300 text-red-900 placeholder-red-300 focus:ring-red-300 ' : 'focus:ring-primary-200 ') .
            'form-textarea bg-beige border border-gray-300 appearance-none block w-full px-3 py-2 rounded-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black transition duration-150 ease-in-out text-sm sm:leading-5'
        ]) }}
        type="{{ $type }}"
        rows="{{ $rows }}"
    >{{ $value }}</textarea>
</div>
