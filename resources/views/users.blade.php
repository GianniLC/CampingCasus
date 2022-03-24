{{--@foreach($user as $users)--}}
{{--    <p>{{$users->firstname}}</p>--}}
{{--    <p>{{$users->lastname}}</p>--}}
{{--    <p>{{$users->email}}</p>--}}
{{--@endforeach--}}
<style>
    tr:nth-child(even) {
        background-color: #dddddd;
    }

    tr:nth-child(odd) {
        background-color: #F3F4F6;
    }
</style>


<table class="border-2 border-collapse border-gray-500 shadow-lg w-full">
    <tr class="text-left">
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>phonenumber</th>
        <th>Checked in</th>
    </tr>
    @foreach($user as $users)

    <tr>
        <td class="w-24">{{ ucwords($users->firstname) }}</td>
        <td class="w-24">{{ ucwords($users->lastname) }}</td>
        <td class="w-64">{{ $users->email }}</td>
        <td class="w-24">{{ $users->phonenumber }}</td>
    </tr>
    @endforeach
</table>
