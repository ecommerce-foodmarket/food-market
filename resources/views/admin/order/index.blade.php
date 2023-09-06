
@extends('layouts.admin')
@section('content')

<body> 
<div class="table-container">
   <div id="table" class="relative overflow-x-auto w-full">    
    <table id="myTable" class="display">
        <h2> Processing Order details </h2>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">Order</th>
            <th  scope="col" class="px-6 py-3">Total</th>
            <th  scope="col" class="px-6 py-3">Actions</th> 
        </tr>
    </thead>
    @forelse ($orders as $order)
    
    <tbody>
        <tr>
            <td><a href="{{ route ('admin.order.shodw', $order->id) }}">Order:{{$order->id}}</a></td>
            <td>{{$order->cost}}</td>
            
        <td class="button-container">
            <form method="POST" action="{{ route('admin.order.destroy' , $order->id) }}"> 
                @csrf
                @method('DELETE')
                <input class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-full" type="submit" value="DELETE" />
            </form>
            <form method="GET" action="{{ route('admin.order.edit' , $order->id) }}"> 
                @csrf
                <input class="bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-4 rounded-full" type="submit" value="EDIT" />
            </form>  


            {{-- <button class="bg-custom hover:bg-green-800 text-white font-bold py-2 px-4 mx-6 rounded-full"><a href="{{ route('admin.order.edit', $order->id) }}">EDIT</a></button> --}}
            {{-- <button class="bg-custom hover:bg-green-800 text-white font-bold py-2 px-4 mx-6 rounded-full"><a href="{{ route('admin.product.index', $order->id) }}">DETALLE PEDIDO</a></button> --}}
            {{-- <form method="GET" action="{{ route('admin.order.edit' , $order->id) }}"> 
                @csrf
                <input class="bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-4 rounded-full" type="submit" value="EDIT" />
            </form>  --}}
        </td> 
        
        {{-- <td>
            {{$user->name}}
        </td>
        <td>
            {{$user->phone}}
        </td>
        <td>
            {{$user->address}}
        </td> --}}
        @empty
        <p> No data </p>
     @endforelse
        </tr>
    </tbody>
</table>
</div>
</div>
<script>
    $(document).ready(function() {
  $('#myTable').DataTable();
});
</script>
</div>  
@endsection
</body>
</html>