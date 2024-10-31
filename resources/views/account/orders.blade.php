<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ ucwords(str_replace('-', ' ', basename(request()->path()))) }}</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    @vite('resources/css/app.css')
</head>

<body class="font-poppins">
    <section class="min-h-screen">
        <x-header />
        <div class="flex">
            <x-account-nav />
            <x-account-title title="Bestellingen"/>
        </div>

    </section>
    <x-footer />
</body>
</html>