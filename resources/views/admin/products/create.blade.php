@extends('layouts.admin')


@section('content')

<main class="flex flex-column justify-center items-center flex-col w-screen bg-green">
    <button class="bg-custom hover:bg-green-800 text-white font-bold py-2 px-4 mx-6 rounded-full BtnMenu "><a href="{{route('admin.products.index')}}">Back</a></button>
    
    <form class="product_form" method="POST" action="{{ route('admin.products.store') }}" >
        @csrf

        
        <div class="create_product_form">
        <div class="mt-4">
            <x-input-label for="name"> Name:
            <x-text-input id="name" class="block mt-1 p-3 w-full" type="text" name="name_product" :value="old('name')"/>
            <x-input-error :messages="$errors->get('name_product')" class="mt-2" />
        </div>

    
        <div class="mt-4">
            <x-input-label for="description"/> Description:
            <x-text-input id="description" class="block mt-1 p-3 w-full" type="text" name="description" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>
       
         <div class="mt-4">
            <label for="id_category" class="block font-semibold">Category</label>
            <select name="id_category" class="form-select p-3">
                @foreach ( $categories as $category )
                 <option value="{{$category['id']}}">{{$category['name_category']}}</option>
                @endforeach
            </select>

        <div class="mt-4">
            <x-input-label for="price" />Price
            <x-text-input id="price" class="block mt-1 p-3 w-full" type="float" name="price" />
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>
        

         <div class="mt-4">
            <x-input-label for="picture" /> Picture:
            <x-text-input id="picture" class="block mt-1p-3 w-full" type="file" name="picture" :value="old('picture')"  />
            <x-input-error :messages="$errors->get('picture')" class="mt-2" />
        </div>
        
        <button class="bg-custom hover:bg-green-800 text-white font-bold py-2 px-4 mx-6 rounded-full BtnForm" type="submit">ADD PRODUCT</button>
        
    </div>
    </div>
    </form>
</main>
</x-guest-layout>
@endsection
