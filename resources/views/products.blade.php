<x-head/>

<body class="font-poppins">

    <section class="min-h-screen">
        <x-header />
    <div class="mt-4 mx-4 mb-2 flex">
        <div class="flex gap-[10px]">
            <!-- Category 1 -->
            <x-category />
            <!-- Category 2 -->
            <input type="checkbox" id="gezondheid" name="category" class="hidden peer/gezondheid" />
            <label for="gezondheid"
                class="px-4 py-2 rounded-full border cursor-pointer peer-checked/gezondheid:text-white peer-checked/gezondheid:bg-blue">
                Gezondheid en Verzorging
            </label>

            <!-- Category 3 -->

            <input type="checkbox" id="speelgoed" name="category" class="hidden peer/speelgoed " />

            <label for="speelgoed"
                class="cursor-pointer px-4 py-2 border rounded-full peer-checked/speelgoed:text-white peer-checked/speelgoed:bg-blue select-none">
                Speelgoed en Games
            </label>



        </div>
    </div>
    <section class="flex flex-wrap items-center gap-2 ml-2 mt-3 mb-10"> 
        @foreach ($products as $product)
        <x-product :product="$product"/>
        @endforeach
    </section>
</div>
    </section>
    <x-footer />
</body>
</html>