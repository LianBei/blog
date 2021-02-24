@extends('App.layout.layout')
@section('content')
<section class="container">
    <div class="content-wrap">
        <div class="content">
            <div class="title">
                <h3 style="line-height: 1.3">MZ-NetBlog主题</h3>
            </div>
            @foreach($data as $user)
            <article class="excerpt excerpt-5"><a class="focus" href="#" target="_blank" ><img class="thumb" src="{{asset('storage/images/'.$user->pic)}}" style="display: inline;"></a>
                <header><a class="cat" href="#">MZ-NetBlog主题<i></i></a>
                    <h2><a href="#" target="_blank" >{{$user->title}}</a></h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i> {{$user->updated_at}}</time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> {{$user->comment_id}}</span> <a class="comment" href="#comment" title="评论" target="_blank" ><i class="glyphicon glyphicon-comment"></i> 4</a></p>
                <p class="note"><?php echo mb_substr("$user->content", 0, 150);?></p>
            </article>
            @endforeach
        </div>
    </div>
    <aside class="sidebar">
        <div class="fixed">
            <div class="widget widget_search">
                <form class="navbar-form" action="/app/auth/list" method="get">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control" size="35" placeholder="请输入关键字" maxlength="15" autocomplete="off">
                        <span class="input-group-btn">
		<button class="btn btn-default btn-search" type="submit" >搜索</button>
		</span> </div>
                </form>
            </div>
            <div class="widget widget_sentence">
                <h3>标签云</h3>
                <div class="widget-sentence-content">
                    <ul class="plinks ptags">
                        <li><a href="#list/67/" title="移动统计" draggable="false">移动统计 <span class="badge">1</span></a></li>
                        <li><a href="#list/252/" title="VS2010" draggable="false">VS2010 <span class="badge">1</span></a></li>
                        <li><a href="#list/162/" title="杀毒软件" draggable="false">杀毒软件 <span class="badge">1</span></a></li>
                        <li><a href="#list/133/" title="html标签" draggable="false">html标签 <span class="badge">1</span></a></li>
                        <li><a href="#list/49/" title="循环" draggable="false">循环 <span class="badge">2</span></a></li>
                        <li><a href="#list/22/" title="百度统计" draggable="false">百度统计 <span class="badge">2</span></a></li>
                        <li><a href="#list/132/" title="sql" draggable="false">sql <span class="badge">6</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="widget widget_hot">
            <h3>最新评论文章</h3>
            <ul>
                @foreach($new_data as $row)
                <li><a href="#" ><span class="thumbnail">
<img class="thumb" src="{{asset('storage/images/'.$row->pic)}}" alt=""  style="display: block;">
</span><span class="text">{{$row->title}}</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
{{$row->updated_at}}
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>{{$row->comment_id}}</span></a></li>
            </ul>
            @endforeach
        </div>
        <div class="widget widget_sentence">

            <a href="#" target="_blank" rel="nofollow" title="MZ-NetBlog主题" >
                <img style="width: 100%" src="{{asset('storage/images/ad.jpg')}}" alt="MZ-NetBlog主题" ></a>

        </div>
        <div class="widget widget_sentence">

            <a href="#" target="_blank" rel="nofollow" title="专业网站建设" >
                <img style="width: 100%" src="{{asset('storage/images/201610241224221511.jpg')}}" alt="专业网站建设" ></a>

        </div>
    </aside>
</section>
<footer class="footer">
    <div class="container">
        <p>Copyright &copy; 2016.Company name All rights reserved.More Templates  - Collect from </p>
    </div>
    <div id="gotop"><a class="gotop"></a></div>
</footer>
@stop
