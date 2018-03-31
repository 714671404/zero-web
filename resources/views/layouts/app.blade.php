<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ZeroPoint') }}</title>
    <link rel="icon" href="/images/favico.ico">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('Font-Awesome-3.2.1/css/font-awesome.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/skin/loading.js') }}" defer></script>
    <script src="{{ asset('js/public/footer.js') }}" defer></script>
    <script src="{{ asset('js/skin/link.js') }}" defer></script>
    <script>window.Laravel=<?php echo json_encode(['csrfToken'=>csrf_token()])?></script>
</head>
<body>
    <div id="app">
        @include('ico.header')
        @yield('content')
        @include('ico.footer')
    </div>

    <script src="{{ asset('js/login/login.js') }}" type="text/javascript"></script>
</body>
</html>
