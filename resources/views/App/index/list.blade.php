@extends('App.layout.layout')
@section('content')
<section class="container">
    <div class="content-wrap">
        <div class="content">
            <div class="title">
                <h3 style="line-height: 1.3">MZ-NetBlog主题</h3>
            </div>
            @foreach($data as $user)
            <article class="excerpt excerpt-5"><a class="focus" href="#" ><img class="thumb" src="{{asset('storage/images/article/'.$user->pic)}}" style="display: inline;"></a>
                <header><a class="cat" href="#">MZ-NetBlog主题<i></i></a>
                    <h2><a href="/app/index/details?id={{$user->id}}" >{{$user->title}}</a></h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i> {{$user->updated_at}}</time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i></span> <a class="comment" href="#comment" title="评论" ><i class="glyphicon glyphicon-comment"></i> 4</a></p>
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
        </div>
        <div class="widget widget_hot">
            <h3>最新评论文章</h3>
            @foreach($new_data as $row)
            <ul>
                <li><a href="/app/index/details?id={{$row->id}}" ><span class="thumbnail">
<img class="thumb" src="{{asset('storage/images/article/'.$row->pic)}}" alt=""  style="display: block;">
</span><span class="text">{{$row->title}}</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
{{$row->updated_at}}
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i></span></a></li>
            </ul>
            @endforeach
        </div>
        <div class="widget widget_sentence">

            <a href="#" rel="nofollow" title="MZ-NetBlog主题" >
                <img style="width: 100%" src="{{asset('storage/images/ad.jpg')}}" alt="MZ-NetBlog主题" ></a>

        </div>
        <div class="widget widget_sentence">

            <a href="#" rel="nofollow" title="专业网站建设" >
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
