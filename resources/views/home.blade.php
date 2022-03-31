<!doctype html>

@include('components.layout.__header')

<x-layout.__layout>
    <x-slot name="admin">
        <div>
            <x-SVG.__svg></x-SVG.__svg>
        </div>
    </x-slot>

    <body>
    </body>

    <x-slot name="extra"></x-slot>
</x-layout.__layout>
