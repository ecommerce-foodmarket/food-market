@extends('layoutsUser.app')
@section('content')
<a href="{{route('user.index')}}">Back</a>
    <form method="POST" action="{{ route('user.update', $user->id) }}">
        @method('PUT')
        @csrf
        <label for="name">Full Name</label>
        <input type="text" name="name"value="{{ $user->name }}">
        <br>
        <label for="email">Email Address</label>
        <input type="email" name="email" value="{{ $user->email }}">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" value="{{ $user->password }}">
        <br>
        <label for="phone">Phone No.</label>
        <input type="text" name="phone" value="{{ $user->phone }}">
        <br>
        <label for="address">Address</label>
        <input type="text" name="address" value="{{ $user->address }}">
        <br>
        <label for="house_n">House No.</label>
        <input type="number" name="house_n" value="{{ $user->house_n }}">
        <br>
        <label for="city">City</label>
        <input type="text" name="city" value="{{ $user->city }}">
        <br>
        <label for="id_rol" class="block font-semibold">Rol</label>
            <select name="id_rol" class="form-select" value="{{$user->id_rol}}">
                @foreach ($roles as $role)
                <option value="{{ $role->id }}" {{ $user->id_rol == $role->id ? 'selected' : '' }}>
                    {{ $role->type }}
                </option>
            @endforeach
            </select>
        <br>
        <label for="picture">Photo</label>
        <br>
        <input type="file" name="picture" id="user_picture" value="{{ $user->picture }}">
        <br><br>
        <input type="submit" value="Update">
    </form>
@endsection
