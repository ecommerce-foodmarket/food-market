@extends('layouts.user')
@section('content')

@php
    $totalPrice = 0;    
    @endphp

<div class="bg-white w-22.5rem h-6.75rem flex-shrink-0">
    <div class="flex items-center">
       
        <div class="w-10 h-10 bg-white-400 m-8 flex-shrink-0 w-full">
            <a href="{{ route('user.dashboard') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="24" viewBox="0 0 29 24" fill="none">
                
                <rect x="0.599609" width="27.6" height="24" rx="4" fill="#4A6159"/>
            
                <path d="M18.6809 6.32303L17.1508 5L8.64941 12.4L17.1594 19.8L18.6809 18.477L11.6924 12.4L18.6809 6.32303Z" fill="white"/>
            </svg>
            </a>
        
        </div>

        
        <div>
            <h3 class="text-xl font-semibold">Your Orders</h3>
            <h4>Wait for the best meal</h4>
        </div>
    </div>
</div>

    <div class="bg-white p-4 rounded-lg flex-grow">

        <div class="max-w-2xl mx-auto">
            <div class="border-b border-gray-200 dark:border-gray-700 mb-4">
                <ul class="flex flex-wrap -mb-px" 
                id="myTab" 
                data-tabs-toggle="#myTabContent" 
                role="tablist">

                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 
                        rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 
                        dark:text-gray-400 dark:hover:text-gray-300 active" 
                        id="progress-tab"
                         data-tabs-target="#progress" 
                         type="button" role="tab" 
                         aria-controls="progress" 
                         aria-selected="false">In Progress</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4
                         px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" 
                         id="pastOrders-tab" 
                         data-tabs-target="#pastOrders" t
                         ype="button" 
                         role="tab" 
                         aria-controls="pastOrders" 
                         aria-selected="true">
                         Past Orders</button>
                    </li>
                   
                  
                </ul>
            </div>
            
            
            <div id="myTabContent">
                <div class="p-4 rounded-lg" 
                id="progress" 
                role="tabpanel" 
                aria-labelledby="progress-tab">
                   
                    @foreach ($orders as $order)

                    @foreach ($order->products as $product)
                    <div class="flex items-center justify-between border-b border-gray-300 pb-4 mb-4">
                        <div class="flex items-center">
                            <img src="imagen-producto.jpg" alt="Nombre del Producto" class="h-16 w-16 rounded-lg object-cover">
                            <div class="ml-4">
                                <h3>{{ $product->name_product }}</h3>
                                <p>€{{ $product->price }}</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4"> 
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
                           <div class=" p-4">
                    <input type="hidden" name="totalPrice" value="{{ $totalPrice }}">
                    <div class="mt-8">
                    <a href="{{route('cart.confirm')}}">            
                        <button class="bg-custom-background text-custom-text-color py-2 px-4 rounded-full w-full" type="submit">Confirm</button>
                    </a>
                    <form method="POST" action="{{ route('order.destroy', ['order' => $order->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="cancel-bt text-custom-text-color py-2 px-4 rounded-full w-full mt-2">Cancel</button>
                    </form>
                    @endforeach
                    
                    
                    <a href="{{ route('user.dashboard') }}" class="block mt-4 link hover:underline text-center">Back to products</a>
                    </div>
                    </div>
                    
                    </div>
                    
        
                    </div>
                    
                    
                 </div>    
                    

                    
                            

                </div>
                
            
    <div class="bg-gray-50 p-4 rounded-lg hidden" id="pastOrders" role="tabpanel" aria-labelledby="pastOrders-tab">
        @if($pastOrders->isEmpty())
        <p>No past orders yet.</p>
        @else
             @foreach ($pastOrders as $pastOrder)
             @foreach ($pastOrder->products as $product)
                    <div class="flex items-center justify-between border-b border-gray-300 pb-4 mb-4">
                        <div class="flex items-center">
                            <img src="imagen-producto.jpg" alt="Nombre del Producto" class="h-16 w-16 rounded-lg object-cover">
                            <div class="ml-4">
                                <h3>{{ $product->name_product }}</h3>
                                <p>€{{ $product->price }}</p>
                                <p>{{$product->created_at}}</p>
                            </div>
                        </div>
        @endforeach
        @endforeach
        @endif
    </div>



@endsection

@php
    $section = 'cart'; 
@endphp

