<?php

?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>{{ config('app.name') }} | {{ $pageTitle }}</title>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout/main-header.css') }}">
    @stack('styles')
</head>
<body>

    <x-layout.main-header/>

    <main>
        @yield('content')
    </main>

</body>
</html>
