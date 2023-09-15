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
        @livewireStyles
    </head>

    <body class="bg-slate-100">
       <div class="w-full flex items-center p-1 drop-shadow-md bg-slate-200">
            <div class="flex items-center justify-between w-full">
                <div class="flex items-center">
                    <div class="mr-2">
                        <img class="h-16 w-35" src="{{ asset('img/logo.png') }}" alt="Logo">
                    </div>
                    <div>
                        <ul class="list-none inline-flex"> <!-- Use inline-flex to display the list horizontally -->
                            <li class="mr-2"><a class="py-2 px-7 hover:border-b-2 border-blue-500" href="#">Post</a></li>
                            <li class="mr-2"><a class="py-2 px-5 hover:border-b-2 border-blue-500" href="#">My Post</a></li>
                            <li><a class="py-2 px-3 hover:border-b-2 border-blue-500" href="#">Create Post</a></li>
                        </ul>
                    </div>
                </div>
                <a class="py-1 px-5 mr-5 ml-auto border-b-2 border-transparent hover:border-blue-500" href="/login">Logout</a>
            </div>
        </div>

        {{ $slot }}

        @livewireScripts
    </body>

</html>