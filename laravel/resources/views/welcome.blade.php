<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

     
    </head>
    <body >
       <h1>Hola mundo desde Laravel 11 con Docker y docker-compose sin Sail</h1>
       <h2>Laravel {{ App::VERSION() }}</h2>
       <h2>Docker 27.2.0</h2>
       <h2>Docker compose 3.8</h2>
       <h2>Integración directa con Supervisor desde el contenedor (Para Qeues y Reverb)</h2>
       <h3>Todo preparado para implementar un CD/CI bajo algún servidor de integración continua como Jenkins por ejemplo</h3>
    </body>
</html>
