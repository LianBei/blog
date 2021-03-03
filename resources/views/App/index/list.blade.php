@extends('App.layout.layout')
@section('content')
<section class="container">
    <div class="content-wrap">
        <div class="content">
            <div class="title">
                <h3 style="line-height: 1.3">热门博客</h3>
            </div>
            @foreach($data as $user)
            <article class="excerpt excerpt-5"><a class="focus" href="/app/index/details?id={{$user->id}}" ><img class="thumb" src="{{asset('storage/images/article/'.$user->pic)}}" style="display: inline;"></a>
                <header><a class="cat" href="#">作者：{{$user->user_id}}<i></i></a>
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
                <form class="navbar-form" action="/app/index/list" method="get">
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
            @include('App.layout.left' , ['data' => $data ])
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
