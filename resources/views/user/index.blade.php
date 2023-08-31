@extends('layoutsUser.app')
@section('content')
    
    <a href="{{ route('user.create')}}">Create new user</a>

    <h1>User list:</h1>
    @if($users->isEmpty())
    <p>The user list empty</p>
    @else
    <ul>
        @foreach($users as $user)
        <li><a href="#">{{$user->name}}</a> | <a href="{{ route('user.edit', $user->id)}}">EDIT</a> | <a href="#">DELETE</a> </li>
        @endforeach
    </ul>
    @endif
    @endsection

