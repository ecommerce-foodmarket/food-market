<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your order</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
</head>
<body class="min-h-screen flex flex-col">
    {{-- <h3>hola, {{ auth()->user()->name }} este es tu pedido</h3> --}}
    <h3 class="p-4">hola, {{ $order->id_user }} este es tu pedido</h3>

    @php
    $totalPrice = 0;    
    @endphp

<div class="bg-white p-4">
    <div class="bg-white p-4">
        {{-- <ul class="flex">
            <li class="mr-4">
                <a href="{{ route('cart.index') }}" class="py-2 px-4 {{ request()->routeIs('cart.index') ? 'text-custom-selected' : 'text-custom-default' }}">Inprogress</a>
            </li>
            <li>
                <a href="{{ route('cart.pastorders') }}" class="py-2 px-4 {{ request()->routeIs('cart.pastorders') ? 'text-custom-selected' : 'text-custom-default' }}">Past Orders</a>
            </li>
        </ul> --}}
    </div>
</div>

    <div class="bg-white p-4 rounded-lg flex-grow">

        {{-- @if($pastOrdersView)

        @foreach
        @endforeach

        
            
        @else
            
         --}}

        @foreach ($order->products as $product)
        <div class="flex items-center justify-between border-b border-gray-300 pb-4 mb-4">
            <div class="flex items-center">
                <img src="imagen-producto.jpg" alt="Nombre del Producto" class="h-16 w-16 rounded-lg object-cover">
                <div class="ml-4">
                    <h3>{{ $product->name_product }}</h3>
                    <p>€{{ $product->price }}</p>
                </div>
            </div>
            <div class="flex items-center space-x-4"> <!-- Alineación horizontal de botones -->
                <form action="{{ route('cart.update') }}" method="POST" class="flex items-center">
                    @csrf
                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <button class="text-gray-500 hover:text-red-500 m-4" type="submit" name="increment" value="-1">-</button>
                    <p>{{ $product->pivot->amount }}</p>
                    <button class="text-gray-500 hover:text-blue-500 m-4" type="submit" name="increment" value="1">+</button>
                </form>
                <div>
                    <form method="POST" action="{{ route('cart.destroy', ['order' => $order->id, 'product' => $product->id]) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" onsubmit="return confirm('¿Seguro que deseas eliminar este artículo del carrito?')" />
                    </form>
                </div>
            </div>
        </div>
        @php
        $subtotal = $product->price * $product->pivot->amount;
        $totalPrice += $subtotal;
        @endphp
        @endforeach

        <div class="mt-8 flex-grow">
            <div class="flex justify-between">
                <span class="text-lg font-semibold">Total:</span>
                <span class="text-gray-800 font-semibold">€{{ $totalPrice }}</span>
            </div>
        </div>
    </div>

    <footer class=" p-4">
        <input type="hidden" name="totalPrice" value="{{ $totalPrice }}">
        <a href="{{route('cart.confirm')}}">            
            <button class="bg-custom-background text-custom-text-color py-2 px-4 rounded-full w-full" type="submit">Confirm</button>
    </a>


        <a href="{{ route('products.index') }}" class="block mt-4 link hover:underline text-center">Volver a Productos</a>
    </footer>
    {{-- @endif --}}
</body>
</html>