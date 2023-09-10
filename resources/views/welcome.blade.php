{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>

    {{-- </head>
    <body class="backWel bg-yellow">
        <div class=""> --}}
            {{-- @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            {{-- @endif --}} 
            <!DOCTYPE html> 
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
                <div class="">
                    @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="bg-White  font-semibold py-2 px-20  border rounded  text-center text-DarkSlateGray" >Log in</a>
                                <br>
                                <br>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="bg-DarkSlateGray font-semibold py-2 px-20 border  border-white rounded  text-center text-white">Register</a>
                                @endif
            
                        </div>
                    @endif
                </div>
            </div>
            
        </body>
    </html>