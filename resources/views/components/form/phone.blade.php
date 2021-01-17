<div
    class="mt-1 relative rounded-lg shadow-sm"
    x-data
    x-init="new Cleave('#{{ $id }}', { phone: true, phoneRegionCode: 'US' })"
>
    <x-form.input placeholder="555 987 6543" :attributes="$attributes" />
</div>

