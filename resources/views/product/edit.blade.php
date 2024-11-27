<x-head />

<body class="font-poppins">

    <section class="min-h-screen">
        <x-header />
        @foreach ($errors->all() as $error)
            <div class="rounded-lg">{{ $error }}</div>
        @endforeach
        <div id="image-preview" class="flex flex-wrap"></div>
        <div class="flex flex-col items-center">
            <form method="post" action="{{ route('updateproduct', $product) }}" enctype="multipart/form-data"
                class="flex flex-col text-darkgray w-1/3 mt-10 mb-20">
                @csrf
                @method('PUT')
                <h1 class="text-2xl text-center font-semibold my-5">Bewerk jouw product</h1>

                <label for="name">Naam van jouw product:</label>
                <x-input type="text" inputmode="" name="name" id="name" placeholder="Naam" value="{{ old('name', $product->name) }}" />

                <label class="description">Beschrijf het product met alle belangrijke kenmerken</label>
                <textarea name="description" id="description" placeholder="Beschrijving"
                    class="border-gray border rounded-lg mb-3 p-2 xl:min-h-56 xl:max-h-72">{{ old('description', $product->description) }}</textarea>

                <label for="price">Prijs van jouw product:</label>
                <x-input type="text" inputmode="numeric" name="price" id="price" placeholder="Bv: 3,99" value="{{ old('price', $product->price) }}" />

                <label for="category_id">Kies een categorie:</label>
                <select name="category_id"
                    class="max-w-fit border border-gray rounded-lg text-sm px-2 py-1 mb-4 text-center">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                    @endforeach
                </select>

                <label for="quality">Kwaliteit:</label>
                <select name="quality"
                    class="max-w-fit border border-gray rounded-lg text-sm px-2 py-1 mb-4 text-center">
                    <option value="nooit gebruikt" {{ old('quality', $product->quality) == 'nooit gebruikt' ? 'selected' : '' }}>Nooit gebruikt</option>
                    <option value="erg goed" {{ old('quality', $product->quality) == 'erg goed' ? 'selected' : '' }}>Erg goed</option>
                    <option value="goed" {{ old('quality', $product->quality) == 'goed' ? 'selected' : '' }}>Goed</option>
                    <option value="gebruikt" {{ old('quality', $product->quality) == 'gebruikt' ? 'selected' : '' }}>Gebruikt</option>
                    <option value="werkt niet" {{ old('quality', $product->quality) == 'werkt niet' ? 'selected' : '' }}>Werkt niet</option>
                </select>

                <label for="images" class="form-label">Upload hier foto's van jouw product</label>

                <!-- Display the existing image -->
                @if ($product->image)
                    <div class="mb-4">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full h-52 object-cover rounded-lg">
                    </div>
                @endif

                <div class="flex flex-col items-center justify-center w-full mb-5">
                    <label for="dropzone-file"
                        class="flex flex-col items-center justify-center w-full h-52 border-2 hover:border-darkgray border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-lightgray border-gray">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-darkgray" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 font-semibold">Klik
                                om te uploaden</p>
                        </div>
                    </label>
                    <input id="dropzone-file" type="file" class="mt-3" name="image" accept="image/*" />
                </div>
                <div class="self-center my-3">
                    <button type="submit" class="text-white bg-green rounded-lg p-3 mx-2">Product
                        bijwerken</button>
                    <a href="{{ route('accountsales') }}" class="rounded-lg border border-green p-3 mx-2">Annuleren</a>
                </div>
            </form>
        </div>
    </section>
    <x-footer />

</body>

</html>