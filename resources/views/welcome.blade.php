<!doctype html>

@include('components.layout.__header')

<body>
    <div class="gap-4 grid grid-cols-6 grid-flow-col h-s h-screen">
        <div class="bg-blue-200 col-span-1">
            <div> 
                <ul class="bg-red-500 pl-5 pt-2 text-lg underline">
                    <li><x-form.label>home </x-form.label></li>
                    <li><a href="/users"> users </a></li>
                </ul>

            </div>
        </div>

        <div class="bg-blue-500 col-span-3 p-5">
            <div class="bg-gray-300 bg-opacity-75 p-4 rounded-2xl">
                <h1 class="text-center font-semibold text-2xl">Account registratie</h1>
                <form action="/register" method="POST">
                    @csrf
                    <x-form.input-field label="Voornaam" name="firstname"></x-form.input-field>
                    <x-form.input-field label="Achternaam" name="lastname"></x-form.input-field>
                    <x-form.input-field label="Email" name="email"></x-form.input-field>
                    <x-form.input-field label="Woonplaats" name="city"></x-form.input-field>
                    <x-form.input-field label="Adres" name="address"></x-form.input-field>
                    <x-form.input-field label="Huisnummer" name="addressnumber"></x-form.input-field>
                    <x-form.input-field label="Postcode" name="zipcode"></x-form.input-field>
                    <x-form.input-field label="Tel. nummer" name="phonenumber"></x-form.input-field>

                    <div class="grid grid-cols-4">
                        <x-form.button>Reserveer</x-form.button>
                    </div>
                </form>
            </div>
        </div>

        <div class="bg-blue-800 col-span-2 text-gray-500">

        </div>
    </div>

</body>
</html>
