@extends('layouts.admin')



@section('content')
    
    <a href="{{route('admin.products.index')}}">Back</a>
    <form action="{{route('admin.products.store')}}" method="POST">
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
        <input type="file" name="picture" id="product_picture">
        <button type="Submit">Add Product</button>
    </form>
    @endsection
