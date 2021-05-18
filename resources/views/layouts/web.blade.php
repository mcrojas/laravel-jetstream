<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sajorlight - LaraJetstream</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="shadow-lg">
        <div class="bg-blue-900 py-1"></div>
        
        <nav class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-white shadow sm:items-baseline w-full">
            <div class="mb-2 sm:mb-0 flex flex-row">
                <div class="h-10 w-10 self-center mr-2">
                    <a href="{{ route('home') }}">
                        <img 
                            src="{{ asset('images/logo.svg') }}"
                            class="h-10 w-10 self-center"
                            alt="Logo"
                        >
                    </a>
                </div>
                <div>
                    <a href="{{ route('home') }}" class="text-xl no-underline text-gray-500 font-sans font-bold block">Sajorlight</a>
                    <span class="text-xs text-gray-600">LaraJetstream</span>
                </div>
            </div>

            <div class="sm:mb-0 self-center">
                @auth
                <a href="{{ url('dashboard') }}" class="text-md no-underline text-black hover:text-blue-dark ml-2 px-1">Dashboard</a>
                @else
                <a href="{{ url('login') }}" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Login</a>
                <a href="{{ url('register') }}" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Register</a>
                @endif
            </div>
        </nav>

    </header>
    <main class="py-10">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>
    <footer class="shadow-lg">
        <div class="container flex pb-5 px-3 m-auto pt-5 border-t text-gray-800 text-sm flex-col md:flex-row">
            <div class="mt-2 text-gray-600">© Copyright 2021. All Rights Reserved.</div>
        </div>
    </footer>
</body>
</html>