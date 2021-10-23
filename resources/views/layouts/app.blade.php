<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>

        #primer-card{
           
            margin-left: 17%;
            margin-top: 50px;
            margin-bottom: 50px;
          
        }

        #segundo-card{
            margin-top: 50px;
            margin-bottom: 50px;
        }

        #container-principal{
      

        }

        .dividor{
            margin-right: 50px;
            margin-left: 50px;
            margin-top: 5px;
            margin-bottom: 5px;

            background-color: white;
            border-radius: 5px;
            width: 20px;
            height: auto;
        }

        body{
            background-color: #253439;
        }

        .card{
            background-color: #383838;
        }

        #app{
            position: relative;
        
        }

        #nav{
            position: relative;
        }


        .circulo{
            position: absolute;
            width: 750px;
            height: 750px;
            left: -347px;
            top: -338px;
            background: radial-gradient(50% 50% at 50% 50%, rgba(0, 25, 110, 0.4) 0%, rgba(0, 25, 110, 0) 100%);
        }

        .circulo2{

            position:absolute;
            width: 750px;
            height:750px;
            left: 905px;
            top: 345px;
            background: radial-gradient(50% 50% at 50% 50%, rgba(226, 28, 33, 0.4) 0%, rgba(226, 28, 33, 0) 100%);
        }

        .inicioSesion{
            position: absolute;
            width: 108px;
            height: 21px;
            left: 1103px;
            top: 55px;

            font-family: Roboto;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 21px;
            /* identical to box height */

            color: #FFFFFF;
        }

  

    </style>
</head>
<body>
    <div id="app">
        <div>
            <div class="circulo"></div>
        </div>

        <div>
            <div class="circulo2"></div>
        </div>        

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" id="nav">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                     
                        @guest
                    
                            @if (Route::has('login'))
                            
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div>   
            
        </div>
        <main class="py-4">
            @yield('content')
        </main>
        
    </div>
</body>
</html>
