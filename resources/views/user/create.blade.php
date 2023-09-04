@extends('layoutsUser.app')
@section('content')
<div>
    <div class="container max-w-full mx-auto content-center">
        <div class="flex flex-nowrap w-full m-2">
        <a href="{{  url('/login')}}"  class=" w-8 h-8 bg-DarkSlateGray text-white font-bold text-xl rounded text-center align-content-center px-1 "><</a>
        <div class="pl-5" >
                <h1 class="text-dark font-Poppins text-3xl font-bold">Sing Up</h1>
                <div>
                    <p class="text-gray-300 font-Poppins text-md">Register and eat</p>
                </div>
        </div>
        </div>
    </div>
    <div>
            <form action="{{route('user.store')}}" method="POST" //enctype="multipart/form-data">
            {{csrf_field()}}
            @csrf
            <div>
                <div>
                    <label for="picture" class="font-Poppins ">Photo</label>
                    <br>
                    <input class="h-16 w-16 object-cover rounded-full bg-gray-300" type="file" name="picture" id="user_picture" placeholder="Add Photo">
                </div>
                <br><br>
                <label clas="font-Poppins " for="name">Full Name</label>
                <br>
                <input class="font-Poppins border border-gray-300 rounded" type="text" name="name" placeholder="Type your full name" class="border border-gray-300 rounded font-Poppins">
                <br>
                <label class="font-Poppins " for="email">Email Address</label>
                <br>
                <input class="font-Poppins border border-gray-300 rounded" type="email" name="email" placeholder="Type your email address">
                <br>
                <label class="font-Poppins " for="password">Password</label>
                <br>
                <input class="font-Poppins border border-gray-300 rounded" type="password" name="password" placeholder="Type your password">
                <br>
            </div>
        <div class="container max-w-full mx-auto md:py-24 px-6">
            <label for="phone">Phone No.</label>
            <br>
            <input class="font-Poppins border border-gray-300 rounded" type="text" name="phone" placeholder="Type your phone number">
            <br>
            <label for="address">Address</label>
            <br>
            <input class="font-Poppins border border-gray-300 rounded" type="text" name="address" placeholder="Type your address">
            <br>
            <label for="house_n">House No.</label>
            <br>
            <input class="font-Poppins border border-gray-300 rounded" type="text" name="house_n" placeholder="Type your house number">
            <br>
            <label for="city">City</label>
            <br>
            <input class="font-Poppins border border-gray-300 rounded" type="text" name="city" placeholder="Select your city">
            <br>
            <input type="hidden" name="id_rol" value="3">
            <br>
            <button href="{{route('user.store')}}" class="bg-DarkSlateGray  text-LightOrange font-semibold font-Poppins py-2 px-20  rounded shadow text-center">
            Sing Up Now
            </button>
    
    </form>
        </div>
    </div>
</div>
    @endsection
