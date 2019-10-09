<!doctype html>
<html class="no-js fixed-layout">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台登录页</title>
    <meta name="description" content="后台登录页">
    <meta name="keywords" content="后台登录页">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="">
    <link rel="apple-touch-icon-precomposed" href="">
    <meta name="apple-mobile-web-app-title" content="" />
    <link rel="stylesheet" href="/static/admin/css/login.css"/>
    <link rel="stylesheet" href="/static/admin/css/reset.css"/>
</head>
<body>
<div id="particles-js">
    <div class="login">
        <div class="login-top">
            登录
        </div>
        <div class="login-center clearfix">
            <div class="login-center-img"><img src="/static/admin/images/name.png" /></div>
            <div class="login-center-input">
                <input type="text" name="" value="admin" placeholder="请输入您的用户名" onfocus="this.placeholder=''" onblur="this.placeholder='请输入您的用户名'" />
                <div class="login-center-input-text">用户名</div>
            </div>
        </div>
        <div class="login-center clearfix">
            <div class="login-center-img"><img src="/static/admin/images/password.png" /></div>
            <div class="login-center-input">
                <input type="password" name="" value="" placeholder="请输入您的密码" onfocus="this.placeholder=''" onblur="this.placeholder='请输入您的密码'" />
                <div class="login-center-input-text">密码</div>
            </div>
        </div>
        <div class="login-button">
            登陆
        </div>
    </div>
    <div class="sk-rotating-plane"></div>
</div>
<script src="/static/js/jquery-1.11.3.min.js"></script>
<script src="/static/plugin/layer-v3.1.1/layer.js"></script>
<script src="/static/admin/js/particles.min.js"></script>
<script src="/static/admin/js/app.js"></script>
<script>

</script>
</body>
</html>