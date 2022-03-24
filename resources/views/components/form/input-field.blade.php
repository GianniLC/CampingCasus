@props(['label', 'name', 'type' => 'text'])

<x-form.input-form-field>
    <x-form.label :name="$label"/>
    <input {{$attributes->merge(['class' => ' w-full h-10 rounded-xl focus:outline-none px-2 mt-1 col-span-4 col-start-3'])}}
           type="{{ $type }}"
           name="{{ $name }}"
           id="{{ $name }}"
           value="{{ old($name) }}"
           required>

    <x-form.error name="{{$name}}"/>
</x-form.input-form-field>
