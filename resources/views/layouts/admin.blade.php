<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="icon" type="image/png" href="{{asset('faviconSpeedy.png')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="https:////cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/adminOrderIndex.css')}}">
    <link rel="stylesheet" href="{{asset('css/adminProductsIndex.css')}}">
</head>

<body>
{{-- Navbar horizontal --}}
    <nav class="bg-custom p-4 h-25" >
        <div class="flex items-center justify-start">
            <img class="logo" src="{{asset('speedynav.png')}}" />
          <h1 class="text-white text-xl font-semibold">SpeedyBite</h1>
        </div>

        <div class="text-white flex items-center justify-end h-0">
          <span class="">My account</span>
          <i class="fas fa-user-circle text-white text-2xl"></i>
        </div>
      </nav>
      {{-- aside --}}
      <div class="main">
      <aside class="bg-custom flex w-72 flex-col space-y-2 border-r-2 border-green-600 bg-white p-2" style="height: 90.5vh"
            x-show="asideOpen">
            <a href="#" class="bg-gray-100 flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-yellow-600 hover:text-gray-200">
                <span class="text-2xl"><i class="bx bx-home"></i></span>
                <span>Dashboard</span>
            </a>

            <a href="#" class="bg-gray-100 flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-yellow-600 hover:text-gray-200">
                <span class="text-2xl"><i class="bx bx-cart"></i></span>
                <span>Orders</span>
            </a>

            <a href="#" class="bg-gray-100 flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-yellow-600 hover:text-gray-200">
                <span class="text-2xl"><i class="bx bx-shopping-bag"></i></span>
                <span>Food Menu</span>
            </a>

            <a href="#" class="bg-gray-100 flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-yellow-600 hover:text-gray-200">
                <span class="text-2xl"><i class="bx bx-heart"></i></span>
                <span>Reservation</span>
            </a>

            <a href="#" class="bg-gray-100 flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-yellow-600 hover:text-gray-200">
                <span class="text-2xl"><i class="bx bx-user"></i></span>
                <span>Delivery</span>
            </a>
            <a href="#" class="bg-gray-100 flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-yellow-600 hover:text-gray-200">
                <span class="text-2xl"><i class="bx bx-user"></i></span>
                <span>Settings</span>
            </a>
        </aside>

        @yield('content')
        </div>
</body>
</html>
