@extends('layoutsUser.app')
@section('content')
<div class=" w-full h-full max-w-xs container ml-auto mr-auto flex flex-wrap items-start mt-8">

    <h1 class="text-dark font-Poppins text-3xl font-bold w-full">Log In</h1>
    <div>
      <p  class="text-gray-400 font-Poppins text-md">Find your best ever meal</p>
    </div>
    {{-- <a href="{{ route('user.index')}}">Back</a> --}}
    <form action="{{route('user.store')}}" method="POST" //enctype="multipart/form-data">
        {{csrf_field()}}
        @csrf
        <div class="w-full max-w-xs">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
              <div class="">
                <br>
                <label class="block text-gray-700 text-sm font-bold py-2 " for="username">
                  Email Address
                </label>

                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Type your email address">
            </div>
            <br>
              <div class="">
                <label class="block text-gray-700 text-sm font-bold py-2 "  for="password">
                  Password
                </label>
      
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Type your password"> 
            </div>
              <div class="w-full">
                <br>
                <button href=""  class="bg-DarkSlateGray  text-LightOrange font-semibold font-Poppins py-1 px-20   rounded shadow text-center">
                    Sing In
                      </button>
                      <br><br>
                  <div class="">
                <a class="inline-block align-baseline font-bold text-sm text-DarkSlateGray hover:text-blue-800 underline" href="#">
                  Forgot Password
                </a>
                <div class="relative flex items-center space-x-4 justify-center">
                  <img src="https://tailus.io/sources/blocks/social/preview/images/google.svg" class="absolute left-0 w-5" alt="google logo">
                  <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">Google</span>
              </div>
              <div class="relative flex items-center space-x-2 justify-center">
                <img src="https://upload.wikimedia.org/wikipedia/en/0/04/Facebook_f_logo_%282021%29.svg" class="absolute left-0 w-5" alt="Facebook logo">
               <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">Facebook</span>
           </div>
            </form>
            <p class=" text-gray-500 text-md">
             Create An Account <a class="text-orange-500  bold" href="{{route('user.create')}}">Sing Up</a>
            </p>
          </div>
          </div>
    </form>
    </div>
    @endsection
