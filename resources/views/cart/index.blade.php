<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your order</title>
    <link rel="stylesheet" href="{{asset('css/cart.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
</head>
<body>
{{-- <h3>hola, {{auth()->user()->name}} este es tu pedido</h3> --}}
<h3>hola, {{$order->id_user}} este es tu pedido</h3>

@php
$totalPrice = 0;    
@endphp


@foreach ($order->products as $product)
<div>   
    <div>
        <div>{{$product->name_product}}</div>
        <div>
            <p>€{{$product->price}}</p>
             
        </div>
    </div>
    <div>
        <form method="POST" action="{{ route('cart.destroy',
            ['order'=>$order->id,
            'product'=>$product->id])}}"
    
            > 
            @csrf
            @method('DELETE')
            <input type="submit" value="DELETE" onsubmit="return confirm('Are you sure you want to remove this item from your cart?')" />
        </form>
        <div>
            <form action={{route('cart.update')}} method="POST">
                @csrf
               <input type="hidden" name="order_id" value={{$order->id}}>
               <input type="hidden" name="product_id" value={{$product->id}}>
               <button class="increment" type="submit" name="increment" value="1">+</button>

            </form>
            <p>{{$product->pivot->amount}} items</p>
            <form action={{route('cart.update')}} method="POST">
                @csrf
                <input type="hidden" name="order_id" value={{$order->id}}>
                <input type="hidden" name="product_id" value={{$product->id}}>
                <button class="increment" type="submit" name="increment" value="-1">-</button>
 
             </form>
            
        
    </div>
</div>
@php
$subtotal = $product->price*$product->pivot->amount;
$totalPrice += $subtotal
@endphp
@endforeach

<h3>Total: €{{$totalPrice}}</h3>

<form action="{{route('pay')}}" method="POST">
    @csrf
    <input type="hidden" name="totalPrice" value="{{$totalPrice}}">
    <button type="submit">Pay</button>
</form>
<a href="route{{'products.index'}}">
<button>Back to Products</button>
</a>


