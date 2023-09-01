
@extends('layouts.app')


@section('content')
    
    <a href="{{route('status.index')}}">Back</a>
    <h1>{{$status->name_status}}</h1>
    
@endsection