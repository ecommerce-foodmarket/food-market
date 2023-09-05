@extends('layouts.app')


@section('content')
<h1>Orders List</h1>
<a href="{{route('admin.order.create')}}">Add new </a>

<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Cost</th>
                <th>User</th>
                <th>Status</th>
                <th>Date</th>
                <th width="200px">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>

                <td><a href="{{ route('admin.order.show', $order->id) }}">{{ $order->id }}</a></td>
                <td>{{ $order->cost }}</td>
                <td>{{ $order->user ? $order->user->name : 'N/A' }}</td>
                <td>{{ $order->status->name_status }}</td>
                <td>{{ $order->updated_at}}</td>
                <td>
                    <a href="{{ route('admin.order.edit', $order->id) }}"><button type="submit">Edit</button></a>
                    <form method="POST" action="{{ route('admin.order.destroy', $order->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
</div>
@endsection
