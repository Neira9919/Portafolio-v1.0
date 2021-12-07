<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/ico" href={{ asset('img/favicon.ico') }} />
    <!-- Alpine -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <!-- Fonts -->

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
    <!-- Styles -->
    @yield('estilos')

    <title>@yield('title')</title>
</head>

<body class="antialiased">
    <div>@livewire('navbar')</div>
    <div>@yield('content')</div>
    <div>@livewire('footer')</div>
    @livewireScripts
</body>

</html>
