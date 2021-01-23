<div
        class="mt-1 relative rounded-md"
        x-data
        x-init="new Cleave('#{{ $id }}', { date: true, delimiter: '-', datePattern: ['Y', 'm', 'd'] })"
>
    <x-form.input :attributes="$attributes" type="date" placeholder="YYYY-MM-DD" value="{{$value}}"/>
</div>
