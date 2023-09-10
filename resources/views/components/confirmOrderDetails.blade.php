<div class="bg-white p-4 mb-4 shadow-md">
    <h4 class="text-left font-semibold mb-2">Details Transaction:</h4>
    <div class="mb-4">
        @if ($cartProducts->isNotEmpty())
            @foreach ($cartProducts as $product)
                <div class="flex items-center mb-4">
                    <img src="{{ asset($product->picture) }}" alt="{{ $product->name_product }}" 
                        class="h-16 w-16 rounded-lg object-cover">
                    <div class="ml-4">
                        <h4 class="text-left">{{ $product->name_product }}</h4>
                        <p class="text-gray-500">Price: €{{ $product->price }}</p>
                        <p class="text-gray-500">Quantity: {{ $product->pivot->amount }}</p>
                    </div>
                </div>
            @endforeach
        @else
            <p>No items in the cart.</p>
        @endif
    </div>
    <div class="flex justify-between mb-2">
        <p class="text-gray-500">Driver</p>
        <p class="text-gray-500">Peter</p>
    </div>
    <div class="flex justify-between mb-2">
        <p class="text-gray-500">Tax</p>
        <p class="text-gray-500">€0.00</p>
    </div>
    <div class="flex justify-between">
        <p class="text-xl font-semibold">Total Price</p>
        <p class="text-xl font-semibold mt-6">{{$order->cost}}</p>
    </div>
</div>
