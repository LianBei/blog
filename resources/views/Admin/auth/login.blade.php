<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="author" content="order by dede58.com"/>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>博客管理系统</title>
  <link rel="stylesheet" type="text/css" href="{{asset('back/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('back/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('back/css/font-awesome.min.css')}}">
  <link rel="apple-touch-icon-precomposed" href="{{asset('storage/images/icon/icon.png')}}">
  <link rel="shortcut icon" href="{{asset('storage/images/icon/favicon.ico')}}">
  <script src="{{asset('back/js/jquery-2.1.4.min.js')}}"></script>
<!--[if gte IE 9]>
  <script src="{{asset('back/js/jquery-1.11.1.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('back/js/html5shiv.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('back/js/respond.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('back/js/selectivizr-min.js')}}" type="text/javascript"></script>
<![endif]-->
  <!--[if lt IE 9]>
  <![endif]-->
</head>
<body class="user-select">
<div class="container">
  <div class="siteIcon"><img src="{{asset('storage/images/icon/icon.png')}}" alt="" data-toggle="tooltip" data-placement="top" title="欢迎使用异清轩博客管理系统" draggable="false" /></div>
  @include('Admin.layout.prompt')
  <form action="/auth/login" method="post" autocomplete="off" class="form-signin">
    <div style="">
    <h2 class="form-signin-heading">管理员登录</h2>
    <div><label for="userName" class="sr-only">用户名</label>
    <input type="text" name="account" class="form-control" placeholder="请输入用户名" required autofocus autocomplete="off" maxlength="10">
    <label for="userPwd" class="sr-only">密码</label>
    <input type="password" name="password" class="form-control" placeholder="请输入密码" required autocomplete="off" maxlength="18">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <button class="btn btn-lg btn-primary btn-block" type="submit" id="signinSubmit">登录</button>
    </div>
    </div>
  </form>
</div>
<script src="{{asset('back/js/bootstrap.min.js')}}"></script>
</body>
</html>
