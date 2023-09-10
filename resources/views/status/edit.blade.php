@extends('layouts.app')

@section('content')
   
<h1>Status Edition</h1>
<a href="{{ route('status.index') }}">Back</a>
<form method="POST" action="{{ route('status.update', $status->id) }}">
    @method('PUT')
    @csrf
    <label for="name_status">Name</label>
    <input type="text" name="name_status" value="{{ $status->name_status }}">
   
    <button type="submit">Update</button>
</form>

@endsection