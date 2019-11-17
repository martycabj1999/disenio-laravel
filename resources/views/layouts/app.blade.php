<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DISEÑO DE SISTEMAS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">

    <script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <b>{{ config('app.name', 'DISEÑO DE SISTEMAS') }}</b>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                               <li class="nav-item">
                             <a class="nav-link js-scroll-trigger" href="{{ url('/home')}}">Inicio</a>
                                  </li>
                            <li class="nav-item dropdown">


                                <a class="nav-link dropdown-toggle dropdown-toggle-split " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor:pointer">Administración </a>
                                <div class="dropdown-menu" >
                                  @if(Auth::User()->is_student)
                                    <a class="dropdown-item" href="{{ url('usuario') }}"><i class="fa fa-user-alt fa-fw"></i> Usuarios</a>
                                    <a class="dropdown-item" href="{{ url('perfil') }}"><i class="fa fa-user-tie fa-fw"></i> Perfiles</a>
                                    <a class="dropdown-item" href="{{ url('empresa') }}"><i class="fa fa-users fa-fw"></i> Empresas</a>
                                    <a class="dropdown-item" href="{{ url('energia') }}"><i class="fa fa-bolt fa-fw"></i> Energia</a>
                                    <a class="dropdown-item" href="{{ url('tipous') }}"><i class="fa fa-clipboard-list fa-fw"></i> Tipo US</a>
                                  @endif
                                  <a class="dropdown-item" href="{{ url('archnormas') }}"><i class="fa fa-archive fa-fw"></i> Archivos de la norma</a>
                                  <a class="dropdown-item" href="{{ url('lineaprod') }}"><i class="fa fa-boxes fa-fw"></i> Linea de Produccion</a>
                                  <a class="dropdown-item" href="{{ url('unidadprod') }}"><i class="fa fa-box fa-fw"></i> Unidad de Produccion</a>
                                  <a class="dropdown-item" href="{{ url('unidadserv') }}"><i class="fa fa-cog fa-fw"></i> Unidad de Servicio</a>
                                  <a class="dropdown-item" href="{{ url('tipous') }}"><i class="fas fa-clipboard-list fa-fw"></i> Tipo de US</a>
                                  <a class="dropdown-item" href="{{ url('factura') }}"><i class="fa fa-file-alt fa-fw"></i> Factura</a>
                                  <a class="dropdown-item" href="{{ url('noconformidad') }}"><i class="fa fa-exclamation-triangle file-alt fa-fw"></i> No conformidad</a>
                                  <a class="dropdown-item" href="{{ url('planaccion') }}"><i class="fas fa-file fa-fw"></i> Planes de Accion</a>
                                  <a class="dropdown-item" href="{{ url('produccionreal') }}"><i class="fas fa-box fa-fw"></i> Produccion Real</a>
                                  <a class="dropdown-item" href="{{ url('medidor') }}"><i class="fas fa-barcode fa-fw"></i> Medidor</a>
                                </div>

                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <span class="caret">{{ Auth::user()->name }}</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ url('password/cambiar') }}">
                                            <i class="far fa-id-card fa-fw"></i> Cambiar Contraseña
                                        </a>


                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <main class="container">
            @yield('content')
        </main>
        <footer class="footer">
          <div class="container">
            <div class="row">
              <div class="col"><p class="mt-4 text-center ">Desarrollado por <a href="https://www.linkedin.com/in/martin-tito-gira-68636413a/">Martin Tito</a> 2019</p></div>
            </div>


          </div>
        </footer>
    </div>

@yield('scripts')
</body>
</html>
