@extends('layouts.app')


@section('content')
<h1>Product List</h1>
<a href="{{route('products.create')}}">Add new Product</a>

<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Price</th>
                <th>Picture</th>
                <th width="200px">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td><a href="{{ route('products.show', $product->id) }}">{{ $product->name_product }}</a></td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->category->name_category }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->picture }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}"><button type="submit">Edit</button></a>
                    <form method="POST" action="{{ route('products.destroy', $product->id) }}">
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
<script>
    $(document).ready(function() {
  $('#myTable').DataTable();
});
</script>
