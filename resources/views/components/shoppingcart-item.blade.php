<div class="flex justify-between my-5 border-b py-2 border-gray">
    <div class="flex">
        <img src="https://placehold.co/150x150.png" alt="product" class="w-28 h-28 object-cover">
        <div class="ml-5">
            <h3 class="font-semibold text-lg">Productnaam</h3>
            <p class="">Productomschrijving</p>
        </div>
    </div>
    <div class="flex items-center gap-2">
        <p class="font-semibold text-lg">€ 10,00</p>
        <form action="" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="border-blue border rounded-lg p-1 flex">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                    width="24px" fill="#0C8CE9">
                    <path
                        d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                </svg>
            </button>
        </form>

    </div>
</div>
