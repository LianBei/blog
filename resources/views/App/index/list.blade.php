@extends('App.layout.layout')
@section('content')
    <section class="container">
        @include('App.layout.prompt')
        <div class="content-wrap">
            <div class="content">
                <div class="title">
                    <h3 style="line-height: 1.3">热门博客</h3>
                </div>
                @foreach($new_data as $user)
                    <article class="excerpt excerpt-5"><a class="focus" href="/app/index/details?id={{$user->id}}" ><img class="thumb" src="{{asset('storage/images/article/'.$user->pic)}}" style="display: inline;"></a>
                        <header><a class="cat" href="#">作者：{{$user->username}}<i></i></a>
                            <h2><a href="/app/index/details?id={{$user->id}}" >{{$user->title}}</a></h2>
                        </header>
                        <p class="meta">
                            <time class="time"><i class="fa fa-clock-o"></i> {{$user->created_at}}</time>
                            <a class="comment"  title="评论" ><i class="fa fa-comments">评论数： {{$user->count}}</i></a></p>
                        <p class="note"><?php echo mb_substr("$user->content", 0, 150);?></p>
                    </article>
                @endforeach
                {{--			分页--}}
                @if($keyword)
                    {{ $new_data->appends(['keyword'=>$keyword])->links() }}
                @else
                    {{$new_data->links()}}
                @endif
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
                @include('App.layout.left' , ['data' => $list_data ])
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
