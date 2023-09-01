<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Product List</h1>
<a href="{{route('products.create')}}">Add new Product</a>

<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Price</th>
                <th>Picture</th>
                <th width="200px">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td><a href="{{ route('products.show', $product->id) }}">{{ $product->name_product }}</a></td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->name_category }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->picture }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}"><button type="submit">Edit</button></a>
                    <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    {{-- @foreach ($products as $product)
    <p><a href="{{route('products.show', $product->id)}}">{{$product->name_product}}</a>
        <a href="{{route('products.edit', $product->id)}}">EDIT</a>
        <form method="POST" action="{{route('products.destroy', $product->id)}}">
            @csrf
            @method('DELETE')
            <input type="submit" value="DELETE"/>
        </form>
    </p>
    <p><a href="{{route('products.show', $product->id)}}">{{$product->description}}</a>
         <a href="{{route('products.edit', $product->id)}}">EDIT</a>
         <form method="POST" action="{{route('products.destroy', $product->id)}}">
            @csrf
            @method('DELETE')
            <input type="submit" value="DELETE"/>
        </form>
        </p>
    <p><a href="{{route('products.show', $product->id)}}"></a>{{$product->id_category}}</a>
        <a href="{{route('products.edit', $product->id)}}">EDIT</a>
        <form method="POST" action="{{route('products.destroy', $product->id)}}">
            @csrf
            @method('DELETE')
            <input type="submit" value="DELETE"/>
        </form>
    </p>
    <p><a href="{{route('products.show', $product->id)}}"></a>{{$product->price}}</a>
        <a href="{{route('products.edit', $product->id)}}">EDIT</a>
        <form method="POST" action="{{route('products.destroy', $product->id)}}">
            @csrf
            @method('DELETE')
            <input type="submit" value="DELETE"/>
        </form>
    </p>
    <p><a href="{{route('products.show', $product->id)}}"></a>{{$product->picture}}</a>
        <a href="{{route('products.edit', $product->id)}}">EDIT</a>
        <form method="POST" action="{{route('products.destroy', $product->id)}}">
            @csrf
            @method('DELETE')
            <input type="submit" value="DELETE"/>
        </form>
    @endforeach --}}
</div>
</body>
</html>
