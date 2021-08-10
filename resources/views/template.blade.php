<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hahmlet:wght@200&display=swap" rel="stylesheet">

    <!-- Css -->
    <link href="{{ asset('css/template.css') }}" rel="stylesheet">

</head>

<body>

    <ul>
        <li><a class="active" href="{{url ('/') }}">Formulario</a></li>
        <li><a href="{{url ('/userList') }}">Listado de Usuarios</a></li>
    </ul>
    @yield('content')
    <!-- Js -->
    <script src="{{asset('js/formulario.js')}}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
</body>

</html>