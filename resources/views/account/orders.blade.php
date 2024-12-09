<x-head />

<body class="font-poppins text-darkgray">
    <section class="min-h-screen">
        <x-header />
        <div class="flex">
            <x-account-nav />
            <div class="w-full px-8">
                <x-account-title title="Bestellingen" />

                @forelse($orders as $order)
                    <div class="border rounded-lg p-4 mb-4">
                        <div class="flex items-center justify-between mb-2">
                            <div>
                                <h3 class="font-semibold">Bestelling #{{ $order->id }}</h3>
                                <p class="">
                                    {{ \Carbon\Carbon::parse($order->order_date)->locale('nl')->isoFormat('D MMMM Y') }}
                                </p>
                            </div>
                            <div class="flex gap-1">
                                <p class="font-medium">totaal: </p>
                                <p class="font-medium mr-2">€{{ number_format($order->total_price, 2, ',', '.') }}</p>
                            </div>
                        </div>

                        @foreach ($order->orderItems as $orderitem)
                            <div class="flex items-center gap-4 border-t py-4">
                                <img src="../{{ $orderitem->product->image }}" alt="{{ $orderitem->product->name }}"
                                    class="w-[110px] h-[110px] object-contain bg-lightgray">
                                <div>
                                    <h4 class="font-medium">{{ $orderitem->product->name }}</h4>
                                    <p class="text-sm">Status: {{ $orderitem->item_status }}</p>
                                </div>
                                <p class="ml-auto font-medium">
                                    €{{ number_format($orderitem->product->price, 2, ',', '.') }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                @empty
                    <p class="text-darkgray">Je hebt nog geen bestellingen geplaatst.</p>
                @endforelse
            </div>
        </div>
    </section>
    <x-footer />
</body>

</html>
