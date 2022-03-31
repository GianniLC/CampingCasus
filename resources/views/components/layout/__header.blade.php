<html lang="en">
<head>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Camping casus</title>
</head>

<div class="bg-green-600 grid grid-cols-11 h-24">
    <div class= "col-span-3 ">
        <img src ="{{ asset("images/Camper_3.png") }}" alt="Camper">
    </div>
    <x-layout.linkLayout><a href ="/home">Home</a></x-layout.linkLayout>
    <x-layout.linkLayout><a href ="/register">Register</a></x-layout.linkLayout>
    <x-layout.linkLayout><a href ="/users">Users</a></x-layout.linkLayout>
    <x-layout.linkLayout class="col-start-11"><a href ="/myAccount">Account</a></x-layout.linkLayout>
</div>
