<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-DarkSlateGray md:flex">
  <div class="flex w-full justify-center text-center h-full content-center items-center">
    <div class="">
      <img  src="/assets/images/ratatouille-removebg-preview.svg">

      <h2 class="font-Poppins font-bold text-White text-4xl m-5" >SpeedyBite</h2>
  <a href="{{ url('/login')}}">
      <button  class="bg-White hover:bg-gray-100 font-semibold py-2 px-20  border rounded  text-center text-DarkSlateGray">
    Sing In
      </button>
    </a>
    </div>
  </div>
</body>
</html>