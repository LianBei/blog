<style>
    .img{
        width: 70px;
        height: 50px;

        left:1550px;
        top:0;
    }
</style>
<header>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">切换导航</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="/">blog</a> </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav navbar-right">
                    <li><img  class="img" src="<?php echo e(asset('storage/images/default.png')); ?>" alt=""></li>
                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">admin <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            <li><a title="查看个人信息" data-toggle="modal" data-target="#seeUserInfo">个人信息</a></li>
                        </ul>
                    </li>
                    <li><a href="/logout" onClick="if(!confirm('是否确认退出？'))return false;">退出登录</a></li>
                    <li><a data-toggle="modal" data-target="#WeChat">帮助</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>