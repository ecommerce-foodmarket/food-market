@extends('layouts.admin')
@section('content')

<main class="flex flex-column justify-center items-center flex-col w-screen bg-green">
    <button class="bg-custom hover:bg-green-800 text-white font-bold py-2 px-4 mx-6 rounded-full BtnMenu "><a href="{{route('admin.products.index')}}">Back</a></button>

    <form class="product_form" method="POST" action="{{ route('admin.products.update',$product->id) }}" >
        @method('PUT')
        @csrf
        <div class="create_product_form">
        <div class="mt-4">
            <x-input-label for="name" class="name_font"> Name:
            <x-text-input id="name" class="block mt-1 p-3 w-full" type="text" name="name_product" value="{{$product->name_product}}"/>
            <x-input-error :messages="$errors->get('name_product')" class="mt-2" />
        </div>
        
        <div class="mt-4">
            <x-input-label for="description" class="name_font"/> Description:
            <x-text-input id="description" class="block mt-1 p-3 w-full" type="text" name="description" value="{{$product->description}}"/>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

         <div class="mt-4">
            <label for="id_category" class="name_font">Category</label>
            <select name="id_category" class="form-select p-3" value="{{$product->id_category}}">
                @foreach ( $categories as $category )
                 <option value="{{$category->id}}"{{ $product->id_category == $category->id ? 'selected' : '' }}>{{ $category->name_category }}</option>
                @endforeach
            </select>

        <div class="mt-4">
            <x-input-label for="price" class="block font-semibold name_font"/>Price
            <x-text-input id="price" class="block mt-1 p-3 w-full " type="float" name="price" value="{{$product->price}}" />
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>


        {{-- <div class="mt-4">
            <x-input-label for="picture" class=" name_font" /> Current Picture:
            <img src="{{ asset('storage/' . $product->picture) }}" alt="Current Picture" width="100">
            <x-input-error :messages="$errors->get('picture')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="new_picture">New Picture</label>
                <x-text-input type="file" name="new_picture" id="new_picture">
        </div> --}}

        <button class="bg-custom hover:bg-green-800 text-white font-bold py-2 px-4 mx-6 rounded-full" type="submit">UPDATE</button>

    </div>
    </div>
    </form>
</main>

@endsection
