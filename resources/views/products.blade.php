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
    <div class="mt-4 mx-4 mb-2 flex">
        <div class="flex gap-2">
            <!-- Category 1 -->
            <x-category />
            <!-- Category 2 -->
            <input type="checkbox" id="gezondheid" name="category" class="hidden peer/gezondheid" />
            <label for="gezondheid"
                class="px-4 py-2 rounded-full border cursor-pointer peer-checked/gezondheid:text-white peer-checked/gezondheid:bg-blue">
                Gezondheid en Verzorging
            </label>

            <!-- Category 3 -->

            <input type="checkbox" id="speelgoed" name="category" class="hidden peer/speelgoed " />

            <label for="speelgoed"
                class="cursor-pointer px-4 py-2 border rounded-full peer-checked/speelgoed:text-white peer-checked/speelgoed:bg-blue select-none">
                Speelgoed en Games
            </label>



        </div>


    </div>
    <section class="flex flex-wrap ml-4 items-center gap-3 my-3">   
        <x-product />
        <x-product />
        <x-product />
        <x-product />
        <x-product />
        <x-product />

    </section>
</div>
    <x-footer />
</body>
