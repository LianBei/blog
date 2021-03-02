<header class="header">
    <nav class="navbar navbar-default" id="navbar">
        <div class="container">
            <div class="header-topbar hidden-xs link-border">
                勤记录 懂分享</div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar" aria-expanded="false"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <h1 class="logo hvr-bounce-in"><a href="/" title="羊毛博客网"><img src="{{asset('storage/images/201610171329086541.png')}}" alt="羊毛博客网"></a></h1>
            </div>
            <div class="collapse navbar-collapse" id="header-navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">首页</a></li>
                    <li><a href="/app/index/list">列表页</a></li>
                    <li><a href="/app/index/add">新增页</a></li>
                    @if(!session('user_id'))
                    <li><a href="/app/login" >登录</a></li>
                    @endif
                    @if(session('user_id'))
                        <li><img src="{{asset('storage/images/article/'.session('pic'))}}" style="width: 40px; height: 40px" alt=""></li>
                        <li><h3 style="color: #cc0000"><?php echo session('user_username')?></h3></li>
                        <li><a href="/app/logout" >退出登录</a></li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>
</header>