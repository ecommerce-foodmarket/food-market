@extends('layouts.user')
@section('content')

{{-- header --}}

@include('components.header', [
    'title' => 'SpeedyBite',
    'subtitle' => "Let's get some foods, " . $user->name,
    'picture' => $user->picture,
    'alt' => $user->name,
])
{{-- <img src="{{ asset($user->picture) }}" alt=""> --}}

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
