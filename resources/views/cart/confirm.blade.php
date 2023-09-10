@extends('layouts.user')
@section('content')
@include('components.secondHeader', [
    'title' =>'Payment',
    'subtitle'=>'You deserve better meal'
])

{{-- Order details --}}
<div>
    @include('components.confirmOrderDetails', ['cartProducts' => $cartProducts, 'order' => $order])
</div>

{{-- User data --}}
<div>

    @include('components.confirmUserDetails', ['order' => $order])

</div>

<div class="mr-10 ml-10 mb-10">
    <form action="{{ route('order.checkout', ['order' => $order->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <button type="submit" class="bg-custom-background text-custom-text-color py-2 px-4 rounded-full w-full">
            Checkout Now
        </button>
    </form>
    
</div>


















@endsection
@php
    $section = 'cart'; 
@endphp

