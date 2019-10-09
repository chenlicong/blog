@extends('seller.layout')
@section('title', '商品列表-商家后台')
@section('description', '商品列表,商家后台')
@section('keywords', '商品列表,商家后台')
@section('content')
    <div class="seller-position">
        <a href="#">首页</a><i class="crumbs-arrow">&gt;</i>
        <a href="#">商品列表</a><i class="crumbs-arrow">&gt;</i>
        <a href="#">添加商品</a><i class="crumbs-arrow">&gt;</i>
    </div>
    <div class="seller-container">
        <div class="seller-container-nav">
            <ul class="tab-btn">
                <li class="selected"><a>基础信息</a></li>
                <li><a>商品属性</a></li>
                <li><a>媒体设置</a></li>
                <li><a>商品详情</a></li>
                <li><a>积分设置</a></li>
            </ul>
        </div>
        <div class="form-container tab-content active">
            <dl class="form-row">
                <dt><span>*</span>商品名称：</dt>
                <dd><p><input type="text" class="form-input" id="category_name" placeholder="请输入名称" /><p></dd>
            </dl>
            <dl class="form-row">
                <dt><span>*</span>商品分类：</dt>
                <dd><p><input type="text" class="form-input" id="category_name" placeholder="请输入商品分类" /><p></dd>
            </dl>
        </div>
        <div class="form-container tab-content">

        </div>
        <div class="form-container tab-content">

        </div>
        <div class="form-container tab-content">

        </div>
        <div class="form-container tab-content">

        </div>
    </div>
@endsection
@section('js')
    <script>
        $(".tab-btn>li").hover(function(){
            var index = $(this).index();
            $(this).siblings().removeClass('selected');
            $(this).addClass('selected');
            $(".tab-content").removeClass('active');
            $(".tab-content").eq(index).addClass('active');
        });
    </script>
@endsection

