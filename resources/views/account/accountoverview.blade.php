<x-head />

<body class="font-poppins">
    <section class="min-h-screen">
        <x-header />
        <div class="flex">
            <x-account-nav />
            <div>
                <x-account-title title="Accountoverzicht"> </x-account-title>
                <h2 class="text-lg font-medium text-darkgray">Hallo {{ auth()->user()->name }}</h2>
            </div>
        </div>
    </section>
    <x-footer />
</body>
</html>
