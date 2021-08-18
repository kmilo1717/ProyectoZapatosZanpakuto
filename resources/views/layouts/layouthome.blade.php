<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Zanpakuto</title>

    <!-- Styles -->
    <link href="{{ asset('css/apphome.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="{{route('producto.index')}}">Inventario</a></li>
                <li><a href="#">Facturas</a></li>
                <li><a href="#">Productos</a></li>
                <li id="last"><a href="#">Proveedores</a></li>
            </ul>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>