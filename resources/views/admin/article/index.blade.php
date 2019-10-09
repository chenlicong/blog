@extends('admin.layout')
@section('title', '文章列表-商家后台')
@section('description', '文章列表,商家后台')
@section('keywords', '文章列表,商家后台')
@section('content')
    <div class="seller-position">
        <a href="#">首页</a><i class="crumbs-arrow">&gt;</i>
        <a href="#">网站</a><i class="crumbs-arrow">&gt;</i>
        <a href="#">文章列表</a><i class="crumbs-arrow">&gt;</i>
    </div>
    <div class="seller-products-container">
        <div class="third-nav-container">
            <ul class="third-nav">
                <li class="selected" onclick="">文章列表</li>
                <li class="" onclick="">分类列表</li>
            </ul>
        </div>
        <div class="third-search-container">
            <div class="third-search-left">
                <a class="btn-common" href="{{ route('admin.article.add') }}">发布文章</a>
                <a class="btn-common-white">批量删除</a>
                <a class="btn-common-white">批量上架</a>
                <a class="btn-common-white">批量下架</a>
            </div>
            <div class="third-search-right">
                <div class="input-group"><label>文章分类：</label><select class="input-common input-sm"><option value="">选择分类</option></select></div>
                <div class="input-group"><label>文章关键字：</label><input name="" class="input-common input-sm" placeholder="关键字" /></div>
                <div class="input-group"><label>文章编号：</label><input name="" class="input-common input-sm" placeholder="文章编号"/></div>
                <div class="input-group"><a class="btn btn-primary">搜索</a></div>
            </div>
        </div>
        <div class="product-lists-container">
            <table class="table">
                <thead>
                <tr>
                    <th>
                        <i class="checkbox-common">
                            <input onclick="CheckAll(this)" type="checkbox" id="check_all">
                        </i>
                    </th>
                    <th>
                        标题
                    </th>
                    <th>
                        分类
                    </th>
                    <th>
                        点击/评论
                    </th>
                    <th>
                        推荐状态
                    </th>
                    <th>
                        发布时间
                    </th>
                    <th>
                        排序
                    </th>
                    <th>
                        操作
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <i class="checkbox-common"><input value="6" name="sub" data-state="1" type="checkbox"></i>
                    </td>
                    <td colspan="1">
                        <p>中网艺术商城正式上线!</p>
                    </td>
                    <td><span>资讯</span></td>
                    <td><span>889/12</span></td>
                    <td><span class="badge badge-warning">热门</span><span class="badge badge-success">推荐</span><span class="badge badge-danger">焦点</span></td>
                    <td><span class="date-time">2019-03-26 12:12:56</span></td>
                    <td><input class="input-common input-common-sort" goods_id="6" value="0" onchange="changeSort(this)" type="number" title="排序号数值越大，商城商品列表显示越靠前"></td>
                    <td><a class="operate-btn">编辑</a><a class="operate-btn">下架</a><a class="operate-btn">删除</a></td>
                </tr>
                </tbody>
                <tfoot>

                </tfoot>
            </table>
            @include('admin.common.page')
        </div>
    </div>
@endsection
@section('js')

@endsection

