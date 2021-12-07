<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="container mx-auto">
        <h1 class="font-ail font-bold text-kh_main text-4xl my-4">Informacion de Contacto</h1>
        <p class="font-ail font-light text-normal my-8"><strong>Nombre: </strong>{{$contacto['nombre']}}</p>
        <p class="font-ail font-light text-normal my-8"><strong>Email: </strong>{{$contacto['email']}}</p>
        <p class="font-ail font-light text-normal my-8"><strong>telefono: </strong>{{$contacto['telefono']}}</p>
        <p class="font-ail font-light text-normal my-8"><strong>Mensaje: </strong>{{$contacto['desc']}}</p>
        <h2 class="font-ail font-light text-lg text-kh_clair text-normal my-8">PD: Pongale bueno, maestro, gurú, sensei, bestia, mastodonte, superdotado, eminencia, etc.<h2>
    </div>
</body>

</html>
