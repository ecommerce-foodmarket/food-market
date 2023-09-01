<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hola usuario, este es tu pedido: </h1>
    @foreach ($product->products as $product)

    <h3>Nombre: {{$product->name_product}}</h3>  
    <h5>Descripción: {{$product->description}}</h5>  
    <h5>Precio: {{$product->price}}</h5>
    <h5>Cantidad: {{$product->pivot->amount}}</h5>
    
    
    @endforeach
</body>
</html>