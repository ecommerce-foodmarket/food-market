@extends('layouts.app')


@section('content')
    
    <h1>Add new Role</h1>
    <a href="{{route('role.index')}}">Back</a>
    <form action="{{route('role.store')}}" method="POST">
        @csrf
        <label for="type">Role</label>
        <input type="text" name="type">
        <button type="Submit">Add Role</button>
    </form>
</body>
</html>

@endsection