@extends('layouts.user')

@section('content')

<div class=confirm-image>
    <img src="{{ asset($user->picture) }}" alt="">
</div>


@endsection
@php
    $section = 'cart'; 
@endphp
