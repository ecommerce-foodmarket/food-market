@extends('layoutsUser.app')
@section('content')
    <h1>Sing Up Now</h1>
    <a href="{{ route('user.index')}}">Back</a>
    <form action="{{route('user.store')}}" method="POST" //enctype="multipart/form-data">
        {{csrf_field()}}
        @csrf
        <label for="name">Full Name</label>
        <input type="text" name="name">
        <br>
        <label for="email">Email Address</label>
        <input type="email" name="email">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password">
        <br>
        <label for="phone">Phone No.</label>
        <input type="text" name="phone">
        <br>
        <label for="address">Address</label>
        <input type="text" name="address">
        <br>
        <label for="house_n">House No.</label>
        <input type="number" name="house_n">
        <br>
        <label for="city">City</label>
        <input type="text" name="city">
        <br>
        <label for="id_rol">Rol</label>
        <input type="number" name="id_rol">
        <br>
        <label for="picture">Photo</label>
        <br>
        <input type="file" name="picture" id="user_picture">
        <br><br>
        <input type="submit" value="Sing Up Now">
    </form>
    @endsection