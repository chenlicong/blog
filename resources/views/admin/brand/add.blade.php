@extends('seller.layout')
@section('title', '添加商品品牌-商家后台')
@section('description', '添加商品品牌,商家后台')
@section('keywords', '添加商品品牌,商家后台')
@section('content')
    <div class="seller-position">
        <a href="#">首页</a><i class="crumbs-arrow">&gt;</i>
        <a href="#">商品品牌列表</a><i class="crumbs-arrow">&gt;</i>
        <a href="#">添加商品品牌</a><i class="crumbs-arrow">&gt;</i>
    </div>
    <div class="seller-products-container">
        <dl class="form-row">
            <dt><span>*</span>商品品牌名称：</dt>
            <dd><p><input type="text" class="form-input" id="brand_name" placeholder="请输入品牌名称" /><p></dd>
        </dl>
        <dl class="form-row">
            <dt><span>*</span>商品品牌首字母：</dt>
            <dd><p><input type="text" class="form-input" id="brand_head" placeholder="请输入品牌首字母" /><p></dd>
        </dl>
        <dl class="form-row">
            <dt><span>*</span>商品品牌描述：</dt>
            <dd><p><textarea class="textarea-common" placeholder="请输入品牌描述"></textarea><p></dd>
        </dl>
        <dl class="form-row">
            <dt>图片：</dt>
            <dd>
                <div class="upload-btn-common">
                    <div>
                        <input class="input-file" name="file_upload" id="uploadImg" type="file" onchange="imgUpload(this);" title="上传">
                        <input type="hidden" id="logo" value="">
                    </div>
                    <input type="text" id="image_text" readonly="readonly" value="">
                    <em>上传</em>
                    <img id="preview_logo" src="/static/seller/images/upload-common-select.png" data-html="true" data-container="body" data-placement="top" data-trigger="manual">
                </div>
                <p>建议使用宽200像素-高60像素内的GIF或PNG透明图片；点击下方"保存"按钮后生效。</p>
            </dd>
        </dl>
        <dl class="form-row">
            <dt>是否推荐：</dt>
            <dd><p><input type="checkbox" id="is_recommend" class="checkbox-switch" value="1" checked="checked" /><p></dd>
        </dl>
        <dl class="form-row">
            <dt>图片：</dt>
            <dd>
                <div class="upload-btn-common">
                    <div>
                        <input class="input-file" name="file_upload" id="uploadImg" type="file" onchange="imgUpload(this);" title="上传">
                        <input type="hidden" id="logo" value="">
                    </div>
                    <input type="text" id="image_text" readonly="readonly" value="">
                    <em>上传</em>
                    <img id="preview_logo" src="/static/seller/images/upload-common-select.png" data-html="true" data-container="body" data-placement="top" data-trigger="manual">
                </div>
                <p>建议使用宽200像素-高60像素内的GIF或PNG透明图片；点击下方"保存"按钮后生效。</p>
            </dd>
        </dl>
        <dl class="form-row">
            <dt><span>&nbsp;&nbsp;&nbsp;&nbsp;</span></dt>
            <dd><p><a class="btn btn-big btn-primary">保存</a><a class="btn btn-big btn-default">取消</a></p></dd>
        </dl>
    </div>
@endsection
@section('js')

@endsection

