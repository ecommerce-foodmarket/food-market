
@extends('layouts.app')


@section('content')
    
    <a href="{{route('category.index')}}">Back</a>
    <h1>{{$category->name_category}}</h1>
    
@endsection