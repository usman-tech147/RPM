<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>RPM Admin</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="shortcut icon" href="{{asset('project/admin/assets/images/favicon.png')}}" type="image/png"/>
    <link href="{{asset('project/admin/assets/main.css')}}" rel="stylesheet">
    <link href="{{asset('project/admin/assets/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('project/admin/style.css')}}" rel="stylesheet">
    <link href="{{asset('project/admin/assets/responsive.css')}}" rel="stylesheet">
</head>

<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
    @include('includes.admin.header')
    <div class="app-main">
        @include('includes.admin.sidebar')

        @yield('content')

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('project/admin/assets/scripts/main.js')}}"></script>
<script type="text/javascript" src="{{asset('project/admin/assets/scripts/functions.js')}}"></script>
</body>

</html>