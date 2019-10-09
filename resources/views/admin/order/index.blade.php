@extends('seller.layout')
@section('title', '订单列表-商家后台')
@section('description', '订单列表,商家后台')
@section('keywords', '订单列表,商家后台')
@section('content')
    <div class="seller-position">
        <a href="#">首页</a><i class="crumbs-arrow">&gt;</i>
        <a href="#">订单列表</a><i class="crumbs-arrow">&gt;</i>
    </div>
    <div class="seller-products-container">
        <div class="product-nav-container">
            <ul class="products-nav">
                <li class="selected all" onclick="">全部</li>
                <li class="" onclick="">待付款</li>
                <li class="" onclick="">待发货</li>
                <li class="" onclick="">已发货</li>
                <li class="" onclick="">已收货</li>
                <li class="" onclick="">已完成</li>
                <li class="" onclick="">已关闭</li>
                <li class="" onclick="">退款中</li>
            </ul>
        </div>
        <div class="product-search-container">
            <div class="product-search-left">
                <a class="btn-common">打印订单</a>
            </div>
            <div class="product-search-right">
                <div class="input-group"><label>商家名称：</label><input name="" class="input-common input-sm" placeholder="商品名称" /></div>
                <div class="input-group"><label>订单编码：</label><input name="" class="input-common input-sm" placeholder="商品编码"/></div>
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
                        商品信息
                    </th>
                    <th>
                        订单金额
                    </th>
                    <th>
                        收货信息
                    </th>
                    <th>
                        买家
                    </th>
                    <th>
                        交易状态
                    </th>
                    <th>
                        配送方式
                    </th>
                    <th>
                        订单类型
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
                                <div class="info-no"><label>订单编号：</label><span>10020190418122522123232</span></div>
                                <div class="info-time"><label>创建时间：</label><span>2019-04-18 12:25:12</span></div>
                                <div class="info-title"><a>紫地黄彩云龙纹盖罐紫地黄彩云龙</a></div>
                                <div class="info-intro"></div>
                            </div>
                        </div>
                    </td>
                    <td><p class="orange">28523.00</p><p>支付金额:0.00</p><p>运费:0.00</p><p>微信支付</p></td>
                    <td><p>陈黎聪</p>
                        <p>15011866447</p>
                        <p>广东省 清远市 连南瑶族自治县 高大上的</p>
                    </td>
                    <td><p>chenikl</p><p><i class="device-ico fa fa-television"></i></p></td>
                    <td><span>已关闭</span></td>
                    <td><span>物流配送</span></td>
                    <td><span>普通订单</span></td>
                    <td><a class="operate-btn" href="{{ route('seller.order.detail', array('id'=>123)) }}">订单详情</a><a class="operate-btn">删除订单</a></td>
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
                                <div class="info-no"><label>订单编号：</label><span>10020190418122522123232</span></div>
                                <div class="info-time"><label>创建时间：</label><span>2019-04-18 12:25:12</span></div>
                                <div class="info-title"><a>紫地黄彩云龙纹盖罐紫地黄彩云龙</a></div>
                                <div class="info-intro"></div>
                            </div>
                        </div>
                    </td>
                    <td><p class="orange">28523.00</p><p>支付金额:0.00</p><p>运费:0.00</p><p>微信支付</p></td>
                    <td><p>陈黎聪</p>
                        <p>15011866447</p>
                        <p>广东省 清远市 连南瑶族自治县 高大上的</p>
                    </td>
                    <td><p>chenikl</p><p><i class="device-ico fa fa-television"></i></p></td>
                    <td><span>已关闭</span></td>
                    <td><span>物流配送</span></td>
                    <td><span>普通订单</span></td>
                    <td><a class="operate-btn">订单详情</a><a class="operate-btn">删除订单</a></td>
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
                                <div class="info-no"><label>订单编号：</label><span>10020190418122522123232</span></div>
                                <div class="info-time"><label>创建时间：</label><span>2019-04-18 12:25:12</span></div>
                                <div class="info-title"><a>紫地黄彩云龙纹盖罐紫地黄彩云龙</a></div>
                                <div class="info-intro"></div>
                            </div>
                        </div>
                    </td>
                    <td><p class="orange">28523.00</p><p>支付金额:0.00</p><p>运费:0.00</p><p>微信支付</p></td>
                    <td><p>陈黎聪</p>
                        <p>15011866447</p>
                        <p>广东省 清远市 连南瑶族自治县 高大上的</p>
                    </td>
                    <td><p>chenikl</p><p><i class="device-ico fa fa-television"></i></p></td>
                    <td><span>已关闭</span></td>
                    <td><span>物流配送</span></td>
                    <td><span>普通订单</span></td>
                    <td><a class="operate-btn">订单详情</a><a class="operate-btn">删除订单</a></td>
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
                                <div class="info-no"><label>订单编号：</label><span>10020190418122522123232</span></div>
                                <div class="info-time"><label>创建时间：</label><span>2019-04-18 12:25:12</span></div>
                                <div class="info-title"><a>紫地黄彩云龙纹盖罐紫地黄彩云龙</a></div>
                                <div class="info-intro"></div>
                            </div>
                        </div>
                    </td>
                    <td><p class="orange">28523.00</p><p>支付金额:0.00</p><p>运费:0.00</p><p>微信支付</p></td>
                    <td><p>陈黎聪</p>
                        <p>15011866447</p>
                        <p>广东省 清远市 连南瑶族自治县 高大上的</p>
                    </td>
                    <td><p>chenikl</p><p><i class="device-ico fa fa-television"></i></p></td>
                    <td><span>已关闭</span></td>
                    <td><span>物流配送</span></td>
                    <td><span>普通订单</span></td>
                    <td><a class="operate-btn">订单详情</a><a class="operate-btn">删除订单</a></td>
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
                                <div class="info-no"><label>订单编号：</label><span>10020190418122522123232</span></div>
                                <div class="info-time"><label>创建时间：</label><span>2019-04-18 12:25:12</span></div>
                                <div class="info-title"><a>紫地黄彩云龙纹盖罐紫地黄彩云龙</a></div>
                                <div class="info-intro"></div>
                            </div>
                        </div>
                    </td>
                    <td><p class="orange">28523.00</p><p>支付金额:0.00</p><p>运费:0.00</p><p>微信支付</p></td>
                    <td><p>陈黎聪</p>
                        <p>15011866447</p>
                        <p>广东省 清远市 连南瑶族自治县 高大上的</p>
                    </td>
                    <td><p>chenikl</p><p><i class="device-ico fa fa-television"></i></p></td>
                    <td><span>已关闭</span></td>
                    <td><span>物流配送</span></td>
                    <td><span>普通订单</span></td>
                    <td><a class="operate-btn">订单详情</a><a class="operate-btn">删除订单</a></td>
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

