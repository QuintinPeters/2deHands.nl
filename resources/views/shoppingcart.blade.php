<x-head />

<body class="text-darkgray">
    <x-header />
    <section class="min-h-screen">
        <div class="mx-16 my-10">
            <h1 class="font-semibold text-3xl justify-self-start">Winkelwagen</h1>

            <div class="flex ml-14 mr-8 my-10 justify-between">
                <div class="w-[73%] ">
                    <div class="flex justify-between">
                        <h2 class="font-semibold text-xl">Producten</h2>
                        <h2 class="font-semibold text-xl">Prijs</h2>
                    </div>

                    <x-shoppingcart-item />

                </div>
                <div class="border border-gray rounded-lg min-w-[25%] h-64 font-medium ">

                    <div class="p-3 flex flex-col gap-0.5">
                        <h1 class="font-semibold text-2xl">Overzicht</h1>
                        <div class="flex justify-between px-1 ">
                            <p>artikelen(hoeveel)</p>
                            <p class="">€prijs</p>
                        </div>
                        <div class="flex justify-between mb-1 px-1">
                            <p>Overige kosten</p>
                            <p class="">€prijs</p>
                        </div>
                        <hr class="text-gray">
                    </div>
                    <div class="bg-lightgreen py-2 ">
                        <div class="flex justify-between px-3">
                            <p>totaalbedrag</p>
                            <p>€prijs</p>
                        </div>
                    </div>
                    <div class="flex justify-center items-center h-1/3">
                        <a href="#" class="bg-blue text-white p-2 rounded-lg ">Verder naar
                            bestellen</a>
                    </div>
                </div>
            </div>


    </section>
    <x-footer />
