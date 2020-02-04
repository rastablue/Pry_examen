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
    <script src="{{ asset('js/navBar.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navBar.css') }}" rel="stylesheet">
</head>

<body>
    {{--<div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #26BAE9;">
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Intranet') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} {{ Auth::user()->apepater }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item"  href="{{ route('users.show', $id=Auth::user()->id) }}">
                                       Actualizar
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>--}}

    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
          <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">

                <div class="sidebar-brand">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div>
                    <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li>
                                <div class="sidebar-header">
                                    <div class="user-pic">
                                        <img class="img-responsive img-rounded" src="{{ asset('images/profile.png') }}"
                                        alt="User picture">
                                    </div>
                                    <div class="user-info">
                                        <span class="user-name">
                                            {{ Auth::user()->name }} {{ Auth::user()->apepater }}
                                        </span>
                                        <span class="user-role">Administrator</span>
                                        <span class="user-status">
                                        <i class="fa fa-circle"></i>
                                        <span>Online</span>
                                        </span>
                                    </div>
                                </div>

                                <!-- Cuadro Buscar  -->
                                    <div class="sidebar-search">
                                        <div>
                                            <div class="input-group">
                                                <input type="text" class="form-control search-menu" placeholder="Search...">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <!-- Indices -->
                                    <div class="sidebar-menu">
                                        <ul>
                                            <li class="header-menu">
                                            <span>Indices</span>
                                            </li>

                                            <!-- Menu Usuarios  -->
                                                <li class="sidebar-dropdown">
                                                    <a href="#">
                                                        <img class="img-responsive img-rounded" src="{{ asset('images/usuario.png') }}">
                                                        <span>Usuarios</span>
                                                    </a>
                                                    <div class="sidebar-submenu">
                                                        <ul>
                                                            <li>
                                                                <a href="/users">Consultar Usuarios
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">Agregar Usuario</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Actualizar Usuario</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>

                                            <!-- Menu Vehiculos  -->
                                                <li class="sidebar-dropdown">
                                                    <a href="#">
                                                        <img class="img-responsive img-rounded" src="{{ asset('images/transporte.png') }}">
                                                        <span>Vehiculos</span>
                                                    </a>
                                                    <div class="sidebar-submenu">
                                                        <ul>
                                                            <li>
                                                                <a href="/vehiculos">Consultar Vehiculos</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('vehiculos.create') }}">Agregar Vehiculo</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Actualizar Vehiculo</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>

                                            <!-- Menu Mantenimientos  -->
                                                <li class="sidebar-dropdown">
                                                    <a href="#">
                                                        <img class="img-responsive img-rounded" src="{{ asset('images/reparar.png') }}">
                                                        <span>Mantenimientos</span>
                                                    </a>
                                                    <div class="sidebar-submenu">
                                                        <ul>
                                                            <li>
                                                                <a href="/mantenimientos">Consultar Mantenimientos</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('mantenimientos.create') }}">Agregar Mantenimientos</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Actualizar Mantenimientos</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>

                                            <!-- Menu Empleados  -->
                                            <li class="sidebar-dropdown">
                                                <a href="#">
                                                    <img class="img-responsive img-rounded" src="{{ asset('images/empleado.png') }}">
                                                    <span>Empleados</span>
                                                </a>
                                                <div class="sidebar-submenu">
                                                    <ul>
                                                        <li>
                                                            <a href="/empleados">Consultar Empleados</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('empleados.create') }}">Agregar Empleados</a>
                                                        </li>
                                                        <li>
                                                            {{ $emp = 1}}
                                                            <a href="{{ route('empleados.edit', $emp) }}">Actualizar Empleados</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
            <!-- Botones Inferiores del Menu-->
                <!-- Boton Configuracion -->
                    <div class="sidebar-footer">
                        <a href="#">
                            <img class="img-responsive img-rounded" src="{{ asset('images/engranaje.png') }}">
                        </a>

                <!-- Boton Salir -->
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <img class="img-responsive img-rounded" src="{{ asset('images/powerOff.png') }}">
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                    </div>
        </nav>
        <!-- Contenidos de la Pagina -->
            <main class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </main>
    </div>

</body>
</html>
