<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ ucwords(str_replace('-', ' ', basename(request()->path()))) }}</title>
    @vite('resources/css/app.css')
</head>

<body class="font-poppins">

    <section class="min-h-screen">
        <x-header />
        @foreach ($errors->all() as $error)
            <div class=" rounded-lg ">{{ $error }}</div>
        @endforeach
        <div id="image-preview" class="flex flex-wrap"></div>
        <div class="flex flex-col items-center">
            <form method="post" action="{{ route('storeproduct') }}" enctype="multipart/form-data"
                class="flex flex-col text-darkgray w-[28%] mt-10 mb-20">
                @csrf
                <h1 class="text-2xl text-center font-semibold my-5">Voeg jouw product toe</h1>

                <label for="name">Naam van jouw product:</label>
                <x-input type="text" inputmode="" name="name" id="name" placeholder="Naam" />

                <label class="description">Beschrijf het product met alle belangrijke kenmerken</label>
                <textarea name="description" id="description" placeholder="Beschrijving"
                    class="border-gray border rounded-lg mb-3 p-2 xl:min-h-56 xl:max-h-96"></textarea>

                <label for="price">Prijs van jouw product:</label>
                <x-input type="text" inputmode="numeric" name="price" id="price" placeholder="Bv: 3.99" />

                <select name="quality"
                    class="max-w-fit border border-gray rounded-lg text-sm px-2 py-1 mb-4 text-center">

                    <option value="nieuw">Nooit gebruikt</option>
                    <option value="erg goed">Erg goed</option>
                    <option value="goed">Goed</option>
                    <option value="gebruikt">Gebruikt</option>
                    <option value="werkt niet">Werkt niet</option>
                </select>
                <label for="images" class="form-label">Upload hier foto's van jou product</label>
                <input type="file" name="image" id="images" accept="image/*"/>
                <div class="self-center my-3">
                    <button type="submit" class="text-white bg-green rounded-lg p-3 mx-2">Product
                        toevoegen</button>
                    <a href="{{ route('accountsales') }}" class="rounded-lg border border-green p-3 mx-2">Annuleren</a>
                </div>
            </form>
        </div>
    </section>
    <x-footer />
</body>

</html>
