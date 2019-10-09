@extends('seller.layout')
@section('title', '商品品牌列表-商家后台')
@section('description', '商品品牌列表,商家后台')
@section('keywords', '商品品牌列表,商家后台')
@section('content')
    <div class="seller-position">
        <a href="#">首页</a><i class="crumbs-arrow">&gt;</i>
        <a href="#">商品品牌列表</a><i class="crumbs-arrow">&gt;</i>
    </div>
    <div class="seller-products-container">
        <div class="seller-products-brand-container">
            <div class="seller-brand-header lh40"><a class="btn btn-primary" href="{{ route('seller.brand.add') }}">添加品牌</a></div>
        </div>
    </div>
@endsection
@section('js')

@endsection

