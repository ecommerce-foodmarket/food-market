@extends('layouts.admin')


@section('content')
    <h1>Product Edition</h1>
    <a href="{{route('admin.products.index')}}">Back</a>

    <form action="{{route('admin.products.update', $product->id)}}" method="POST">
        @method('PUT')
        @csrf

        <label for="name_product">Name</label>
        <input type="text" name="name_product" value="{{$product->name_product}}">
        <label for="description">Description</label>
        <input type="text" name="description" value="{{$product->description}}">
        <label for="id_category" class="block font-semibold">Category</label>
            <select name="id_category" class="form-select" value="{{$product->id_category}}">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $product->id_category == $category->id ? 'selected' : '' }}>
                    {{ $category->name_category }}
                </option>
            @endforeach
            </select>
        <label for="price">Price</label>
        <input type="float" name="price" value="{{$product->price}}">
        <label for="picture">Current Picture</label>
        <img src="{{ asset('storage/' . $product->picture) }}" alt="Current Picture" width="100">

        <label for="new_picture">New Picture</label>
        <input type="file" name="new_picture" id="new_picture">
        <button type="Submit">Update Product</button>
    </form>
    @endsection
