<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- line-awesome   --}}
    <link rel="stylesheet" href="{{asset('line-awesome/css/line-awesome.min.css')}}">

    <!--Import style.css-->
    <link href='{{asset('css/app.css')}}' rel='stylesheet'>

</head>
