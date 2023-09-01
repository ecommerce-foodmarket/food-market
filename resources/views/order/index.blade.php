<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>
<body>
<a href="{{route('order.create')}}">Create new order</a>
    <ul>
        @forelse ($orders as $order)
            <li><a href="{{ route ('order.show', $order->id) }}">Order:{{$order->id}}</a> Total: {{$order->cost}}   <a href="{{ route('order.edit' , $order->id) }}"> EDIT </a> | 
                <form method="POST" action="{{ route('order.destroy' , $order->id) }}"> 
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="DELETE" />
                </form>
            </li>
            @empty
            <p> No data </p>
         @endforelse
    </ul>
</body>
</html>