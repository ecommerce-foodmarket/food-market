

@extends('layouts.admin')
@section('content')

<body> 
<div class="table-container">
   <div id="table" class="relative overflow-x-auto w-full">    
    <table id="myTable" class="display">
        <h2> Order: {{$order->id}} - {{ $order->status->name_status }}</h2>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>

            <th  scope="col" class="px-6 py-3">Product</th> 
            <th  scope="col" class="px-6 py-3">Quantity</th> 
        </tr>
    </thead>
    <tbody>
        
            @foreach($order->products as $product)
                <tr>
    
                    <td>{{ $product->name_product }}</td>
                    <td>{{ $product->pivot->amount }}</td>
                </tr>
                
            
            @endforeach
               
            
        
       
    </tbody>
</table>

</div>
<button class="bg-custom hover:bg-green-800 text-white font-bold py-2 px-4 ml-2 rounded-full">
    <a href="{{ route('admin.order.index') }}">BACK</a>
</button>
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