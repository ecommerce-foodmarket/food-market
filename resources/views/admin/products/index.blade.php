@extends('layouts.app')


@section('content')
<h1>Product List</h1>
<a href="{{route('admin.products.create')}}">Add new Product</a>

<div>
    {{-- <table>
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
        <tbody> --}}
            @foreach ($products as $product)
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="/assets/images/Gatete.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">{{ $product->name_product }}</div>
                  <p class="text-gray-700 text-base">
                    {{ $product->description }}
                  </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $product->category->name_category }}</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $product->price }}</span>

                </div>
              </div>
@endforeach
            {{-- @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td><a href="{{ route('admin.products.show', $product->id) }}">{{ $product->name_product }}</a></td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->category->name_category }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->picture }}</td>
                <td>
                    <a href="{{ route('admin.products.edit', $product->id) }}"><button type="submit">Edit</button></a>
                    <form method="POST" action="{{ route('admin.products.destroy', $product->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach --}}
        </tbody>
</div>
@endsection

