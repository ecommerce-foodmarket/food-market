<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <h1> Listado de pedidos por ID </h1>
    <ul>
            <li> id order: {{ $order->id}} </li>
            <li> id user: {{ $order->id_user}} </li>
            <li> estado: {{ $order->status->name_status }} </li>
    </ul>

</body>
</html>
