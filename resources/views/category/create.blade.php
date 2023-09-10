@extends('layouts.app')


@section('content')
    
    <h1>Add new Category</h1>
    <a href="{{route('category.index')}}">Back</a>
    <form action="{{route('category.store')}}" method="POST">
        @csrf
        <label for="name_category">Name</label>
        <input type="text" name="name_category">
        <button type="Submit">Add Category</button>
    </form>
</body>
</html>

@endsection