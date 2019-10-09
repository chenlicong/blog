@extends('home.layout.layout')
@section('title', '技术汇')
@section('description', '技术汇')
@section('keywords', '技术汇')
@section('css')
    <link rel="stylesheet" href="/static/plugin/swiper-4.5.0/css/swiper.min.css" />
@endsection
@section('content')
<div class="position-nav">
    <a href="/">首页</a><i class="crumbs-arrow">&gt;</i>
</div>
<div class="left-content">
    <div class="main-detail">
        <h1 class="title">2019 PHP 初级 / 基础面试题，祝你金三银四跳槽加薪</h1>
        <div class="detail-attributes">
            <span><i class="fa fa-user fa-fw"></i><a>管理员</a></span>
            <span><i class="fa fa-folder-open fa-fw"></i><a>分类</a></span>
            <span><i class="fa fa-clock-o fa-fw"></i><a>2019-03-30</a></span>
            <span><i class="fa fa-eye fa-fw"></i><a>175</a></span>
            <span><i class="fa fa-comment-o fa-fw"></i><a>12</a></span>
        </div>
        <div class="detail-content">
            <h1>2019 PHP 初级 / 基础面试题，祝你金三银四跳槽加薪 </h1>
            <p>1、PHP语言的一大优势是跨平台，什么是跨平台？</p>
            <p>2、WEB开发中数据提交方式有几种？有什么区别？百度使用哪种方式？</p>
            <p>3、掌握PHP的哪些框架、模板引擎、系统等</p>
        </div>
        <div class="detail-tags">
           <label><i class="fa fa-tags fa-fw"></i>标签：</label> <a>php</a> <a>面试</a> <a>跳槽</a> <a>加薪</a>
        </div>
    </div>
</div>
<div class="right-content">
    <aside class="sidebar-right-box">
        <div class="sidebar-title">
            <h2><i class="fa fa-list fa-fw"></i>最新发布</h2>
        </div>
        <ul class="sidebar-list">
            <li>
                <a class="img"><img src="/static/home/images/img-demo1.jpg"></a>
                <a class="title"><span>1</span>2019 PHP 初级 / 基础面试题，祝你金三银四跳槽加薪</a>
                <p><i class="fa fa-clock-o fa-fw"></i> <span>2019-03-30</span></p>
            </li>
            <li>
                <a class="img"><img src="/static/home/images/img-demo1.jpg"></a>
                <a class="title"><span>2</span>2019 PHP 初级 / 基础面试题，祝你金三银四跳槽加薪</a>
                <p><i class="fa fa-clock-o fa-fw"></i> <span>2019-03-30</span></p>
            </li>
            <li>
                <a class="img"><img src="/static/home/images/img-demo1.jpg"></a>
                <a class="title"><span>3</span>2019 PHP 初级 / 基础面试题，祝你金三银四跳槽加薪</a>
                <p><i class="fa fa-clock-o fa-fw"></i> <span>2019-03-30</span></p>
            </li>
        </ul>
    </aside>
</div>
@endsection
@section('js')
    <script src="/static/plugin/swiper-4.5.0/js/swiper.min.js"></script>
    <script>
        $(document).ready(function () {
            var mySwiper = new Swiper ('.swiper-container', {
                // 如果需要分页器
                pagination: {
                    el: '.swiper-pagination',
                },

                // 如果需要前进后退按钮
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            })
        })
    </script>
@endsection

