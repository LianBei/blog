@extends('App.layout.layout')
@section('content')
    <section class="container">
        @include('App.layout.prompt')
        <div class="content-wrap">
            <div class="content">
                <header class="article-header">
                    <h1 class="article-title"><a href="#" title="{{$data->title}}" >{{$data->title}}</a></h1>
                    <div class="article-meta"> <span class="item article-meta-time">
	  <time class="time" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="发表时间：{{$data->created_at}}"><i class="fa fa-clock-o"></i>{{$data->created_at}}</time>
	  </span> <span class="item article-meta-source" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="来源：羊毛博客网"><i class="glyphicon glyphicon-globe"></i> 羊毛博客网</span> <span class="item article-meta-category" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="MZ-NetBlog主题"><i class="glyphicon glyphicon-list"></i> <a href="#" title="MZ-NetBlog主题" >{{$data->user_id}}</a></span> <span class="item article-meta-views" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="浏览量：219"><i class="glyphicon glyphicon-eye-open"></i> 219</span> <span class="item article-meta-comment" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="评论量"><i class="fa fa-comments"></i> 4</span> </div>
                </header>
                <article class="article-content">
                    @if($data->pic!='default.png')
                        <img src="{{asset('storage/images/article/'.$data->pic)}}" alt="" />
                    @endif

                    <p>{{$data->content}}</p>
                </article>
            </div>
            <div class="relates">
                <div class="title">
                    <h3>相关推荐</h3>
                </div>
                @foreach($new_article as $data)
                    <ul>
                        <li><a href="/app/index/details?id={{$data->id}}">{{$data->title}}</a></li>
                    </ul>
                @endforeach
            </div>
            <div class="title" id="comment">
                <h3>评论</h3>
            </div>
            <div id="respond">
                <form id="comment-form" name="comment-form" action="/app/comment" method="POST">
                    <div class="comment">
                        <div class="comment-box">
                            <input type="hidden" name="id" id="id" value="{{$data->id}}">
                            <textarea placeholder="您的评论或留言" name="comment" id="comment" cols="146%" rows="3" tabindex="3"></textarea>
                            <div class="comment-ctrl">
                                <div class="comment-prompt" style="display: none;"> <i class="fa fa-spin fa-circle-o-notch"></i> <span class="comment-prompt-text">评论正在提交中...请稍后</span> </div>
                                <div class="comment-success" style="display: none;"> <i class="fa fa-check"></i> <span class="comment-prompt-text">评论提交成功...</span> </div>
                                {{--    必须要写的  --}}
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <button type="submit" name="comment-submit" id="comment-submit" tabindex="4">评论</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div id="postcomments">
                <ol id="comment_list" class="commentlist">
                    @foreach($comment_data as $row)
                        <li class="comment-content">
                            <span class="comment-f">{{$row->id}}</span>
                            <div class="comment-main">
                                <p><a class="address" href="#" rel="nofollow"  >{{$row->user_id}}</a>
                                    <span class="time">({{$row->created_at}})</span><br>{{$row->comment}}</p>
                            </div>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
        <aside class="sidebar">
            <div class="fixed">
                <div class="widget widget-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#notice" aria-controls="notice" role="tab" data-toggle="tab" draggable="false">统计信息</a></li>
                        <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab" draggable="false">联系站长</a></li>
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
                                <a href=""   rel="nofollow" data-toggle="tooltip" data-placement="bottom" title="" draggable="false" data-original-title="QQ:577211782">577211782</a>
                            </h2>
                            <h2>Email:
                                <a href="mailto:577211782@qq.com"   data-toggle="tooltip" rel="nofollow" data-placement="bottom" title="" draggable="false" data-original-title="Email:577211782@qq.com">577211782@qq.com</a></h2>
                        </div>
                    </div>
                </div>
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
                @include('App.layout.left' , ['data' => $new_article])
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