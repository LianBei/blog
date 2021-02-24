@extends('App.layout.layout')
@section('content')

<section class="container">
	<div class="content-wrap">
		<div class="content">
			<div id="focusslide" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#focusslide" data-slide-to="0" class="active"></li>
					<li data-target="#focusslide" data-slide-to="1"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<a href="#" target="_blank" title="连蓓大佬的博客源码" >
							<img src="{{asset('storage/images//201610181557196870.jpg')}}" alt="连蓓大佬的博客源码" class="img-responsive"></a>
					</div>
					<div class="item">
						<a href="#" target="_blank" title="专业网站建设" >
							<img src="{{asset('storage/images//201610241227558789.jpg')}}" alt="专业网站建设" class="img-responsive"></a>
					</div>
				</div>
				<a class="left carousel-control" href="#focusslide" role="button" data-slide="prev" rel="nofollow"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">上一个</span> </a> <a class="right carousel-control" href="#focusslide" role="button" data-slide="next" rel="nofollow"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">下一个</span> </a> </div>
			<article class="excerpt-minic excerpt-minic-index">
				<h2><span class="red">【推荐】</span><a target="_blank" href="#" title="用DTcms做一个独立博客网站（响应式模板）" >用DTcms做一个独立博客网站（响应式模板）</a>
				</h2>
				<p class="note">用DTcms做一个独立博客网站（响应式模板），采用DTcms V4.0正式版（MSSQL）。开发环境：SQL2008R2+VS2010。DTcms V4.0正式版功能修复和优化：1、favicon.ico图标后台上传。（解决要换图标时要连FTP或者开服务器的麻烦）</p>
			</article>
			<div class="title">
				<h3>最新发布</h3>
				<div class="more">
					<a href="#" title="IT技术笔记" >IT技术笔记</a>
					<a href="#" title="源码分享" >源码分享</a>
					<a href="#" title="靠谱网赚" >靠谱网赚</a>
					<a href="#" title="资讯分享" >资讯分享</a>
				</div>
			</div>
			@foreach($data as $user)
				<article class="excerpt excerpt-1" style="">
					<a class="focus" href="#" target="_blank" ><img class="thumb" src="{{asset('storage/images/article/'.$user->pic)}}" style="display: inline;"></a>
					<header><a class="cat" href="#" >MZ-NetBlog主题<i></i></a>
{{--						target="_blank 点击时会打开新页面--}}
						<h2><a href="/app/index/details?id={{$user->id}}" target="_blank" >{{$user->title}}</a>
						</h2>
					</header>
					<p class="meta">
						<time class="time"><i class="glyphicon glyphicon-time"></i> {{$user->updated_at}}</time>
						<span class="views"><i class="glyphicon glyphicon-eye-open"></i></span> <a class="comment" href="##comment" title="评论" target="_blank" ><i class="glyphicon glyphicon-comment"></i> 4</a>
					</p>
					<p class="note"><?php echo mb_substr("$user->content", 0, 150);?></p>
				</article>
			@endforeach
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
						<h2>QQ:
							<a href="" target="_blank" rel="nofollow" data-toggle="tooltip" data-placement="bottom" title=""  data-original-title="QQ:"></a>
						</h2>
						<h2>Email:
							<a href="#" target="_blank" data-toggle="tooltip" rel="nofollow" data-placement="bottom" title=""  data-original-title="#"></a></h2>
					</div>
				</div>
			</div>
			<div class="widget widget_search">
				<form class="navbar-form" action="/Search" method="post">
					<div class="input-group">
						<input type="text" name="keyword" class="form-control" size="35" placeholder="请输入关键字" maxlength="15" autocomplete="off">
						<span class="input-group-btn">
		<button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
		</span> </div>
				</form>
			</div>
		</div>
		<div class="widget widget_hot">
			<h3>最新评论文章</h3>
			@foreach($data as $row)
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
			<a href="#" target="_blank" rel="nofollow" title="专业网站建设" >
				<img style="width: 100%" src="{{asset('storage/images//201610241224221511.jpg')}}" alt="专业网站建设" ></a>
		</div>
		<div class="widget widget_sentence">
			<a href="#" target="_blank" rel="nofollow" title="MZ-NetBlog主题" >
				<img style="width: 100%" src="{{asset('storage/images/ad.jpg')}}" alt="MZ-NetBlog主题" ></a>
		</div>
		<div class="widget widget_sentence">
			<h3>友情链接</h3>
			<div class="widget-sentence-link">
				<a href="#" title="网站建设" target="_blank" >网站建设</a>&nbsp;&nbsp;&nbsp;
			</div>
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