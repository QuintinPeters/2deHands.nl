<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>2dehands.nl | {{ $user->name }}</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    @vite('resources/css/app.css')
</head>

<body class="font-poppins text-darkgray">
    <section class="min-h-screen min-w-screen ">
        <x-header />

        <div class=" py-8 px-4">
            <h1 class="text-3xl font-semibold mb-6 flex justify-center">Profiel van {{ $user->name }}</h1>
            <div class="mb-8 flex flex-col items-center">
                <h2 class="text-2xl font-semibold mb-4 self-start">Producten</h2>
                @if ($products->isEmpty())
                    <p class="">Geen producten gevonden.</p>
                @else
                    <div class=" flex flex-wrap gap-2.5">
                        @foreach ($products as $product)
                            <x-product :product="$product" />
                        @endforeach
                    </div>
                @endif
            </div>

            <div class=" ">
                <h2 class="text-2xl font-semibold mb-4">Reviews</h2>
                @if ($reviews->isEmpty())
                    <p class="">Geen reviews gevonden.</p>
                @else
                    <div class="flex items-center flex-wrap gap-2.5">
                        @foreach ($reviews as $review)
                            <x-review :review="$review" />
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>
    <x-footer />
</body>

</html>
