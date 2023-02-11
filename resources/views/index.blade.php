<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link rel="stylesheet" href="{{assert('resources/css/responsive.css')}}">
    <link rel="stylesheet" href="{{assert('resources/css/override.css')}}">
    <link rel="stylesheet" href="{{assert('resources/css/style.css')}}">
    <link rel="stylesheet" href="{{assert('resources/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{assert('resources/css/bootstrap.min.css')}}">

    <title>Document</title>
    @yield('seometa')
    @vite([
    'resources/css/responsive.css',
    'resources/css/override.css',
    'resources/css/style.css',
    'resources/css/fontawesome.min.css',
    'resources/css/bootstrap.min.css',
    'resources/js/script.js',
    ])
</head>
<body>
@include('clientLayout.header')
@yield('content')
@include('clientLayout.footer')
</body>
</html>




