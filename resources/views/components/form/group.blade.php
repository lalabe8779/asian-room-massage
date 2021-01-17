@props([
'error' => false,
'optional' => false
])

<div {{$attributes}}>
    @if(isset($optional) || isset($label))
        <div class="flex justify-between">
            @isset($label){{ $label }}@endisset
            @if($optional)
                <span class="text-sm leading-5 text-gray-500">Optional</span>
            @endif
        </div>
    @endif

    {{ $slot }}

    @if($error)
        <x-form.error>{{ $error }}</x-form.error>
    @endif
</div>
