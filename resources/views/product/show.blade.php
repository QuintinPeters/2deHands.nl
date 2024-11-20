<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>2dehands.nl | {{ $product->name }}</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    @vite('resources/css/app.css')
</head>

<body>
    <x-header />
    <section class="min-h-screen font-poppins text-darkgray ">
        <div class="my-8 w-full flex">
            <a href="{{ session('previous_url', route('products')) }}" class="ml-12 h-min text-blue hover:underline">&lt;terug</a>

            <div class="flex flex-col my-8 mx-36">
                <h1 class="text-3xl font-semibold mb-4 first-letter:capitalize">{{ $product->name }}</h1>
                <h2 class="">Verkoper: <a href=""
                        class="underline text-blue">{{ $product->user->name }}</a>
                    | REVIEW RATING
                </h2>
                <img class="max-w-full mb-3 bg-lightgray" src="../{{ $product->image }}" alt="{{ $product->name }}">
                <p class="text-xl font-semibold">Productbeschrijving</p>

                <p class="first-letter:capitalize text-[15px] max-w-lg">{{ $product->description }}</p>
            </div>

            <div class="mr-16">
                <h2 class="text-2xl font-semibold">€{{ number_format($product->price, 2, ',', '.') }}</h2>
                <div class="flex flex-col ">
                    <p class="text-lg">Categorie: {{ $product->category->category_name }}</p>
                </div>
            </div>
            <!-- In your product view (e.g., product/show.blade.php) -->
{{-- <form action="{{ route('cart.add', $product) }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-primary">Add to Cart</button>
</form>      --}}
        </div>
    </section>
    <x-footer />
</body>
