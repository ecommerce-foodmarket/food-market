@extends('layouts.user')
@section('content')

{{-- header --}}

@include('components.header', [
    'title' => 'SpeedyBite',
    'subtitle' => "Let's get some foods, " . $user->name,
    'image' => $user->picture ? asset($user->picture) : asset('assets/images/default_profile_image.png'),
   
    'alt' => $user->name,
])

{{-- Scroll de imágenes --}}
<div>
    @include('components.cards')
</div>

{{-- Productos por categoría --}}

<div>
    @include('components.tabs')
</div>

@endsection

@php
   $section = 'dashboard';
@endphp
