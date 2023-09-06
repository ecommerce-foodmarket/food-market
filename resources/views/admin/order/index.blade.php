<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link rel="icon" type="image/png" href="public\faviconSpeedy.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="https:////cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    @forelse ($orders as $order)
<div id="table" class="relative overflow-x-auto">
<table id="myTable" class="display">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">Order</th>
            <th  scope="col" class="px-6 py-3">Total</th>
            <th  scope="col" class="px-6 py-3">Actions</th> 
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="{{ route ('admin.order.shodw', $order->id) }}">Order:{{$order->id}}</a></td>
            <td>{{$order->cost}}</td>
            
        <td class="button-container">
            <form method="POST" action="{{ route('admin.order.destroy' , $order->id) }}"> 
                @csrf
                @method('DELETE')
                <input type="submit" value="DELETE" />

            </form>
            <button class="bg-custom hover:bg-green-800 text-white font-bold py-2 px-4 mx-6 rounded-full"><a href="{{ route('admin.order.edit', $order->id) }}">EDIT</a></button>
             {{-- <form method="GET" action="{{ route('admin.order.edit' , $order->id) }}"> 
                @csrf
                <input type="submit" value="EDIT" />
            </form>
        @empty
        <p> No data </p>
     @endforelse
        </tr>
    </tbody>
</table>


<script>
    $(document).ready(function() {
  $('#myTable').DataTable();
});
</script>
</div>  
</body>
</html>

