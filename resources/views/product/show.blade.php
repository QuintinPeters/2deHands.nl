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
        <x-snackbar />
        <div class="my-8 w-full flex ">
            <a href="{{ url()->previous() }}" class="ml-12 h-min text-blue hover:underline">&lt; terug</a>

            <div class="flex flex-col my-8 mx-36">
                <h1 class="text-3xl font-semibold mb-4 first-letter:capitalize">{{ $product->name }}</h1>
                <h2 class="">Verkoper: <a href=""
                        class="underline text-blue">{{ $product->user->name }}</a>
                    | REVIEW RATING
                </h2>
                <img class="max-w-xl mb-1.5 bg-lightgray" src="../{{ $product->image }}" alt="{{ $product->name }}">
                <p class="font-medium mb-3">Staat van product: {{ $product->quality }}</p>
                <p class="text-xl font-semibold">Productbeschrijving</p>
                <p class="first-letter:capitalize text-[15px] max-w-lg">{{ $product->description }}</p>
            </div>

            <div class="mr-16 flex flex-col gap-20 items-center">
                <div>
                    <h2 class="text-2xl font-semibold ">€{{ number_format($product->price, 2, ',', '.') }}</h2>
                    <p class="text-lg">Categorie: {{ $product->category->category_name }}</p>
                </div>
                @auth
                    @if (auth()->user()->id == $product->user_id)
                        <button
                            class="text-darkgray font-medium text-lg cursor-not-allowed select-none bg-gray rounded-md p-2"
                            disabled>Dit is jouw product</h3>
                        @else
                        @if ($product->is_sold == true)
                            <button
                                class="text-darkgray font-medium text-lg cursor-not-allowed select-none bg-gray rounded-md p-2"
                                disabled>Dit product is verkocht</h3>
                        @else
                        <form action="{{ route('cart.add', ['product' => $product]) }}" method="POST" class="">
                            @csrf
                            <button type="submit"
                                class="bg-blue text-white w-44 flex items-center justify-center gap-2 p-2 rounded-lg">
                                <svg width="26" height="26" viewBox="0 0 50 50" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.1875 42.1875C18.0504 42.1875 18.75 41.4879 18.75 40.625C18.75 39.7621 18.0504 39.0625 17.1875 39.0625C16.3246 39.0625 15.625 39.7621 15.625 40.625C15.625 41.4879 16.3246 42.1875 17.1875 42.1875Z"
                                        stroke="white" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M39.0625 42.1875C39.9254 42.1875 40.625 41.4879 40.625 40.625C40.625 39.7621 39.9254 39.0625 39.0625 39.0625C38.1996 39.0625 37.5 39.7621 37.5 40.625C37.5 41.4879 38.1996 42.1875 39.0625 42.1875Z"
                                        stroke="white" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M4.6875 7.8125H10.9375L15.625 34.375H40.625" stroke="white"
                                        stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M15.625 28.125H39.9844C40.165 28.1251 40.3402 28.0626 40.4799 27.9481C40.6197 27.8336 40.7155 27.6742 40.751 27.4971L43.5634 13.4346C43.5861 13.3212 43.5834 13.2042 43.5554 13.092C43.5273 12.9798 43.4748 12.8752 43.4014 12.7858C43.3281 12.6964 43.2358 12.6244 43.1313 12.5749C43.0267 12.5255 42.9125 12.4999 42.7968 12.5H12.5"
                                        stroke="white" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                Add to Cart
                            </button>
                        </form>
                        @endif

                    @endif
                @endauth

            </div>


        </div>
    </section>
    <x-footer />
</body>
