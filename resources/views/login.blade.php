@extends('layoutsUser.app')
@section('content')
    <h1>Log In</h1>
    <p>Find your best ever meal</p>
    {{-- <a href="{{ route('user.index')}}">Back</a> --}}
    <form action="{{route('user.store')}}" method="POST" //enctype="multipart/form-data">
        {{csrf_field()}}
        @csrf
        <div class="w-full max-w-xs">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                  Email Address
                </label>
                <br>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Type your email address">
            </div>
            <br>
              <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                  Password
                </label>
                <br>
                <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Type your password"> 
            </div>
              <div class="flex items-center justify-between">
                <br>
                <button href="" class="bg-White hover:bg-gray-100 text-gray-800 font-semibold py-2 px-20  border rounded shadow text-center text-DarkSlateGray">
                    Sing In
                      </button>
                      <br><br>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
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
            <p class="text-center text-gray-500 text-xs">
             Create An Account <a href="{{route('user.create')}}">Sing Up</a>
            </p>
          </div>
    </form>
    @endsection
