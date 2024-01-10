<!DOCTYPE html>
<html>
<head>
    <title>Task Management - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-5.3/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="h-full m-0 p-0">
    <main class="d-flex bg-light h-100 m-0 p-0">
        <div style="width: 300px;">
            @include('layouts.left_navigation')
        </div>
        <div class="flex-grow-1 d-flex flex-column">
            @include('layouts.layout_header')
            <div class="flex-grow-1">
                @yield('content')
            </div>
            @include('layouts.layout_footer')
        </div>
    </main>
</body>
</html>
