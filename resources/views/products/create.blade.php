<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add new Product</h1>
    <a href="{{route('products.index')}}">Back</a>
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <label for="name_product">Name</label>
        <input type="text" name="name_product">
        <label for="description">Description</label>
        <input type="text" name="description">
        <label for="id_category" class="block font-semibold">Category</label>
            <select name="id_category" class="form-select">
                @foreach ( $categories as $category )
                 <option value="{{$category['id']}}">{{$category['name_category']}}</option>
                @endforeach
            </select>
        <label for="price">Price</label>
        <input type="float" name="price">
        <label for="picture">Foto</label>
        <input type="file" name="picture" id="user_picture">
        <button type="Submit">Add Product</button>
    </form>
</body>
</html>
