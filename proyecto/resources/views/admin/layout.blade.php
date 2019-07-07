<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Administración</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        .row{
            padding-top: 10px;
        }
    </style>

</head>
<body>

    <div class="container">
        
        <!-- encabezado -->
        <div class="row" style="background-color: #4d82cb">
            <div class="container col-md-10">
                <h1 style="color: #ffffff">Bienvenido</h1>      
            </div>

            <div class="container col-md-1">
                
            </div>

            <div class="container col-md-1">
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        {{ __('Logout') }}
                    </button>
                </form>    
            </div>
        </div>
        
        <!-- secciones del admin -->
        <div class="row" style="background-color: #82b1ff;padding-bottom: 10px">
            <div class="btn-group col-md-12" style="align-content: center; justify-content: center;">

                @if(auth()->user()->name == 'root')
                    <button type="submit" class="btn btn-primary" onclick="location.href='{{ route('admin.manage.admins') }}'">Manejar admins</button>
                @endif
                <button type="submit" class="btn btn-primary" onclick="location.href='{{ route('admin.manage.users') }}'">Manejar clientes</button>

                <button type="submit" class="btn btn-primary" onclick="location.href='{{ route('admin.manage.users') }}'">Manejar productos</button>
                
            </div>
        </div>

        <!-- contenido -->
        <div class="container" style="background-color: #b6e3ff; margin-top: 10px">
            @yield('content')
        </div>
        

    </div>
    
</body>
</html>
