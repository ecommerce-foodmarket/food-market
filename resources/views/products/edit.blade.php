Edit 
@extends('layouts.admin')

@section('content')

<main class="flex flex-column justify-center items-center flex-col w-screen bg-green">
    <h1>Product Edition</h1>
    <button class="button-product shadow hover:bg-green-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"><a href="{{route('admin.products.index')}}">Back</a></button>

    <form action="{{route('admin.products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="bg-white shadow-xl rounded px-8 pt-6 pb-8 mb-4">
            <div class="mt-4">
        <label for="name" class="">Name</label>
        <input type="text" name="name_product" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  value="{{$product->name_product}}">
            </div>
        <div class="mt-4">
        <label for="description">Description</label>
        <input type="text" name="description" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  value="{{$product->description}}">
    </div>
        <div class="mt-4">
        <label for="id_category" class="block font-semibold">Category</label>
            <select name="id_category" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" value="{{$product->id_category}}">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $product->id_category == $category->id ? 'selected' : '' }}>
                    {{ $category->name_category }}
                </option>
            @endforeach
            </select>
        </div>
            <div class="mt-4">
        <label for="price">Price</label>
        <input type="number" name="price" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  value="{{$product->price}}">
    </div>
        <div class="mt-4">
        <label for="picture">Current Picture</label>
        <img src="{{ asset('storage/' . $product->picture) }}" alt="Current Picture" width="100" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
    </div>
        <div class="mt-4">
        <label for="new_picture">New Picture</label>
        <input type="file" name="new_picture" class="block mt-1 p-3 w-full"  id="new_picture">
        <button class="button-product shadow  hover:bg-green-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="Submit">Update Product</button>
    </div>
    </form>
</main>
    @endsection

