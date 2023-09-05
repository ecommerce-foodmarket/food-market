{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- <title>SpeedyBites</title> --}}
    {{-- <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    
{{-- </head>
<body class="min-h-screen flex flex-col">
    
    <main>
        @yield('content')
    </main>
    <footer class="fixed bottom-0 left-0 right-0 bg-white flex justify-around items-center py-3">
        <a href="{{route('user.dashboard')}}" >
            <iconify-icon icon="ant-design:home-filled" style="color: {{ $section === 'dashboard' ? '#4A6159' : '#ADADAF' }};" width="32" height="32"></iconify-icon>
        </a>
    
        <a href="#">
            <iconify-icon icon="material-symbols:favorite-outline" style="color: {{ $section === 'favs' ? '#4A6159' : '#ADADAF' }};" width="32" height="32"></iconify-icon>
        </a>
    
        <a href="#">
            <iconify-icon icon="tabler:shopping-bag" style="color: {{ $section === 'cart' ? '#4A6159' : '#ADADAF' }};" width="32" height="32"></iconify-icon>
        </a>
    
        <a href="#" >
            <iconify-icon icon="ri:user-fill" style="color: {{ $section === 'profile' ? '#4A6159' : '#ADADAF' }};" width="32" height="32"></iconify-icon>
        </a>
    </footer>
    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>

</body>
</html> --}} 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col">
    <div class="min-h-full bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>
    
    <footer class="fixed bottom-0 left-0 right-0 bg-white flex justify-around items-center py-3">
        <a href="{{ route('user.dashboard') }}">
            <iconify-icon icon="ant-design:home-filled" style="color: {{ $section === 'dashboard' ? '#4A6159' : '#ADADAF' }};" width="32" height="32"></iconify-icon>
        </a>

        <a href="#">
            <iconify-icon icon="material-symbols:favorite-outline" style="color: {{ $section === 'favs' ? '#4A6159' : '#ADADAF' }};" width="32" height="32"></iconify-icon>
        </a>

        <a href="{{ route('cart.index') }}">
            <iconify-icon icon="tabler:shopping-bag" style="color: {{ $section === 'cart' ? '#4A6159' : '#ADADAF' }};" width="32" height="32"></iconify-icon>
        </a>

        <a href="#" >
            <iconify-icon icon="ri:user-fill" style="color: {{ $section === 'profile' ? '#4A6159' : '#ADADAF' }};" width="32" height="32"></iconify-icon>
        </a>
    </footer>
    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
</body>
</html>

