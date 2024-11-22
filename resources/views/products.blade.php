<x-head />

<body class="font-poppins">

    <section class="min-h-screen text-darkgray">
        <x-header />

        <main class="flex flex-wrap items-center gap-2 ml-2 mt-3 mb-10">
            @foreach ($products as $product)
                <x-product :product="$product" />
            @endforeach
        </main>
        </div>
    </section>
    <x-footer />
</body>

</html>
