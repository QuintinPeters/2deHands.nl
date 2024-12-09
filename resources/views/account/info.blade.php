<x-head />

<body class="font-poppins">
    <section class="min-h-screen">
        <x-header />
        <div class="flex">
            <x-account-nav />
            <x-snackbar/>
            <div class="w-2/5">
                <x-account-title title="Mijn gegevens" />
                <p>Pas hier je accountgegevens aan en houd je informatie up-to-date voor een betrouwbaar profiel!</p>
                <form action="{{ route('user.update') }}" method="POST" class="flex flex-col my-6 ml-3 gap-3">
                    @csrf
                    @method('PUT')
                    <div class="flex flex-col">
                        <label for="name">Gebruikersnaam:</label>
                        <x-input type="text" inputmode="text" name="name"
                            value="{{ old('name', auth()->user()->name) }}" placeholder="Gebruikersnaam" />
                        @error('name')
                            <span class="text-red text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="first_name">Voornaam:</label>
                        <x-input type="text" inputmode="text" name="first_name"
                            value="{{ old('first_name', auth()->user()->first_name) }}" placeholder="Voornaam" />
                        @error('first_name')
                            <span class="text-red text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="last_name">Achternaam:</label>
                        <x-input type="text" inputmode="text" name="last_name"
                            value="{{ old('last_name', auth()->user()->last_name) }}" placeholder="Achternaam" />
                        @error('last_name')
                            <span class="text-red text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="email">Email:</label>
                        <x-input type="text" inputmode="text" name="email"
                            value="{{ old('email', auth()->user()->email) }}" placeholder="Email" />
                        @error('email')
                            <span class="text-red text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="street_name">Straatnaam:</label>
                        <x-input type="text" inputmode="text" name="street_name"
                            value="{{ old('street_name', auth()->user()->street_name) }}" placeholder="Straatnaam" />
                        @error('street_name')
                            <span class="text-red text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="house_number">Huisnummer:</label>
                        <x-input type="text" inputmode="text" name="house_number"
                            value="{{ old('house_number', auth()->user()->house_number) }}" placeholder="Huisnummer" />
                        @error('house_number')
                            <span class="text-red text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="city">Woonplaats:</label>
                        <x-input type="text" inputmode="text" name="city"
                            value="{{ old('city', auth()->user()->city) }}" placeholder="Woonplaats" />
                        @error('city')
                            <span class="text-red text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="postal_code">Postcode:</label>
                        <x-input type="text" inputmode="text" name="postal_code"
                            value="{{ old('postal_code', auth()->user()->postal_code) }}" placeholder="Postcode" />
                        @error('postal_code')
                            <span class="text-red text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="self-center flex gap-2">
                        <button type="submit"
                            class="text-white text-lg font-medium bg-blue rounded-lg p-2">bewerken</button>

                        <button type="reset"
                            class="border-[1.5px] rounded-lg border-green text-lg font-medium text-green p-2">Annuleren</button>
                    </div>
                </form>
                <hr class="bg-darkgray my-4">
                <p>Wil je je account verwijderen? Let op: dit is definitief en kan niet ongedaan worden gemaakt.</p>
                <form action="{{ route('user.destroy') }}" method="POST" class="flex justify-center my-6 ml-3">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red text-white py-4 px-3 rounded-lg">Account Verwijderen</button>
                </form>
            </div>
        </div>
    </section>
    <x-footer />
</body>

</html>
