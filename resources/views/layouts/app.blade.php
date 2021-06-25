<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LABURO</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <style>
        #nu{
            background: red;
            padding: 10px;
        }
        .principal{
            background: #A0FFAF;
        }
        .titulo{
            font-size: 25px;
            font-weight: bold
        }
        ul a:hover{
            font-weight: bold;
        }
    </style>

    <div id="app">
        <nav class="principal navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="titulo navbar-brand" href="{{ url('/') }}">
                    LABURO
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="width: 100%; display: flex; justify-content:space-around;">
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

                            <li style="width: 35%;">
                                <input class="form-control" style="width:100%" type="text" placeholder="Search">
                            </li>
                            <li>
                                <a class="nav-link" href="home">Inicio</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{route('verprofe')}}">Ver Profesionales</a>
                            </li>
                            <li>
                                <a class="nav-link" href="ver-cate">Ver Categorias</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="ver-perfil">Ver Perfil</a>
                                    @if (Auth::user()->tipo=='usuario')
                                        <a class="dropdown-item" href="profe-registro">Ser Profesional</a>
                                    @endif
                                    @if(Auth::user()->tipo=='Profesional')
                                    <a class="dropdown-item" href="{{route('mostrarprofe', auth()->id())}}">Ver Perfil Profesional</a>
                                    @endif

                    
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
