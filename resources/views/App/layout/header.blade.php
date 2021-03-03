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
                        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="{{asset('storage/images/article/'.session('pic'))}}" style="width: 40px; height: 40px" alt=""><?php echo session('user_username')?><span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li><a title="查看或修改个人信息" data-toggle="modal" data-target="#seeUserInfo">个人信息</a></li>
                                <li><a href="/app/informationself">个人博客</a></li>
                            </ul>
                        </li>
                        <li><a href="/app/logout" >退出登录</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="modal fade" id="seeUserInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form action="/app/index/selfAdd" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">个人信息</h4>
                </div>
                <div class="modal-body">
                    <table class="table" style="margin-bottom:0px;">
                        <thead>
                        <tr> </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td wdith="20%">头像:</td>
                            <td width="80%"><img src="{{asset('storage/images/article/'.session('pic'))}}" style="width: 60px; height: 60px" alt=""><input type="file" name="pic" id="pic"></td>
                        </tr>
                        <tr>
                            <td wdith="20%">网名:</td>
                            <td width="80%"><input type="text" class="form-control" name="uaername" maxlength="10" autocomplete="off" value="{{session('user_username')}}"/></td>
                        </tr>
                        <tr>
                            <td wdith="20%">账号:</td>
                            <td width="80%"><input type="text" class="form-control" name="account" maxlength="10" autocomplete="off" value="{{session('user_account')}}"/></td>
                        </tr>
                        <tr>
                            <td wdith="20%">密码:</td>
                            <td width="80%"><input type="password" name="password" class="form-control" autocomplete="off" maxlength="18" value="{{session('user_password')}}"/></td>
                        </tr>

                        </tbody>
                        <tfoot>
                        <tr></tr>
                        </tfoot>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-primary">提交</button>
                </div>
            </div>
        </form>
    </div>
</div>