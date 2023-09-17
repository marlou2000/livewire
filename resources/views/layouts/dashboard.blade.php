<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Social Web Dashboard</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('css/login.css')}}" rel="stylesheet" />
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        @livewireStyles
    </head>

    <body class="bg-slate-100">
        <header class="bg-white">
            <nav class="flex justify-between items-center w-[92%] p-[20px] mx-auto">
                <div>
                    <label class="text-black-500 text-lg"><a href="/post"><b>Social Web</b></a></label>
                </div>
                <div class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-[15px]">
                    <ul class="flex pl-[15px] md:flex-row flex-col md:items-center md:gap-[2vw] gap-8">
                        <li>
                            <a class="hover:text-gray-500" href="#">Post</a>
                        </li>
                        <li>
                            <a class="hover:text-gray-500" href="#">My Post</a>
                        </li>
                        <li>
                            <a class="hover:text-gray-500" href="#">Create Post</a>
                        </li>

                        <div class="md:ml-[400px] mt-[30px] md:mt-0 logout">
                            <a class="hover:text-gray-500" href="/login">Logout</a>
                        </div>
                    </ul>
                    
                </div>

                <div class="md:absolute flex items-center gap-6">
                    <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
                </div>
        </header>

        {{ $slot }}

        <script>
            const navLinks = document.querySelector('.nav-links')
            function onToggleMenu(e){
                e.name = e.name === 'menu' ? 'close' : 'menu'
                navLinks.classList.toggle('top-[9%]')
            }
        </script>

        @livewireScripts
    </body>

</html>