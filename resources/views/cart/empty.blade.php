@extends('layouts.user')

@section('content')
@include('components.secondHeader', [
    'title' =>'Your Orders',
    'subtitle'=>'Wait for the best meal'
])


<div class="max-w-2xl mx-auto">
    <div class="border-b border-gray-200 dark:border-gray-700 mb-4">
        <ul class="flex flex-wrap -mb-px" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
            <li class="mr-2" role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 
                rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 
                dark:text-gray-400 dark:hover:text-gray-300 active" id="progress-tab" data-tabs-target="#progress" type="button" role="tab" aria-controls="progress" aria-selected="false">In Progress</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4
                 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" 
                 id="pastOrders-tab" data-tabs-target="#pastOrders" type="button" role="tab" aria-controls="pastOrders" aria-selected="true">
                 Past Orders</button>
            </li>
           
          
        </ul>
    </div>
    <div id="myTabContent">
        <div class="p-4 rounded-lg" id="progress" role="tabpanel" aria-labelledby="progress-tab">
            <div class="shoppingBag">
                <svg xmlns="http://www.w3.org/2000/svg" width="300" height="300" 
                viewBox="0 0 24 24"><g fill="none" stroke="#ecaa92" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5"><path d="M6.331 8H17.67a2 2 0 0 1 1.977 2.304l-1.255 8.152A3 3 0 0 1 15.426 21H8.574a3 3 0 0 1-2.965-2.544l-1.255-8.152A2 2 0 0 1 6.331 8z"/>
                    <path d="M9 11V6a3 3 0 0 1 6 0v5"/></g></svg>
                    <div class=info>
                        <h2>No orders yet</h2>
                    <h4>Hit the button down
                        below to create an order</h4>
                    </div>
                    
                        
                    
                    
            </div>
            <a href="{{route ('user.dashboard')}}">
                <button type="submit" class="bg-custom-background text-custom-text-color py-2 px-4 rounded-full w-full mt-bttn">Start Ordering</button>
            </a>
        </div>
        
        <div class="bg-gray-50 p-4 rounded-lg hidden" id="pastOrders" role="tabpanel" aria-labelledby="pastOrders-tab">
            @if($pastOrders->isEmpty())
            <p>No past orders yet.</p>
            @else
    @foreach ($pastOrders as $pastOrder)
        @foreach ($pastOrder->products as $product)
            <div class="w-full mb-4">
                <div class="flex items-center justify-between border-b border-gray-300 pb-4">
                    <div class="flex items-center">
                        <img src="imagen-producto.jpg" alt="Nombre del Producto" class="h-16 w-16 rounded-lg object-cover">
                        <div class="ml-4">
                            <h3>{{ $product->name_product }}</h3>
                            <p>€{{ $product->price }}</p>
                            <p>{{ $product->created_at }}</p>
                        </div>
                    </div>
                </div>
            </div>
                @endforeach
            @endforeach
        @endif
        </div>
    </div>
    
</div>




@endsection
@php
    $section = 'cart'; 
@endphp