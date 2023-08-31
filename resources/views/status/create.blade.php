@extends('layouts.app')


@section('content')
    
    <h1>Add new Status</h1>
    <a href="{{route('status.index')}}">Back</a>
    <form action="{{route('status.store')}}" method="POST">
        @csrf
        <label for="name_status">Name</label>
        <input type="text" name="name_status">
        <button type="Submit">Add Status</button>
    </form>
</body>
</html>

@endsection