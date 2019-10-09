@extends('admin.layout')
@section('title', '添加文章-商家后台')
@section('description', '添加文章,商家后台')
@section('keywords', '添加文章,商家后台')
@section('css')
    <link rel="stylesheet" href="/static/plugin/ueditor1.4.3.3/themes/default/css/ueditor.min.css">
@endsection
@section('content')
    <div class="seller-position">
        <a href="#">首页</a><i class="crumbs-arrow">&gt;</i>
        <a href="#">网站</a><i class="crumbs-arrow">&gt;</i>
        <a href="#">文章添加</a><i class="crumbs-arrow">&gt;</i>
    </div>
    <div class="seller-container">
        <div class="seller-container-nav">
            <ul class="tab-btn">
                <li class="selected"><a>基础信息</a></li>
                <li><a>文章内容</a></li>
                <li><a>拓展信息</a></li>
            </ul>
        </div>
        <div class="form-container tab-content active">
            <dl class="form-row">
                <dt><span>*</span>文章标题：</dt>
                <dd><p><input type="text" class="form-input" id="title" placeholder="请输入文章标题" /><p></dd>
            </dl>
            <dl class="form-row">
                <dt>文章短标题：</dt>
                <dd><p><input type="text" class="form-input" id="short-title" placeholder="请输入文章短标题" /><p></dd>
            </dl>
            <dl class="form-row">
                <dt>文章标签：</dt>
                <dd><p><input type="text" class="form-input" id="tags" placeholder="请输入文章标签" /><p></dd>
            </dl>
            <dl class="form-row">
                <dt><span>*</span>文章分类：</dt>
                <dd>
                    <select class="form-input" id="category_id">
                        <option value="0">顶级分类</option>
                    </select>
                </dd>
            </dl>
            <dl class="form-row">
                <dt><span>*</span>图片：</dt>
                <dd>
                    <div class="upload-btn-common">
                        <div>
                            <input class="input-file" name="file_upload" id="uploadImg" type="file" onchange="imgUpload(this);" title="上传">
                            <input type="hidden" id="logo" value="">
                        </div>
                        <input type="text" id="image_text" readonly="readonly" value="">
                        <em>上传</em>
                        <img id="preview_logo" src="/static/admin/images/upload-common-select.png" data-html="true" data-container="body" data-placement="top" data-trigger="manual">
                    </div>
                    <p>建议使用宽100像素-高50像素内的GIF或PNG透明图片；点击下方"保存"按钮后生效。</p>
                </dd>
            </dl>
            <dl class="form-row">
                <dt>文章关键字：</dt>
                <dd><p><input type="text" class="form-input" id="keywords" placeholder="请输入文章关键字" /><p></dd>
            </dl>
            <dl class="form-row">
                <dt><span>*</span>文章摘要：</dt>
                <dd>
                    <p><textarea id="summary" placeholder="请输入文章摘要" class="textarea-common"></textarea><p>
                </dd>
            </dl>
            <dl class="form-row">
                <dt>文章来源：</dt>
                <dd><p><input type="text" class="form-input" id="referer" placeholder="请输入文章来源" /><p></dd>
            </dl>
            <dl class="form-row">
                <dt>文章来源链接：</dt>
                <dd><p><input type="text" class="form-input" id="referer_url" placeholder="请输入文章来源链接" /><p></dd>
            </dl>
        </div>
        <div class="form-container tab-content">
            <div class="input-group">
                <h3>文章内容</h3>
            </div>
            <div class="container">
                <textarea id="content" class="article-content nei-content" name="content"></textarea>
            </div>
        </div>
        <div class="form-container tab-content">
            <dl class="form-row">
                <dt>文章附件：</dt>
                <dd>
                    <div class="form-upload-btn-common">
                        <h2>附件列表</h2>
                        <ul id="upload-file-lists"></ul>
                        <div class="upload-btn-common"><a id="annex-file-upload-btn">上传附件</a></div>
                    </div>
                </dd>
            </dl>
            <dl class="form-row">
                <dt>排序：</dt>
                <dd><p><input type="text" class="form-input" id="article_sort" placeholder="请输入排序" value="0" /><p></dd>
            </dl>
            <dl class="form-row">
                <dt>文章点击数：</dt>
                <dd><p><input type="text" class="form-input" id="article_click" placeholder="请输入文章点击数" value="0" /><p></dd>
            </dl>
            <dl class="form-row">
                <dt>文章评论数：</dt>
                <dd><p><input type="text" class="form-input" id="article_comment" placeholder="请输入文章评论数" value="0" /><p></dd>
            </dl>
            <dl class="form-row">
                <dt>文章分享数：</dt>
                <dd><p><input type="text" class="form-input" id="article_share" placeholder="请输入文章分享数" value="0" /><p></dd>
            </dl>
            <dl class="form-row">
                <dt>是否推荐：</dt>
                <dd><p><input id="is_recommend" type="checkbox" class="checkbox-switch" value="1" checked="checked" /><p></dd>
            </dl>
            <dl class="form-row">
                <dt>是否热门：</dt>
                <dd><p><input id="is_hot" type="checkbox" class="checkbox-switch" value="1" checked="checked" /><p></dd>
            </dl>
            <dl class="form-row">
                <dt>是否允许评论：</dt>
                <dd><p><input id="is_comment" type="checkbox" class="checkbox-switch" value="1" checked="checked" /><p></dd>
            </dl>
            <dl class="form-row">
                <dt>状态：</dt>
                <dd>
                    <p>
                        <select id="status">
                            <option value="1">正常</option>
                            <option value="2">锁定</option>
                        </select>
                    <p>
                </dd>
            </dl>
        </div>
    </div>
@endsection
@section('js')
    <script src="/static/plugin/ueditor1.4.3.3/ueditor.config.js"></script>
    <script src="/static/plugin/ueditor1.4.3.3/ueditor.all.min.js"></script>
    <script src="/static/plugin/ueditor1.4.3.3/lang/zh-cn/zh-cn.js"></script>
    <script>
        $(".tab-btn>li").hover(function(){
            var index = $(this).index();
            $(this).siblings().removeClass('selected');
            $(this).addClass('selected');
            $(".tab-content").removeClass('active');
            $(".tab-content").eq(index).addClass('active');
        });

        var ue = UE.getEditor('content', {
            initialFrameWidth:800,
            initialFrameHeight:600
        });
    </script>
@endsection

