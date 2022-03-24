@props(['name'])

<label {{$attributes->merge(['class' => 'p-3 text-left'])}}
       for="{{ $name }}"
>
    {{--    {{ ucwords($name) }}--}}
    {{ $name }}
</label>
