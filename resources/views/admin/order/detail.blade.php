@extends('seller.layout')
@section('title', '订单详情页-商家后台')
@section('description', '订单详情页,商家后台')
@section('keywords', '订单详情页,商家后台')
@section('content')
    <div class="seller-position">
        <a href="#">首页</a><i class="crumbs-arrow">&gt;</i>
        <a href="#">订单详情页</a><i class="crumbs-arrow">&gt;</i>
    </div>
    <div class="seller-container">
        <div class="order-container panel panel-default">
            <header class="panel-heading font-bold">订单信息</header>
            <div class="panel-body">
                <p><label>订单号：</label><span>2019041809560001</span></p>
                <p><label>下单时间：</label><span>2019-04-17 10:40:55</span></p>
                <p><label>订单金额：</label><span>商品总金额：￥82.00，	实际需支付：￥82.00 （含运费 ￥0.00）</span></p>
                <p><label>订单状态：</label><span>待付款</span></p>
                <p><label>订单运费：</label><span>￥12.00</span></p>
                <p><label>店铺：</label><span>中网旗舰店</span></p>
                <p><label>买家：</label><span>chenikl</span></p>
                <p><label>支付方式：</label><span>微信支付</span></p>
                <p><label>支付时间：</label><span>2019-04-18 10:40:55</span></p>
            </div>
        </div>
        <div class="order-container panel panel-default">
            <header class="panel-heading font-bold">订单信息</header>
            <div class="panel-body">
                <p><label>收货人姓名：</label><span>陈黎聪</span></p>
                <p><label>联系电话：</label><span>13710821002</span></p>
                <p><label>详细地址：</label><span>广东省 广州市 天河区 体育西路111号建和中心30楼</span></p>
            </div>
        </div>

        <div class="order-container panel panel-default">
            <header class="panel-heading font-bold">商品信息</header>
            <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>商品图</th>
                            <th>商品名称</th>
                            <th>单价</th>
                            <th>数量</th>
                            <th>合计</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img width="100" src="/static/images/goods-demo.jpg"></td>
                            <td>紫地黄彩云龙纹盖罐紫地黄彩云龙</td>
                            <td>15232.00元</td>
                            <td>1</td>
                            <td>15232.00元</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="order-container panel panel-default">
            <header class="panel-heading font-bold">物流历史</header>
            <div class="panel-body">
                <p></p>
            </div>
        </div>

        <div class="order-container panel panel-default">
            <header class="panel-heading font-bold">操作历史</header>
            <div class="panel-body">
                <p><span>操作： 创建订单</span><span>    操作人：admin </span>  <span> 操作时间：2019-04-18 09:56:33</span></p>
            </div>
        </div>

        <div class="order-container order-detail-operate">
            <a class="btn btn-success">发货</a><a class="btn btn-danger">删除订单</a>
        </div>
    </div>
@endsection
@section('js')

@endsection

