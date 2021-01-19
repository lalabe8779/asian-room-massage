<div
        class="mt-1 relative rounded-md shadow-sm"
        x-data
        x-init="new Cleave('#{{ $id }}', { time: true, timePattern: ['h', 'm'] })"
>
    <x-form.input :attributes="$attributes" type="time" placeholder="HH:MM" value="{{$value}}" />
</div>
