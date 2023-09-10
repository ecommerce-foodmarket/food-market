@extends('layouts.user')

@section('content')

<div class="flex flex-col items-center h-screen justify-center overflow-hidden">
    <div class="confirm-image mt-auto">
        <div class="w-40 flex-shrink-0 mx-auto">
            <img src="{{ asset('assets/images/complete.png') }}" alt="">
        </div>
        <h2 class="text-xl font-semibold m-4 mt-6">You’ve Made an Order</h2>
        <h4 class="text-gray-600 m-4">Just stay at home while we are preparing your best foods</h4>

        <a href="{{ route('user.dashboard') }}" class="text-center">
            <button class="mt-8 bg-DarkSlateGray text-LightOrange font-semibold py-2 px-8 rounded shadow text-center">
                Go to Dashboard
            </button>
        </a>
    </div>
</div>


@endsection

@php
    $section = 'cart'; 
@endphp
