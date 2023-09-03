@extends('layoutsUser.app')
@section('content')
<div>
    <div class="container max-w-full mx-auto md:py-24 px-6">
        <div >
            <a href="{{ route('user.index')}}"  class="bg-DarkSlateGray text-white font-bold text-4xl rounded text-center align-content-center p-1 "><</a>
                <h1 class="">Sing Up Now</h1>
                <p>Register and eat</p>
        </div>

        <div>
            <form action="{{route('user.store')}}" method="POST" //enctype="multipart/form-data">
            {{csrf_field()}}
            @csrf
            <div>
                <label for="picture">Photo</label>
                <br>
                <input class="" type="file" name="picture" id="user_picture" placeholder="Add Photo">
                <br><br>
                <label for="name">Full Name</label>
                <br>
                <input type="text" name="name" placeholder="Type your full name" class="border border-gray-300 rounded font-Poppins">
                <br>
                <label for="email">Email Address</label>
                <br>
                <input type="email" name="email" placeholder="Type your email address">
                <br>
                <label for="password">Password</label>
                <br>
                <input type="password" name="password" placeholder="Type your password">
                <br>
            </div>
        <div class="container max-w-full mx-auto md:py-24 px-6">
            <label for="phone">Phone No.</label>
            <br>
            <input type="text" name="phone" placeholder="Type your phone number">
            <br>
            <label for="address">Address</label>
            <br>
            <input type="text" name="address" placeholder="Type your address">
            <br>
            <label for="house_n">House No.</label>
            <br>
            <input type="text" name="house_n" placeholder="Type your house number">
            <br>
            <label for="city">City</label>
            <br>
            <input type="text" name="city" placeholder="Select your city">
            <br>
            <input type="hidden" name="id_rol" value="3">
            <br>
            <button href="" class="bg-DarkSlateGray  text-LightOrange font-semibold font-Poppins py-2 px-20  rounded shadow text-center">
            Sing Up Now
            </button>
    
    </form>
        </div>
    </div>
</div>
    @endsection
