@extends('seller.layout')
@section('title', '商品列表-商家后台')
@section('description', '商品列表,商家后台')
@section('keywords', '商品列表,商家后台')
@section('content')
    <div class="seller-position">
        <a href="#">首页</a><i class="crumbs-arrow">&gt;</i>
        <a href="#">商品列表</a><i class="crumbs-arrow">&gt;</i>
    </div>
    <div class="seller-products-container">
        <div class="product-nav-container">
            <ul class="products-nav">
                <li class="selected" onclick="">出售中</li>
                <li class="" onclick="">已下架</li>
                <li class="" onclick="">库存预警</li>
                <li class="" onclick="">回收站</li>
            </ul>
        </div>
        <div class="product-search-container">
            <div class="product-search-left">
                <a class="btn-common" href="{{ route('seller.product.add') }}">发布商品</a>
                <a class="btn-common-white">批量删除</a>
                <a class="btn-common-white">批量上架</a>
                <a class="btn-common-white">批量下架</a>
                <a class="btn-common-white">选择推荐</a>
            </div>
            <div class="product-search-right">
                <div class="input-group"><label>商品名称：</label><input name="" class="input-common input-sm" placeholder="商品名称" /></div>
                <div class="input-group"><label>商品编码：</label><input name="" class="input-common input-sm" placeholder="商品编码"/></div>
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
                        商品名称
                    </th>
                    <th>
                        价格
                    </th>
                    <th>
                        库存
                    </th>
                    <th>
                        销量
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
                        <div class="product-lists-info">
                            <div class="image">
                                <a><img src="/static/images/goods-demo.jpg"></a>
                            </div>
                            <div class="info">
                                <div class="info-no"><label>商家编号：</label><span></span></div>
                                <div class="info-time"><label>创建时间：</label><span></span></div>
                                <div class="info-title"><a>紫地黄彩云龙纹盖罐紫地黄彩云龙</a></div>
                                <div class="info-intro"></div>
                            </div>
                        </div>
                    </td>
                    <td><span>28523.00</span></td>
                    <td><span>889</span></td>
                    <td><span>0</span></td>
                    <td><input class="input-common input-common-sort" goods_id="6" value="0" onchange="changeSort(this)" type="number" title="排序号数值越大，商城商品列表显示越靠前"></td>
                    <td><a class="operate-btn">编辑</a><a class="operate-btn">下架</a><a class="operate-btn">删除</a></td>
                </tr>
                <tr>
                    <td>
                        <i class="checkbox-common"><input value="6" name="sub" data-state="1" type="checkbox"></i>
                    </td>
                    <td colspan="1">
                        <div class="product-lists-info">
                            <div class="image">
                                <a><img src="/static/images/goods-demo.jpg"></a>
                            </div>
                            <div class="info">
                                <div class="info-no"><label>商家编号：</label><span></span></div>
                                <div class="info-time"><label>创建时间：</label><span></span></div>
                                <div class="info-title"><a>紫地黄彩云龙纹盖罐紫地黄彩云龙</a></div>
                                <div class="info-intro"></div>
                            </div>
                        </div>
                    </td>
                    <td><span>28523.00</span></td>
                    <td><span>889</span></td>
                    <td><span>0</span></td>
                    <td><input class="input-common input-common-sort" goods_id="6" value="0" onchange="changeSort(this)" type="number" title="排序号数值越大，商城商品列表显示越靠前"></td>
                    <td><a class="operate-btn">编辑</a><a class="operate-btn">下架</a><a class="operate-btn">删除</a></td>
                </tr>
                <tr>
                    <td>
                        <i class="checkbox-common"><input value="6" name="sub" data-state="1" type="checkbox"></i>
                    </td>
                    <td colspan="1">
                        <div class="product-lists-info">
                            <div class="image">
                                <a><img src="/static/images/goods-demo.jpg"></a>
                            </div>
                            <div class="info">
                                <div class="info-no"><label>商家编号：</label><span></span></div>
                                <div class="info-time"><label>创建时间：</label><span></span></div>
                                <div class="info-title"><a>紫地黄彩云龙纹盖罐紫地黄彩云龙</a></div>
                                <div class="info-intro"></div>
                            </div>
                        </div>
                    </td>
                    <td><span>28523.00</span></td>
                    <td><span>889</span></td>
                    <td><span>0</span></td>
                    <td><input class="input-common input-common-sort" goods_id="6" value="0" onchange="changeSort(this)" type="number" title="排序号数值越大，商城商品列表显示越靠前"></td>
                    <td><a class="operate-btn">编辑</a><a class="operate-btn">下架</a><a class="operate-btn">删除</a></td>
                </tr>
                <tr>
                    <td>
                        <i class="checkbox-common"><input value="6" name="sub" data-state="1" type="checkbox"></i>
                    </td>
                    <td colspan="1">
                        <div class="product-lists-info">
                            <div class="image">
                                <a><img src="/static/images/goods-demo.jpg"></a>
                            </div>
                            <div class="info">
                                <div class="info-no"><label>商家编号：</label><span></span></div>
                                <div class="info-time"><label>创建时间：</label><span></span></div>
                                <div class="info-title"><a>紫地黄彩云龙纹盖罐紫地黄彩云龙</a></div>
                                <div class="info-intro"></div>
                            </div>
                        </div>
                    </td>
                    <td><span>28523.00</span></td>
                    <td><span>889</span></td>
                    <td><span>0</span></td>
                    <td><input class="input-common input-common-sort" goods_id="6" value="0" onchange="changeSort(this)" type="number" title="排序号数值越大，商城商品列表显示越靠前"></td>
                    <td><a class="operate-btn">编辑</a><a class="operate-btn">下架</a><a class="operate-btn">删除</a></td>
                </tr>
                </tbody>
                <tfoot>

                </tfoot>
            </table>
            @include('seller.common.page')
        </div>
    </div>
@endsection
@section('js')

@endsection

