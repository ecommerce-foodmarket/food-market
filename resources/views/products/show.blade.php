@extends('layouts.admin')

@section('content')
<body>
    <a href="{{route('admin.products.index')}}">Back</a>
    <h1>{{$product->name_product}}</h1>
        <p>{{$product->description}}</p>
        <h4>Category: </h4><p>{{ $product->category->name_category }}</p>
        <p>{{$product->price}}</p>
        <p>{{$product->picture}}</p>
</body>
@endsection

@php
    $section = 'cart'
@endphp
