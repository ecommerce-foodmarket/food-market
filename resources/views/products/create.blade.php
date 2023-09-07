@extends('layouts.admin')


@section('content')

<main class="flex flex-column justify-center items-center flex-col w-screen bg-green">
    <button class="bg-custom shadow hover:bg-green-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"><a href="{{route('admin.products.index')}}">Back</a></button>
    
    <form class="product_form" method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data" >
        @csrf

        
        <div class="bg-white shadow-xl rounded px-8 pt-6 pb-8 mb-4">
        <div class="mt-4">
            <x-input-label for="name" class="name_font"> Name:
            <x-text-input id="name" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="name_product" :value="old('name')"/>
            <x-input-error :messages="$errors->get('name_product')" class="mt-2" />
        </div>

    
        <div class="mt-4">
            <x-input-label for="description" class="name_font"/> Description:
            <x-text-input id="description" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="description" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>
       
         <div class="mt-4">
            <label for="id_category" class="name_font">Category</label>
            <select name="id_category" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                @foreach ( $categories as $category )
                 <option value="{{$category['id']}}">{{$category['name_category']}}</option>
                @endforeach
            </select>

        <div class="mt-4">
            <x-input-label for="price" class="block font-semibold name_font"/>Price
            <x-text-input id="price" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="float" name="price" />
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>
        

         <div class="mt-4">
            <x-input-label for="picture" class=" name_font" /> Picture:
            <x-text-input id="picture" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="file" name="picture"   />
            <x-input-error :messages="$errors->get('picture')" class="mt-2" />
        </div>
        
        <button class="bg-custom shadow hover:bg-green-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 mt-10 rounded" type="submit">ADD PRODUCT</button>
        
    </div>
    </div>
    </form>
</main>
</x-guest-layout>
@endsection
