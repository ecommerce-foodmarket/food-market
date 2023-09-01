<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="{{route('products.index')}}">Back</a>
<h1>{{$product->name_product}}</h1>
<p>{{$product->description}}</p>
<p>{{ $product->category->name_category }}</p>
<p>{{$product->price}}</p>
<p>{{$product->picture}}</p>
</body>
</html>
