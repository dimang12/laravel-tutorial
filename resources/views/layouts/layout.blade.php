<!DOCTYPE html>
<html>
<head>
    <title>Task Management - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-5.3/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container-fluid flex flex-column h-full">
        <div class="">
            @include('layouts.left_navigation')
        </div>
        <div class="container">
            @yield('content')
        </div>
    </div>

</body>
</html>
