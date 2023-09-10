@extends('layoutsUser.app')

@section('content')
<a href="{{ route('user.index') }}">Back</a>
<table>
    <tr>
        <th>Name</th>
        <th>Email Address</th>
        <th>Phone No.</th>
        <th>Address</th>
        <th>House No.</th>
        <th>City</th>
        <th>Photo</th>
    </tr>
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->phone }}</td>
        <td>{{ $user->address }}</td>
        <td>{{ $user->house_n }}</td>
        <td>{{ $user->city }}</td>
        <td>{{ $user->picture }}</td>


    </tr>
</table>
@endsection
