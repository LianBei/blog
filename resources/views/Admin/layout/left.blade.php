<div class="row">
    <aside class="col-sm-3 col-md-2 col-lg-2 sidebar">
        <ul class="nav nav-sidebar">
            <li @if(strpos($_SERVER['REQUEST_URI'], 'admin/index')) class="active" @endif><a href="/admin/index">报告</a></li>
        </ul>
        <ul class="nav nav-sidebar">
            <li @if(strpos($_SERVER['REQUEST_URI'], 'admin/article')) class="active" @endif><a href="/admin/article">文章</a></li>
            <li @if(strpos($_SERVER['REQUEST_URI'], 'admin/announcement')) class="active" @endif><a href="/admin/announcement">公告</a></li>
            <li @if(strpos($_SERVER['REQUEST_URI'], 'admin/comment')) class="active" @endif><a href="/admin/comment">评论</a></li>
            <li><a data-toggle="tooltip" data-placement="bottom" title="网站暂无留言功能">留言</a></li>
        </ul>
    </aside>
</div>