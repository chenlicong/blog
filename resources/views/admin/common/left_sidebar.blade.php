<div class="left-sidebar">
    <ul class="left-sidebar-navigation">
        <li class="parent">
            <a href="{{ route('admin.index') }}"><i class="fa fa-home"></i><span>首页</span></a>
        </li>
        <li class="parent">
            <a href=""><i class="fa fa-table"></i><span>文章管理</span></a>
            <ul class="sub-menu" style="display: block;">
                <li><a href="{{ route('admin.article.lists') }}">文章列表</a></li>
                <li><a href="{{ route('admin.article.lists') }}">文章分类</a></li>
                <li><a href="">标签管理</a></li>
                <li><a href="">文章回收站</a></li>
            </ul>
        </li>
    </ul>
</div>