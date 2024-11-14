<div
    class="flex flex-col py-2 border-[1.5px] border-gray font-medium rounded-[21px] xl:w-[16%] xl:max-w-96 justify-between">
    <div class="flex flex-row justify-between py-0.5 pr-2">
        <h1 class="pl-3">{{ $product->user->name }} </h1>
        {{-- * star review of the user * --}}
    </div>
    <div>
        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full object-contain xl:h-60 bg-lightgray">
    </div>
    <div class="flex items-end justify-between pt-1 font-normal tracking-tight h-full w-full">
        <p class="pl-1.5 truncate">
            {{ $product->name }}
        </p>
        <p class="pr-1.5">
            €{{ number_format($product->price, 2, ',', '.') }}
        </p>
    </div>
</div>
