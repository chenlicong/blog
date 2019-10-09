@extends('admin.layout')
@section('title', '添加商品分类')
@section('description', '添加商品分类')
@section('keywords', '添加商品分类')
@section('content')
    <div class="seller-position">
        <a href="#">首页</a><i class="crumbs-arrow">&gt;</i>
        <a href="#">商品分类列表</a><i class="crumbs-arrow">&gt;</i>
        <a href="#">添加商品分类</a><i class="crumbs-arrow">&gt;</i>
    </div>
    <div class="seller-products-container">
        <div class="seller-products-category-container">
            <dl class="form-row">
                <dt><span>*</span>商品分类名称：</dt>
                <dd><p><input type="text" class="form-input" id="category_name" placeholder="请输入分类名称" /><p></dd>
            </dl>
            <dl class="form-row">
                <dt><span>*</span>商品分类简称：</dt>
                <dd><p><input type="text"  class="form-input" id="category_sort_name" placeholder="请输入分类名称" /><p></dd>
            </dl>
            <dl class="form-row">
                <dt>上级分类：</dt>
                <dd>
                    <select class="form-input" id="category_pid">
                        <option value="0">顶级分类</option>
                    </select>
                </dd>
            </dl>
            <dl class="form-row">
                <dt>商品类型：</dt>
                <dd>
                    <select class="form-input" id="category_name">
                        <option value="0">无关联类型</option>
                    </select>
                </dd>
            </dl>
            <dl class="form-row">
                <dt>是否显示：</dt>
                <dd><p><input type="checkbox" class="checkbox-switch" value="1" checked="checked" /><p></dd>
            </dl>
            <dl class="form-row">
                <dt><span>*</span>排序：</dt>
                <dd><p><input  type="number" class="form-input" id="category_sort" placeholder="请输入分类排序" value="0" /><p></dd>
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
                    <p>建议使用宽100像素-高50像素内的GIF或PNG透明图片；点击下方"保存"按钮后生效。</p>
                </dd>
            </dl>
            <dl class="form-row">
                <dt><span>*</span>商品分类关键字：</dt>
                <dd>
                    <p><input type="text"  class="form-input" id="category_sort_name" placeholder="请输入关键字" /><p>
                    <p>用于网站搜索引擎的优化，关键字之间请用英文逗号分隔</p>
                </dd>
            </dl>
            <dl class="form-row">
                <dt><span>*</span>商品分类描述：</dt>
                <dd>
                    <p><textarea id="description" placeholder="请输入描述" class="textarea-common"></textarea><p>
                </dd>
            </dl>
            <dl class="form-row">
                <dt><span>*</span>商品分类PC端模板：</dt>
                <dd>
                    <p><input type="text"  class="form-input" id="category_pc_tpl" /><p>
                    <p>用户自定义模板必须存放在对应模板目录下，模板名只能由英文组成</p>
                </dd>
            </dl>
            <dl class="form-row">
                <dt><span>*</span>商品分类移动端模板：</dt>
                <dd>
                    <p><input type="text"  class="form-input" id="category_wap_tpl" /><p>
                    <p>用户自定义模板必须存放在对应模板目录下，模板名只能由英文组成</p>
                </dd>
            </dl>
            <dl class="form-row">
                <dt><span>&nbsp;&nbsp;&nbsp;&nbsp;</span></dt>
                <dd><p><a class="btn btn-big btn-primary">保存</a><a class="btn btn-big btn-default">取消</a></p></dd>
            </dl>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $("#preview_logo").on("mouseover", function(){
            var image = $("#image_text").val();
            if (image != null && image != undefined && image != "") {
                layer.tips('<img width=\'100\' src=\''+image+'\'>', '#preview_logo', {
                    tips: ["1", '#ccc']
                });
            }

        });
    </script>
@endsection

