@extends('layouts.app')

@section('content')
    
<h1>Category List</h1>
<a href="{{ route('category.create') }}">Add new Category</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th width="200px">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td><a href="{{ route('category.show', $category->id) }}">{{ $category->name_category }}</a></td>
            <td>
                <a href="{{ route('category.edit', $category->id) }}"><button type="submit">Edit</button></a> 
                <form method="POST" action="{{ route('category.destroy', $category->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
