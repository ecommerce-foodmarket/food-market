@extends('layouts.admin')
@section('content')

<body>
<main class="edit-container w-full">
    <form class='w-1/2 m-10' action="{{ route('admin.order.update' , $order->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        {{csrf_field()}}
        <label class="block text-gray-700 text-lg font-bold mb-2" for="cost">Order Total</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="cost" value="{{$order->cost}}">
        <br>
        <label class="block text-gray-700 text-lg font-bold mb-2" for="id_user">User ID</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-3" type="number" name="id_user" value="{{$order->id_user}}">
        <br>
        <label class="block text-gray-700 text-lg font-bold mb-2" for="id_status">Status ID</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-3" type="number" name="id_status" value="{{$order->id_status}}">
        <br>
        <label class="block text-gray-700 text-lg font-bold mb-2" for="created_at">Date</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-3" type="date" name="created_at	" value="{{$order->created_at}}">
        <br>
        <br>
        <button class="bg-custom hover:bg-green-800 text-white font-bold py-2 px-4 rounded-full" type="Submit">Update</button>
    </form>
</main>
</body>
@endsection
</html