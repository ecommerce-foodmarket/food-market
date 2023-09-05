<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-DarkSlateGray ">
  <div class="w-screen justify-center text-center h-screen content-center items-center flex">
    <div class="">
      <img  class="md:scale-125 lg:scale-135 xl:scale-150 pl-10" src="/assets/images/ratatouille-removebg-preview.svg">
    
      <h2 class="font-Poppins font-bold text-White text-4xl m-5" >SpeedyBite</h2>
      
    <a href="{{ url('/login')}}">
      <button  class="bg-White hover:bg-gray-100 font-semibold py-2 px-20  border rounded  text-center text-DarkSlateGray">
      Log In
      </button>
    </a>
    <br>
    <br>
    <a href="{{route('user.create')}}">
      <button  class="bg-DarkSlateGray hover:bg-gray-100 font-semibold py-2 px-20 border  border-white rounded  text-center text-white">
      Sign Up
      </button>
    </a>
    </div>
  </div>
</body>
</html>
