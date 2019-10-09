@extends('admin.layout')
@section('title', '商家商品分类')
@section('description', '商家商品分类')
@section('keywords', '商家商品分类')
@section('content')
    <div class="seller-position">
        <a href="#">首页</a><i class="crumbs-arrow">&gt;</i>
        <a href="#">商品分类列表</a><i class="crumbs-arrow">&gt;</i>
    </div>
    <div class="seller-products-container">
        <div class="seller-products-category-container">
            <div class="seller-products-category-header lh40"><a class="btn btn-primary" href="{{ route('seller.category.add') }}">添加分类</a></div>
        </div>
    </div>
@endsection
@section('js')

@endsection