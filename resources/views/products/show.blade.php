@extends('layouts.user')
@section('content')

{{-- header --}}

<div class="bg-gray-50 w-full h-full">
    <!-- Imagen del producto -->
    <div class="bg-cover bg-center bg-lightgray w-full">
      <img src=" {{ asset($product->picture) }}">
    </div>
  
    <!-- Tarjeta de información -->
    <div class="bg-white rounded-lg mt-8 w-full" >
      <div class="p-4">
        <!-- Título del producto -->
        <h2 class="text-xl font-semibold">{{$product->name_product}}</h2>
        
        
        <p class= mt-10>{{$product->description}}</p>
        
        <div class="mt-6">
            <div class="total-price">Total Price:</div>
            <div class="price">€ {{$product->price}}</div>


        </div>
          

            <form action="{{ route('add-to-cart', $product) }}" method="POST">
                @csrf
                <div class="flex justify-center">
                <button type="submit" 
                class="w-40 h-10 flex-shrink-0 bg-custom-background text-custom-text-color text-sm rounded-lg mt-6">
                Add to cart
                </button>
            </div>
            </form>
            
        </div>
      </div>
    </div>
  </div>
  

@endsection

@php
    $section = 'cart'
@endphp