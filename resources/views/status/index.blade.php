@extends('layouts.app')

@section('content')
    
<h1>Status List</h1>
<a href="{{ route('status.create') }}">Add new Status</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th width="200px">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($statuses as $status)
        <tr>
            <td>{{ $status->id }}</td>
            <td><a href="{{ route('status.show', $status->id) }}">{{ $status->name_status }}</a></td>
            <td>
                <a href="{{ route('status.edit', $status->id) }}"><button type="submit">Edit</button></a> 
                <form method="POST" action="{{ route('status.destroy', $status->id) }}">
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
