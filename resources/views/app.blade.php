<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="{{asset('css/ejemplo.css')}}">
</head>
<body>
    <h1>Bienvenidos a la App de Ejemplos</h1>
    @include('sweetalert::alert')
    @include('layaout.menu')
    @yield('contenido')
</body>
</html>


