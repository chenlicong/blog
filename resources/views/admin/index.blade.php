@extends('admin.layout')
@section('title', '后台首页')
@section('description', '后台首页')
@section('keywords', '后台首页')
@section('content')
    <div class="seller-position">
        <a href="#">首页</a><i class="crumbs-arrow">&gt;</i>
    </div>
    <div class="seller-index-container">
        <div class="seller-index-block">
            <div class="head">
                店铺基本情况
            </div>
            <div class="content">
                <div class="item basic-situation-item">
                    <div class="image">
                        <img src="/static/admin/images/order_total.png">
                    </div>
                    <div class="info">
                        <p><span>235</span></p>
                        <p>本月订单数</p>
                    </div>
                </div>
                <div class="item basic-situation-item">
                    <div class="image">
                        <img src="/static/admin/images/order_amount.png">
                    </div>
                    <div class="info">
                        <p><span>2350.00</span></p>
                        <p>本月销售金额</p>
                    </div>
                </div>
                <div class="item basic-situation-item">
                    <div class="image">
                        <img src="/static/admin/images/goods_release.png">
                    </div>
                    <div class="info">
                        <p><span>45</span></p>
                        <p>上架商品数</p>
                    </div>
                </div>
                <div class="item basic-situation-item">
                    <div class="image">
                        <img src="/static/admin/images/month_sales.png">
                    </div>
                    <div class="info">
                        <p><span>235</span></p>
                        <p>销售订单总数</p>
                    </div>
                </div>
                <div class="item basic-situation-item">
                    <div class="image">
                        <img src="/static/admin/images/finish_count.png">
                    </div>
                    <div class="info">
                        <p><span>235</span></p>
                        <p>销售总金额</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="seller-index-block">
            <div class="head">
                店铺销售情况
            </div>
            <div class="content seller-index-sales">
                <table>
                    <tbody>
                    <tr>
                        <td rowspan="3" style="background: #f6f6f6;text-align: center;" align="left">昨日销量</td>
                    </tr>
                    <tr>
                        <td style=" border-top: 1px solid #f6f6f6;">
                            <span>订单量(件)</span>
                            <strong class="yesterday_goods">0</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>订单金额(元)</span>
                            <strong class="yesterday_money">0.00</strong>
                        </td>
                    </tr>

                    <tr style="height: 10px;"></tr>

                    <tr>
                        <td rowspan="3" style="background: #f6f6f6;text-align: center;" align="left">本月销量</td>
                    </tr>
                    <tr>
                        <td style=" border-top: 1px solid #f6f6f6;">
                            <span>订单量(件)</span>
                            <strong class="month_goods">107</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>订单金额(元)</span>
                            <strong class="month_money">1700.00</strong>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="seller-index-block">
            <div class="head">
                订单总数统计
            </div>
            <div id="orderCharts"></div>
        </div>
    </div>
@endsection
@section('js')
    <script src="/static/plugin/highcharts.js"></script>
    <script src="/static/admin/js/index.js"></script>
@endsection

