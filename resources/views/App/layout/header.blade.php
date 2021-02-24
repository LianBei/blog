<header class="header">
    <nav class="navbar navbar-default" id="navbar">
        <div class="container">
            <div class="header-topbar hidden-xs link-border">
                勤记录 懂分享</div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar" aria-expanded="false"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <h1 class="logo hvr-bounce-in"><a href="/" title="连蓓大佬的博客"><img src="{{asset('storage/images/201610171329086541.png')}}" alt="连蓓大佬的博客"></a></h1>
            </div>
            <div class="collapse navbar-collapse" id="header-navbar">
                <form class="navbar-form visible-xs" action="/Search" method="post">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control" placeholder="请输入关键字" maxlength="20" autocomplete="off">
                        <span class="input-group-btn">
		<button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
		</span> </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">首页</a></li>
                    <li><a href="/app/auth/list">列表页</a></li>
                    <li><a href="#" >IT技术笔记</a></li>
                    <li><a href="#" >源码分享</a></li>
                    <li><a href="#" >靠谱网赚</a></li>
                    <li><a href="#" >资讯分享</a></li>
                    <li><a href="/app/login" >登录</a></li>
                    <li><a href="/registered" >注册</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>