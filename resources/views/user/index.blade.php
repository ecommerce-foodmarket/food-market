@extends('layoutsUser.app')
@section('content')

    <a href="{{ route('user.create')}}">Create new user</a>

    <h1>User list:</h1>
    @if($users->isEmpty())
    <p>The user list empty</p>
    @else

        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Email Address</th>
                <th>Phone No.</th>
                <th>Address</th>
                <th>House No.</th>
                <th>City</th>
                <th>Role</th>
                <th>Photo</th>
                <th>Details</th>
                <th>Delete</th>
            </tr>
        </thead>
            <tbody>
            <tr>
                @foreach($users as $user)
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->house_n }}</td>
                <td>{{ $user->city }}</td>
                <td>{{ $user->role->type }}</td>
                <td>{{ $user->photo }}</td>
                <td>    <a href="{{ route('user.show', $user->id) }}"></a>     |
                        <a href="{{ route('user.edit', $user->id)}}">EDIT</a>
                </td>
                <td>
                    <form method="POST" action="{{ route('user.destroy', $user->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="DELETE">
                    </form>
                </td>
            </tr>
        </tbody>
        </table>

        @endforeach

    @endif
    @endsection

