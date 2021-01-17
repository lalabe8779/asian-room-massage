@props(['id', 'label' => false])

@if(!$label)
    <input
        {{$attributes->merge(['class' => 'form-checkbox rounded-md bg-gray-200 h-5 w-5 text-primary-600 transition duration-150 ease-in-out'])}}
        type="checkbox"
        id="{{$id}}"
    >
@else
    <div class="flex items-center">
        <input
            {{$attributes->merge(['class' => 'form-checkbox rounded-md bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-200 h-5 w-5 text-primary-600 transition duration-150 ease-in-out'])}}
            type="checkbox"
            id="{{$id}}"
        >
        <label for="{{$id}}" class="ml-2 block text-sm leading-5 text-gray-900">
            {{$label}}
        </label>
    </div>
@endif
