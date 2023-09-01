@extends('layouts.app')

@section('content')
   
<h1>Role Edition</h1>
<a href="{{ route('role.index') }}">Back</a>
<form method="POST" action="{{ route('role.update', $role->id) }}">
    @method('PUT')
    @csrf
    <label for="type">Role</label>
    <input type="text" name="type" value="{{ $role->type }}">
   
    <button type="submit">Update</button>
</form>

@endsection
