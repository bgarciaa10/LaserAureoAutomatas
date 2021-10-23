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
            width: 200px;
            height: 45px;
            left: 1103px;
            top: 10px;

            font-family: Roboto;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 21px;
            /* identical to box height */
        }

        .redesSociales{
            /* Redes Sociales */

            /* Auto Layout */
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            padding: 0px;

            position: relative;
            width: 80px;
            height: 28px;
            left: 66px;
            top: 10px;
        }

        .youtube{
            position: absolute;
            width: 45px;
            height: 28px;
            left: 35px;
            top: 0px;

            /* Inside Auto Layout */

            flex: none;
            order: 1;
            flex-grow: 0;
            margin: 0px 7px;
        }

        .facebook{
            position: static;
            width: 28px;
            height: 28px;   
            left: 0px;
            top: 0px;


            /* Inside Auto Layout */

            flex: none;
            order: 0;
            flex-grow: 0;
            margin: 0px 7px;
        }

        .Titulo{
            /* Laser Aureo */

            position: absolute;
            width: 267px;
            height: 59px;
            left: 515px;
            top: 195px;

            font-family: Roboto;
            font-style: italic;
            font-weight: bold;
            font-size: 50px;
            line-height: 59px;
            /* identical to box height */


            color: #FFFFFF;

            border: 1px solid #FFFFFF;
        }

        .subTitulo{
            /* Grabamos Recuerdos Para Toda La Vida */
            position: absolute;
            width: 441px;
            height: 29px;
            left: 421px;
            top: 260px;

            font-family: Roboto;
            font-style: italic;
            font-weight: bold;
            font-size: 25px;
            line-height: 29px;

            color: rgba(226, 28, 33, 0.8);

            border: 1px solid #FFFFFF;
        }

        .nav{
            position: absolute;
            width: 550px;
            height: 29px;
            left: 380px;
            top: 150px;
        }

        .nav-link{
            color: white;
        }

        .dividor{
            position: relative;
            left: 370px;
            background-color: white;
            border-radius: 5px;
            width: 550px;
            height: 20px;
            top: 75px;
        }

        .imagen{
            position: absolute;
            width: 150px;
            height: 140.28px;
            left: 564px;
            top: 9px;

            background: url('sources/views/fotos/Captura.png');
        }

        .ultimosDiseños{
            position: absolute;
            width: 180px;
            height: 29px;
            left: 66px;
            top: 316px;

            font-family: Roboto;
            font-style: italic;
            font-weight: bold;
            font-size: 25px;
            line-height: 29px;

            color: #FFFFFF;
        }

        .Reseñas{
            position:absolute;
            left: 60px;
            top: 350px;
        
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
        
        <div class="redesSociales">
            <a href="#" class="facebook">Facebook</a>
        </div>

        <div class="redesSociales">
            <a href="#" class="youtube">Youtube</a>
        </div>

        <div class="Nav">
            <div class="dividor"></div>
            <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" aria-current="Inicio" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Horario</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Tus Pedidos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link">Hisotria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Diseños</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Contactanos</a>
                  </li>
              </ul>
        </div>

        <div class="titulo">
            <h1 class="Titulo">Laser Aureo</h1>
            <h1 class="subTitulo">Grabamos Recuerdos Para Toda La Vida</h1>
            <h1 class="ultimosDiseños">Ultimos Diseños</h1>
        </div>

        <div class="Reseñas">
            <div class="row">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        
    
            <div class="container">
                <div class="inicioSesion">
                        @guest
                            @if (Route::has('login'))        
                                    <a style="color: white" class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                            @endif
                        @endguest
                </div>
        </div>
        <div>   
            
        </div>
        <main class="py-4">
            @yield('content')
        </main>
        
    </div>
</body>
</html>
