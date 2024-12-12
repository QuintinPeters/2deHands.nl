<div class="flex flex-col py-2 border-[1.5px] border-gray font-medium rounded-[21px] w-72 max-w-96 justify-between">
    <div class="flex flex-row justify-between py-0.5 pr-2">
        <h1 class="pl-3">{{ $product->user->name }} </h1>
        <h2>REVIEW RATING </h2>
    </div>
    <a href="{{ route('product.show', ['product' => $product]) }}">
        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full object-contain h-60 bg-lightgray">
    </a>
    <div class="flex items-end justify-between pt-1 font-medium tracking-tight h-full w-full">
        <a href="{{ route('product.show', ['product' => $product]) }}" class="pl-1.5 truncate">
            {{ $product->name }}
        </a>
        <p class="mr-1.5 ml-2">
            €{{ number_format($product->price, 2, ',', '.') }}
        </p>
    </div>
</div>
