<x-head />

<body class="font-poppins">
    <x-header />
    <section class="min-h-screen">
        <div class="flex">
            <x-account-nav />
            <div class="flex-1 ml-2 mt-3 mb-10">
                <x-account-title title="Mijn Producten" />
                <div class="flex justify-end mb-4 mr-4  ">
                    <a href="{{ route('createproduct') }}" class="bg-blue flex items-center gap-1 text-white px-4 py-2.5 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="26px"
                            fill="#fff">
                            <path
                                d="M440-440H240q-17 0-28.5-11.5T200-480q0-17 11.5-28.5T240-520h200v-200q0-17 11.5-28.5T480-760q17 0 28.5 11.5T520-720v200h200q17 0 28.5 11.5T760-480q0 17-11.5 28.5T720-440H520v200q0 17-11.5 28.5T480-200q-17 0-28.5-11.5T440-240v-200Z" />
                        </svg>Product
                        Toevoegen</a>
                </div>
                <div class="flex flex-wrap items-center gap-2">
                    @forelse ($products as $product)
                        <x-seller-product :product="$product" />
                    @empty
                        <h2 class="text-darkgray font-medium text-lg">Je hebt nog geen producten te koop aangeboden.
                        </h2>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    <x-footer />
</body>

</html>
