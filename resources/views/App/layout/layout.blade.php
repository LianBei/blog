<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/nprogress.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('storage/images/icon.png')}}">
    <link rel="shortcut icon" href="{{asset('storage/images/title.jpg')}}">
    <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('js/nprogress.js')}}"></script>
    <script src="{{asset('js/jquery.lazyload.min.js')}}"></script>
<!--[if gte IE 9]>
    <script src="{{asset('js/jquery-1.11.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/html5shiv.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/respond.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/selectivizr-min.js')}}" type="text/javascript"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script>window.location.href='upgrade-browser.html';</script>
    <![endif]-->
</head>
<body class="user-select">
<section class="container-fluid">
    @include('App.layout.header')
</section>
@yield('content')
<script src="{{asset('back/js/bootstrap.min.js')}}"></script>
<script src="{{asset('back/js/jquery.ias.js')}}"></script>
<script src="{{asset('back/js/scripts.js')}}"></script>
</body>
</html>
