@extends('App.layout.layout')
@section('content')
	<section class="container">
		@include('App.layout.prompt')
		<div class="content-wrap">
			<div class="content">
				<div id="focusslide" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#focusslide" data-slide-to="0" class="active"></li>
						<li data-target="#focusslide" data-slide-to="1"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<a href="/">
								<img src="{{asset('storage/images//201610181557196870.jpg')}}" alt="羊毛博客网源码" class="img-responsive"></a>
						</div>
						<div class="item">
							<a href="/"   title="专业网站建设" >
								<img src="{{asset('storage/images//201610241227558789.jpg')}}" alt="专业网站建设" class="img-responsive"></a>
						</div>
					</div>
					<a class="left carousel-control" href="#focusslide" role="button" data-slide="prev" rel="nofollow"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">上一个</span> </a> <a class="right carousel-control" href="#focusslide" role="button" data-slide="next" rel="nofollow"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">下一个</span> </a> </div>
				<article class="excerpt-minic excerpt-minic-index">
					<h2><span class="red">【推荐】</span><a href="/app/index/details?id={{$first_data->id}}">{{$first_data->title}}</a>
					</h2>
					<p class="note">{{mb_substr("$first_data->content", 0, 150)}}</p>
				</article>
				<div class="title">
					<h3>最新发布</h3>
				</div>
				@foreach($data as $user)
					<article class="excerpt excerpt-1" style="">
						<a class="focus" href="/app/index/details?id={{$user->id}}"   ><img class="thumb" src="{{asset('storage/images/article/'.$user->pic)}}" style="display: inline;"></a>
						<header><a class="cat" href="#" >作者：{{$user->username}}<i></i></a>
							{{--						target="_blank 点击时会打开新页面--}}
							<h2><a href="/app/index/details?id={{$user->id}}"   >{{$user->title}}</a>
							</h2>
						</header>
						<p class="meta">
							<time class="time"><i class="fa fa-clock-o"></i> {{$user->created_at}}</time>
							<a class="comment" title="评论"><i class="fa fa-comments">评论数：{{$user->count}}</i></a>
						</p>
						<p class="note"><?php echo mb_substr("$user->content", 0, 150);?></p>
					</article>
				@endforeach
				{{--			分页--}}
				@if($keyword)
					{{ $data->appends(['keyword'=>$keyword])->links() }}
				@else
					{{$data->links()}}
				@endif
			</div>
		</div>
		<aside class="sidebar">
			<div class="fixed">
				<div class="widget widget-tabs">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#notice" aria-controls="notice" role="tab" data-toggle="tab" >统计信息</a></li>
						<li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab" >联系站长</a></li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane contact active" id="notice">
							<h2>日志总数:
								888篇
							</h2>
							<h2>网站运行:
								<span id="sitetime">88天 </span></h2>
						</div>
						<div role="tabpanel" class="tab-pane contact" id="contact">
							<h2>QQ:2126234014
								<a href=""   rel="nofollow" data-toggle="tooltip" data-placement="bottom" title=""  data-original-title="QQ:"></a>
							</h2>
							<h2>Email:2126234014@qq.com
								<a href="#"   data-toggle="tooltip" rel="nofollow" data-placement="bottom" title=""  data-original-title="#"></a></h2>
						</div>
					</div>
				</div>
				<div class="widget widget_search">
					<form class="navbar-form" action="/app/index/list" method="get">
						<div class="input-group">
							<input type="text" name="keyword" class="form-control" size="35" placeholder="请输入关键字" maxlength="15" autocomplete="off">
							<span class="input-group-btn">
		<button class="btn btn-default btn-search" type="submit">搜索</button>
		</span> </div>
					</form>
				</div>
			</div>
			<div class="widget widget_hot">
				<h3>最新评论文章</h3>
				@include('App.layout.left' , ['new_data' => $data])
			</div>
		</aside>
	</section>
	<footer class="footer">
		<div class="container">
			<p>Copyright &copy; 2016.Company name All rights reserved.More Templates - Collect from</p>
		</div>
		<div id="gotop"><a class="gotop"></a></div>
	</footer>
	<style>
		.copyrights{text-indent:-9999px;height:0;line-height:0;font-size:0;overflow:hidden;}
	</style>
	<div class="copyrights" id="links20210126">
		Collect from <a href="http://www.cssmoban.com/"  title="网站模板">模板之家</a>
		<a href="http://cooco.net.cn/" title="组卷网">组卷网</a>
	</div>
@stop