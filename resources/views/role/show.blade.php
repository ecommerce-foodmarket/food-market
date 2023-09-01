@extends('layouts.app')


@section('content')
    
    <a href="{{route('role.index')}}">Back</a>
    <h1>{{$role->type}}</h1>
    
@endsection