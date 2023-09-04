@extends('layoutsUser.app')
@section('content')
    <h1 class="text-dark font-Poppins text-3xl font-bold">Log In</h1>
    <p  class="text-gray-400 font-Poppins text-md">Find your best ever meal</p>
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
                <p>
                    - OR Continue with -
                </p>
              </div>
              <div>
                <p>Google  facebook</p>
              </div>
            </form>
            <p class=" text-gray-500 text-md">
             Create An Account <a class="text-orange-500  bold" href="{{route('user.create')}}">Sing Up</a>
            </p>
          </div>
          </div>
    </form>
    @endsection
