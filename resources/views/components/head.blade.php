<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>2dehands.nl | {{ ucwords(str_replace('-', ' ', basename(request()->path()))) }}</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    @vite('resources/css/app.css')
</head>