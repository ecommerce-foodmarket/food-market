@extends('layouts.admin')

@section('content')
<body>
    <a href="{{route('admin.products.index')}}">Back</a>
    <h1>{{$product->name_product}}</h1>
        <p>{{$product->description}}</p>
        <p>{{ $product->category->name_category }}</p>
        <p>{{$product->price}}</p>
        <p>{{$product->picture}}</p>
</body>
@endsection
