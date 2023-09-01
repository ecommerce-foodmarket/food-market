@extends('layouts.app')

@section('content')
   
<h1>Category Edition</h1>
<a href="{{ route('category.index') }}">Back</a>
<form method="POST" action="{{ route('category.update', $category->id) }}">
    @method('PUT')
    @csrf
    <label for="name_category">Name</label>
    <input type="text" name="name_category" value="{{ $category->name_category }}">
   
    <button type="submit">Update</button>
</form>

@endsection
