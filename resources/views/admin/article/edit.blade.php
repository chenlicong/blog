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
            <div class="input-group">
                <label>文章标题</label>
                <input type="text" class="input-common title" id="title" />
            </div>
            <div class="input-group">
                <label>文章短标题</label>
                <input type="text" class="input-common" id="short_title"/>
            </div>
            <div class="input-group">
                <label>文章标签</label>
                <input type="text" class="input-common" id="tags"/>
            </div>
            <div class="input-group">
                <div class="form-upload-btn-common">
                    <label>文章图片</label>
                    <input type="text" class="input-common"><em>上传图片</em>
                    <div class="upload-btn">
                        <input class="input-file" name="file_upload" id="uploadTitleImg" type="file" onchange="imgUpload(this);" title="上传">
                        <input type="hidden" id="title_img" value="">
                    </div>
                </div>
            </div>
            <div class="input-group">
                <label>文章作者</label>
                <input type="text" class="input-common" id="tags"/>
            </div>
            <div class="input-group">
                <label>文章来源</label>
                <input type="text" class="input-common" id="tags"/>
            </div>
            <div class="input-group">
                <label>文章来源链接</label>
                <input type="text" class="input-common" id="tags"/>
            </div>
            <div class="input-group">
                <label>文章分类</label>
                <select class="input-common">
                    <option value="">请选择分类</option>
                </select>
            </div>
            <div class="input-group">
                <label>文章关键字</label>
                <input type="text" class="input-common" id="tags"/>
            </div>
            <div class="input-group">
                <label>文章摘要</label>
                <textarea rows="3" class="textarea-common"></textarea>
            </div>
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
            <div class="input-group">
                <div class="form-upload-btn-common">
                    <label>文章附件</label>
                    <input type="text" class="input-common"><em>上传附件</em>
                    <div class="upload-btn">
                        <input class="input-file" name="file_upload" id="uploadTitleFile" type="file" onchange="fileUpload(this);" title="上传">
                        <input type="hidden" id="title_file" value="">
                    </div>
                </div>
            </div>
            <div class="input-group">
                <label>是否推荐</label><input type="checkbox" class="checkbox-switch" value="1" />
            </div>
            <div class="input-group">
                <label>是否热门</label><input type="checkbox" class="checkbox-switch" value="1" />
            </div>
            <div class="input-group">
                <label>是否允许评论</label><input type="checkbox" class="checkbox-switch" value="1" />
            </div>
            <div class="input-group">
                <label>文章排序</label><input type="number" class="input-common input-sm" value="0" />
            </div>
            <div class="input-group">
                <label>文章点击数</label><input type="number" class="input-common input-sm" value="0" /><span class="unit">次</span>
            </div>
            <div class="input-group">
                <label>文章评论数</label><input type="number" class="input-common input-sm" value="0" /><span class="unit">次</span>
            </div>
            <div class="input-group">
                <label>文章分享数</label><input type="number" class="input-common input-sm" value="0" /><span class="unit">次</span>
            </div>
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

