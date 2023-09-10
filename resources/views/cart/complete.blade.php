@extends('layouts.user')

@section('content')

<div class=confirm-image>
    <img src="{{asset('assets/images/confirm_image.png')}}" alt="">
</div>

<a href="{{ route('user.dashboard') }}">
<button class="ml-4 bg-DarkSlateGray text-LightOrange font-semibold py-2 px-20  rounded shadow text-center w-full  lg:w-1/2">
    Go to dashboard
</button>
</a>


@endsection
@php
    $section = 'cart'; 
@endphp
