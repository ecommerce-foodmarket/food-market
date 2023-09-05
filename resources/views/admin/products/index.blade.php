@extends('layouts.admin')
@section('content')

   <div id="table" class="relative overflow-x-auto">
     
    <table id="myTable" class="display">
        <h2> Processing Order details </h2>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">ID</th>
            <th  scope="col" class="px-6 py-3">Product</th>
            <th  scope="col" class="px-6 py-3">Description</th> 
            <th  scope="col" class="px-6 py-3">Category</th>
            <th  scope="col" class="px-6 py-3">Price</th>
        </tr>
    </thead>
    @forelse ($products as $product)
    
    <tbody>
        <tr>
            <td><a href="{{ route ('admin.order.show', $product->id) }}">ID:{{$product->id}}</a></td>
            <td>{{$product->name_product}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->id_category}}</td>
            <td>{{$product->price}}</td>
            
        <td class="button-container">
            <form method="POST" action="{{ route('products.destroy' , $product->id) }}"> 
                @csrf
                @method('DELETE')
                <input class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-full" type="submit" value="DELETE" />
            </form>
            <button class="bg-custom hover:bg-green-800 text-white font-bold py-2 px-4 mx-6 rounded-full"><a href="{{ route('products.edit', $product->id) }}">EDIT</a></button>
        </td>
        @empty
        <p> No data </p>
     @endforelse
        </tr>
    </tbody>
</table>
</div>


<script>
    $(document).ready(function() {
  $('#myTable').DataTable();
});
</script>
</div>  
@endsection
