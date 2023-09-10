@extends('layouts.admin')
@section('content')

<main class="flex flex-column justify-center items-center flex-col flex-wrap w-full bg-green">
<button class="button-product color-white shadow hover:bg-green-600 focus:shadow-outline focus:outline-none mt-10 text-white font-bold py-2 px-4 rounded"><a href="{{route('admin.products.create')}}">+ Add Menu</a></button>


        <div class="max-w-full flex flex-row flex-wrap justify-around mx-3 my-3 ">
            @foreach ($products as $product)
            <div class="card-product w-1/6 rounded overflow-hidden shadow-lg space-y-1.5 mx-3 my-3 ">
              <div >
                <img src="{{ asset($product->picture) }}" alt="" class= "w-full h-52">
            </div>

                <div class="px-6 py-4 w-full h-52 ">
                  <div class="font-bold text-xl text-white-700 mb-2">{{ $product->name_product }}</div>
                  <p class="text-gray-700 text-base">
                    {{ $product->description }}
                  </p>
                </div>
                <div class="flex flex-row justify-between  px-6 pt-4 pb-2">
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Category: {{ $product->category->name_category }}</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Price: {{ $product->price }}</span>
                </div>
                <div class="flex mt-4 space-x-3  mb-6 h-20 justify-around content-center">
                    <div>
                        <button class="button-product inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-white rounded-lg hover:bg-white-800 focus:ring-4 focus:outline-none focus:ring-blue-300 "><a href="{{ route('admin.products.edit', $product->id) }}">EDIT</a></button>
                    </div>
                        <form method="POST" action="{{ route('admin.products.destroy', $product->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900  border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">DELETE</button>
                        </form>

                </div>
            </div>
            @endforeach
        </div>
</main>

@endsection

