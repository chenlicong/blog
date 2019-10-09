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
  <link rel="stylesheet" href="/static/plugin/font-awesome-4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="/static/admin/css/reset.css"/>
  <link rel="stylesheet" href="/static/admin/css/style.css">
  <link rel="stylesheet" href="/static/plugin/simple-switch/simple-switch.min.css">
  @yield('css')
</head>
<body>
@include('admin.common.header')
@include('admin.common.left_sidebar')
<section class="seller-main-container">
@yield('content')
</section>
<script src="/static/plugin/jquery-1.12.4.min.js"></script>
<script src="/static/plugin/layer-v3.1.1/layer.js"></script>
<script src="/static/plugin/simple-switch/jquery.simpleswitch.min.js"></script>
<script>
  $(".checkbox-switch").simpleSwitch();
</script>
@yield('js')
</body>
</html>
