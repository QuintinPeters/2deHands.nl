<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>

<div class="font-poppins">
    <h1 class="font-bold text-xl mb-2">Bedankt voor jouw aanmelding {{ $data['name'] }}</h1>
    <p>je bent aangemeld met e-mail: {{ $data['email'] }}</p>
<a href="{{ route('account') }}"> ga naar je account</a>
</div>
</body>
</html>

