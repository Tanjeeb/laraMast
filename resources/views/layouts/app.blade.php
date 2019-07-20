<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body class="site">
@include('layouts.header')
<div class="main">
    @yield('content')
</div>
@include('layouts.footer')


<script type="text/javascript" src="{{mix('js/app.js')}}"></script>
</body>
</html>
