@include('components.layout.__header')


<x-layout.__layout>


    <x-slot name="admin">
        <div>
            <x-SVG.__svg></x-SVG.__svg>
        </div>
    </x-slot>

    <table class="border-2 border-collapse border-gray-500 shadow-lg w-full">
        <tr class="text-left">
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>phonenumber</th>
            <th>Checked in</th>
        </tr>
        @foreach ($user as $users)
            <tr>
                <td class="w-24">{{ ucwords($users->firstname) }}</td>
                <td class="w-24">{{ ucwords($users->lastname) }}</td>
                <td class="w-64">{{ $users->email }}</td>
                <td class="w-24">{{ $users->phonenumber }}</td>
                <td class="w-24">{{ $users->checkedin }}</td>
            </tr>
        @endforeach
    </table>
    <x-slot name="extra"></x-slot>


</x-layout.__layout>


<style>
    tr:nth-child(even) {
        background-color: #dddddd;
    }

    tr:nth-child(odd) {
        background-color: #F3F4F6;
    }

</style>
