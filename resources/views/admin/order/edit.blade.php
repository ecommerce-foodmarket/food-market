<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h1>Edit order</h1>
<div class="w-full max-w-xs">
    <form action="{{ route('admin.order.update' , $order->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        {{csrf_field()}}
        <label class="block text-gray-700 text-lg font-bold mb-2" for="cost">Order Total</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="cost" value="{{$order->cost}}">
        <br>
        <label class="block text-gray-700 text-sm font-bold mb-2" for="id_user">User ID</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="id_user" value="{{$order->id_user}}">
        <br>
        <label class="block text-gray-700 text-sm font-bold mb-2" for="id_status">Status ID</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="id_status" value="{{$order->id_status}}">
        <br>
        <label class="block text-gray-700 text-sm font-bold mb-2" for="created_at">Date</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" name="created_at	" value="{{$order->created_at}}">
        <br>
        <button class="bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-4 rounded-full" type="Submit">Update</button>
    </form>
</div>

</body>
</html