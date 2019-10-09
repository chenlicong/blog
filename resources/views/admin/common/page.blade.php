<div class="page" id="turn-ul" style="">
    <div class="pagination">
        <ul>
            <li class="according-number">每页显示<input type="text" class="input-medium" id="showNumber" value="14" data-default="14" autocomplete="off">条</li>
            <li><a id="beginPage" class="page-disable">首页</a></li>
            <li><a id="prevPage" class="page-disable">上一页</a></li>
            <li id="pageNumber"><a onclick="JumpForPage(this)" class="currentPage">1</a><a onclick="JumpForPage(this)">2</a></li>
            <li id="JslastPage"></li>
            <li><a id="nextPage" class="">下一页</a></li>
            <li><a id="lastPage" class="">末页</a></li>
            <li class="total-data" data-total-count="15">共15条</li>
            <!-- <li class="page-count">共0页</li> -->
            <li class="according-number">
                跳<input type="text" class="input-medium" id="skipPage" data-curr-page="1">页
            </li>
        </ul>
    </div>
</div>
<link rel="stylesheet" href="/static/admin/css/page.css">