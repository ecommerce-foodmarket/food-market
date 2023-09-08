@extends('layouts.admin')
@section('content')

<main class= "flex-col flex-wrap w-screen">
<button class="bg-custom hover:bg-green-800 text-white font-bold py-2 px-4 mx-6 rounded-full"><a href="{{route('admin.products.create')}}">+ Add Menu</a></button>


        <div class="cardContainer ">
            @foreach ($products as $product)
            <div class="max-w-sm rounded overflow-hidden shadow-lg space-y-1.5">
                <img src="{{ asset($product->picture)}}" alt="">
                <div class="px-6 py-4 ">
                  <div class="font-bold text-xl text-white-700 mb-2">{{ $product->name_product }}</div>
                  <p class="text-gray-700 text-base">
                    {{ $product->description }}
                  </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Category: {{ $product->category->name_category }}</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Price: {{ $product->price }}</span>
                </div>
                
            </div>
            @endforeach
        </div>
</main>

@endsection

