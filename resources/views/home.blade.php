<!doctype html>

@include('components.layout.__header')

<x-layout.__layout>
    <x-slot name="admin"></x-slot>

    <body>
    <p>Hallo</p>

    <a href="/users">Show users</a>
    <a href="/register">register</a>

    </body>

    <x-slot name="extra"></x-slot>
</x-layout.__layout>


