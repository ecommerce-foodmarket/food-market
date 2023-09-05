@extends('layouts.app')

@section('content')
    
<h1>Role List</h1>
<a href="{{ route('role.create') }}">Add new Role</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Role</th>
            <th width="200px">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roles as $role)
        <tr>
            <td>{{ $role->id }}</td>
            <td><a href="{{ route('role.show', $role->id) }}">{{ $role->type }}</a></td>
            <td>
                <a href="{{ route('role.edit', $role->id) }}"><button type="submit">Edit</button></a> 
                <form method="POST" action="{{ route('role.destroy', $role->id) }}">
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
