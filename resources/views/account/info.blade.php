<x-head />

<body class="font-poppins">
    <section class="min-h-screen">
        <x-header />
        <div class="flex">
            <x-account-nav />
            <div class="w-2/5">
                <x-account-title title="Mijn gegevens" />
                <p>Pas hier je accountgegevens aan en houd je informatie up-to-date voor een betrouwbaar profiel!</p>

                <form action="{{ route('user.update') }}" method="POST" class="flex flex-col my-6 ml-3 gap-3">
                    @csrf
                    @method('PUT')
                    <div class="flex flex-col">
                        <label for="">Gebruikersnaam:</label>
                        <x-input type="" inputmode="text" name="name"
                            value="{{ old('name', auth()->user()->name) }}" placeholder="Gebruikersnaam" />
                    </div>
                    <div class="flex flex-col">
                        <label for="">Voornaam:</label>
                        <x-input type="" inputmode="text" name="first_name"
                            value="{{ old('first_name', auth()->user()->first_name) }}" placeholder="Voornaam" />
                    </div>
                    <div class="flex flex-col">
                        <label for="">Achternaam:</label>
                        <x-input type="" inputmode="text" name="last_name"
                            value="{{ old('last_name', auth()->user()->last_name) }}" placeholder="achternaam" />
                    </div>
                    <div class="flex flex-col">
                        <label for="">Email:</label>
                        <x-input type="text" inputmode="text" name="email"
                            value="{{ old('email', auth()->user()->email) }}" placeholder="Email" />
                    </div>
                    <div class="flex flex-col">
                        <label for="">Straatnaam:</label>
                        <x-input type="" inputmode="text" name="street_name"
                            value="{{ old('street_name', auth()->user()->street_name) }}" placeholder="Straatnaam" />
                    </div>
                    <div class="flex flex-col">
                        <label for="">Huisnummer:</label>
                        <x-input type="text" inputmode="text" name="house_number"
                            value="{{ old('house_number', auth()->user()->house_number) }}" placeholder="Huisnummer" />
                    </div>
                    <div class="flex flex-col">
                        <label for="">Woonplaats:</label>
                        <x-input type="" inputmode="text" name="city"
                            value="{{ old('city', auth()->user()->city) }}" placeholder="Woonplaats" />
                    </div>
                    <div class="flex flex-col">
                        <label for="">Postcode:</label>
                        <x-input type="" inputmode="text" name="postal_code"
                            value="{{ old('postal_code', auth()->user()->postal_code) }}" placeholder="Postcode" />
                    </div>
                    <div class="self-center flex gap-2">
                        <button type="submit"
                            class="text-white text-lg font-medium bg-blue rounded-lg p-2">bewerken</button>
                        <button type="reset" class="border-[1.5px] rounded-lg border-green text-lg font-medium text-green p-2">Annuleren</button>
                    </div>
                </form>
            </div>
        </div>

    </section>
    <x-footer />
</body>

</html>
