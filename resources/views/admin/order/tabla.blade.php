@forelse ($orders as $order)
<table id="myTable" class="display">
    <thead>
        <tr>
            <th>Order</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="{{ route ('admin.order.show', $order->id) }}">Order:{{$order->id}}</a></td>
            <td>{{$order->cost}}</td>
            <form method="POST" action="{{ route('admin.order.destroy' , $order->id) }}"> 
                @csrf
                @method('DELETE')
                <input type="submit" value="DELETE" />

            </form>
            <form method="GET" action="{{ route('admin.order.edit' , $order->id) }}"> 
                @csrf
                <input type="submit" value="EDIT" />

            </form>
        </li>
        @empty
        <p> No data </p>
     @endforelse
        </tr>
    </tbody>
</table>
            