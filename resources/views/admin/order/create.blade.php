<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add new order</h1>
    <form action="{{route('admin.order.store')}}"method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="cost">Order Total</label>
        <input type="text" name="cost">
        <label for="id_user">User ID</label>
        <input type="number" name="id_user">
        <label for="id_status">Status ID</label>
        <input type="number" name="id_status">
        <label for="created_at">Date</label>
        <input type="date" name="created_at	">
        <button type="Submit">Add order</button>
    </form>
</body>
</html