<x-head/>

<body class="font-poppins h-screen">
<div class="h-full bg-gradient-to-b from-green from-50% to-blue to-50% ">
    <x-header/>
    <x-snackbar/>
    <section class="flex justify-center items-center text-white text-5xl font-semibold h-1/2">
        <div class="">
            <div class="flex flex-col items-center">
                <h1 class="self-start">Herontdek</h1>
                <h1 class="">Hergebruik</h1>
                <h1 class="text-darkblue italic">Shop tweedehands!</h1>
            </div>
        </div>
    </section>
    <section class=" flex justify-center text-white py-1 ">
        <a href="{{ route('products') }}" class="rounded-2xl font-semibold text-2xl bg-green p-5">Ontdek meer</a>
    </section>
</div>
<x-footer/>
</body>
</html>
