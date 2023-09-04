@extends('layoutsUser.app')
@section('content')
<div class="container mx-auto w-screen h-autojustify-center items-center">
    <div class=" flex  w-full h-full justify-center items-center flex-col" >
        
            <div class="flex flex-nowrap w-full ">
                <a href="{{  url('/login')}}"  class=" w-8 h-8 bg-DarkSlateGray text-white font-bold text-xl rounded text-center align-content-center px-1 "><</a>
                <div class="pl-5" >
                    <h1 class="text-dark font-Poppins text-3xl font-bold">Log In</h1>
                    <div>
                        <p class="text-gray-300 font-Poppins text-md">Register and eat</p>
                    </div>
                </div>
            </div>
    <div class=" w-full h-full p-10 md:w-full lg:w-full ">
        <form action="{{route('user.store')}}" method="POST" //enctype="multipart/form-data">
            {{csrf_field()}}
            @csrf
            <div class="   flex-col mt-4">
                <div class="">
                    <div class="col-6">
                        <label for="picture" class="font-Poppins ">Photo</label>
                        <br>
                        <input class="h-16 w-16 object-cover rounded-full bg-gray-300" type="file" name="picture" id="user_picture" placeholder="Add Photo">
                    </div>
                    <div class="col-6">
                        <label clas="font-Poppins " for="name">Full Name</label>
                        <br>
                        <input class="font-Poppins border border-gray-300 rounded w-full" type="text" name="name" placeholder="Type your full name" class="border border-gray-300 rounded font-Poppins">
                    </div>
                </div>
                <br>
                <div class="">
                    <div class="col-6">
                        <label class="font-Poppins " for="email">Email Address</label>
                        <br>
                        <input class="font-Poppins border border-gray-300 rounded  w-full" type="email" name="email" placeholder="Type your email address">
                    </div>
                    <div class="col-6">
                        <br>
                        <label class="font-Poppins " for="password">Password</label>
                        <br>
                        <input class="font-Poppins border border-gray-300 rounded  w-full" type="password" name="password" placeholder="Type your password">
                    </div>
                </div>
                <br>
                <div class="">
                    <div class="col-6">
                        <label for="phone">Phone No.</label>
                        <br>
                        <input class="font-Poppins border border-gray-300 rounded  w-full" type="text" name="phone" placeholder="Type your phone number">
                    </div>
                    <div class="col-6">
                        <br>
                        <label for="address">Address</label>
                        <br>
                        <input class="font-Poppins border border-gray-300 rounded  w-full" type="text" name="address" placeholder="Type your address">
                    </div>
                </div>
                <br>
                <div class="">
                    <div class="col-6">
                        <label for="house_n">House No.</label>
                        <br>
                        <input class="font-Poppins border border-gray-300 rounded  w-full" type="text" name="house_n" placeholder="Type your house number">
                    </div>
                    <div class="col-6">
                        <br>
                        <label for="city">City</label>
                        <br>
                        <input class="font-Poppins border border-gray-300 rounded  w-full" type="text" name="city" placeholder="Select your city">

                        <br>
                        <input type="hidden" name="id_rol" value=1>
                        <br>
                        <button href="{{route('user.store')}}" class="bg-DarkSlateGray  text-LightOrange font-semibold font-Poppins py-2 px-20  rounded shadow text-center w-full">
                        Sing Up Now
                        </button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
    @endsection
