<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit order</h1>
    <form action="{{ route('order.update' , $order->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        {{csrf_field()}}
        <label for="cost">Order Total</label>
        <input type="text" name="cost" value="{{$order->cost}}">
        <label for="id_user">User ID</label>
        <input type="number" name="id_user" value="{{$order->id_user}}">
        <label for="id_status">Status ID</label>
        <input type="number" name="id_status" value="{{$order->id_status}}">
        <label for="created_at">Date</label>
        <input type="date" name="created_at	" value="{{$order->created_at}}">
        <button type="Submit">Update</button>
    </form>
</body>
</html