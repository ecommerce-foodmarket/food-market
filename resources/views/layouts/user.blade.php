<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SpeedyBites</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    
</head>
<body class="min-h-screen flex flex-col">
    <main>
        @yield('content')
    </main>
    <footer class="fixed bottom-0 left-0 right-0 bg-white flex justify-around items-center py-3">
        <a href="#" >
            <iconify-icon icon="ant-design:home-filled" style="color: {{ $section === 'home' ? '#4A6159' : '#ADADAF' }};" width="32" height="32"></iconify-icon>
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
</html>