<script>
    function showSnackbar() {
        const snackbar = document.getElementById("snackbar");
        snackbar.classList.remove("hidden"); // Show the snackbar

        // Automatically hide after 3 seconds
        setTimeout(() => {
            snackbar.classList.add("hidden");
        }, 3500);
    }
</script>


<div class="flex flex-col py-2 border-[1.5px] border-gray rounded-[21px] w-[300px] justify-between">

    <div class="flex flex-row justify-between font-medium py-0.5 pr-2">
        <h1 class="pl-3">{{ $product->user->name }} </h1>
        <h2>REVIEW RATING </h2>
    </div>
    <a href="{{ route('product.show', ['product' => $product]) }}">
        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full object-contain h-60 bg-lightgray">
    </a>
    <div class="flex items-end justify-between pt-1 tracking-tight h-full w-full">
        <a href="{{ route('product.show', ['product' => $product]) }}" class="pl-2 truncate">
            {{ $product->name }}
        </a>
        <p class="mr-1.5 ml-2">
            €{{ number_format($product->price, 2, ',', '.') }}
        </p>
    </div>
    @if ($product->is_sold == true)
        <div class="flex justify-center gap-2 mt-2">
            <div id="snackbar"
                class="fixed bottom-4 right-20 hidden bg-darkgray text-white text-[15px] font-medium px-4 py-3 rounded-lg shadow-lg">
                <p>Dit product is verkocht en kan niet meer worden aangepast!</p>
            </div>

            <button class="p-2 bg-gray text-white rounded-full cursor-default" onclick="showSnackbar()">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                    fill="#fff">
                    <path
                        d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                </svg>
            </button>
            <button class="bg-gray text-white p-2 rounded-full cursor-default" onclick="showSnackbar()">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                    fill="#ffffff">
                    <path
                        d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                </svg>
            </button>
        </div>
    @else
        <div class="flex justify-center gap-2 mt-2">
            <a href="{{ route('editproduct', [$product]) }}" class="bg-blue text-white p-2 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                    fill="#fff">
                    <path
                        d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                </svg>
            </a>
            <form action="{{ route('deleteproduct', [$product]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red text-white p-2 rounded-full disabled">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#ffffff">
                        <path
                            d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                    </svg>
                </button>
            </form>
        </div>
    @endif

</div>
