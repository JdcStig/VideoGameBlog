<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fallout') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="nav-header py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div class="left">
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'Fallout') }}
                     
                    </a>
                    <a>
                        <img id="page1iconic" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpDoul3BNYP3pS06zEeZuUPkfl-nEmoXl7-Q&usqp=CAU" width="100px" alt="">
                    </a>


                    


                </div>
              
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">


                   
                  
                   
                

                <a class="white no-underline hover:underline text-center  font-bold text-xl uppercase " href="/">Home</a>
                    <a class="white no-underline hover:underline text-center font-bold text-xl uppercase" href="/blog">Blog</a>
                    <a class="white no-underline hover:underline text-center font-bold text-xl uppercase" href="/tvshow">Show</a>
                    <a class="white no-underline hover:underline text-center font-bold text-xl uppercase" href="/videoGame">Game</a>
                    <a class="white no-underline hover:underline text-center font-bold text-xl uppercase" href="/Gallery">Gallery</a>

                    @guest
                        <a class="white no-underline hover:underline text-center font-bold text-xl uppercase" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="white no-underline hover:underline text-center font-bold text-xl uppercase" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                    
                        <span class="white no-underline hover:underline text-center font-bold text-xl uppercase ">{{ Auth::user()->name }} </span>

                        <a href="{{ route('logout') }}"
                           class="white no-underline hover:underline text-center font-bold text-xl uppercase "
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        @yield('content')
    </div>
    <div>
        @include('layouts.footer')
    </div>
</body>
</html>
