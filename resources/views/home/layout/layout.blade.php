<!doctype html>
<html class="no-js fixed-layout">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta name="description" content="@yield('description')">
  <meta name="keywords" content="@yield('keywords')">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
  <meta name="renderer" content="webkit">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="">
  <link rel="apple-touch-icon-precomposed" href="">
  <meta name="apple-mobile-web-app-title" content="" />
  <link rel="stylesheet" href="/static/plugin/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/static/home/css/common.css"/>
  <link rel="stylesheet" href="/static/home/css/page.css">
  <link rel="stylesheet" href="/static/home/css/style.css">
  @yield('css')
</head>
<body>
@include('home.common.header')
<section class="main-container">
<div class="search-box">
  <div class="hot-keywords"><i class="fa fa-ellipsis-v"></i><span>热门关键词:</span><a>PHP</a> <a>HTML5</a> <a>CSS3</a></div>
  <div class="login-box"><a class="btn btn-primary">登录</a><a class="btn btn-secondary">注册</a></div>
  <div class="search-inp"><input name="search-txt" id="search-txt" placeholder="输入关键字!" /></div><a class="search-btn"><i class="fa fa-search"></i></a>
</div>
<section class="content-container">
@yield('content')
</section>
</section>
@include('home.common.footer')
<script src="/static/home/js/jquery-1.11.3.min.js"></script>
@yield('js')
</body>
</html>
