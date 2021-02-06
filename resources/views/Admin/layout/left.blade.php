<div class="row">
    <aside class="col-sm-3 col-md-2 col-lg-2 sidebar">
        <div>
            <ul class="nav nav-sidebar">
                <li @if(strpos($_SERVER['REQUEST_URI'], 'admin/index')) class="active" @endif><a href="/admin/index">报告</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li @if(strpos($_SERVER['REQUEST_URI'], 'admin/article')) class="active" @endif><a href="/admin/article">文章</a></li>
                <li @if(strpos($_SERVER['REQUEST_URI'], 'admin/comment')) class="active" @endif><a href="/admin/comment">评论</a></li>
                <li><a data-toggle="tooltip" data-placement="bottom" title="网站暂无留言功能">留言</a></li>
            </ul>
        </div>
    </aside>

    <!--个人信息模态框-->
    <div class="modal fade" id="seeUserInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <form action="" method="post">
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
                                <td wdith="20%">姓名:</td>
                                <td width="80%"><input type="text" class="form-control" name="truename" maxlength="10" autocomplete="off"/></td>
                            </tr>
                            <tr>
                                <td wdith="20%">用户名:</td>
                                <td width="80%"><input type="text" class="form-control" name="username" maxlength="10" autocomplete="off"/></td>
                            </tr>
                            <tr>
                                <td wdith="20%">电话:</td>
                                <td width="80%"><input type="text" class="form-control" name="usertel" maxlength="13" autocomplete="off"/></td>
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
    <!--个人登录记录模态框-->
    <div class="modal fade" id="seeUserLoginlog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" >登录记录</h4>
                </div>
                <div class="modal-body">
                    <table class="table" style="margin-bottom:0px;">
                        <thead>
                        <tr>
                            <th>登录IP</th>
                            <th>登录时间</th>
                            <th>状态</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>::1:55570</td>
                            <td>2016-01-08 15:50:28</td>
                            <td>成功</td>
                        </tr>
                        <tr>
                            <td>::1:64377</td>
                            <td>2016-01-08 10:27:44</td>
                            <td>成功</td>
                        </tr>
                        <tr>
                            <td>::1:64027</td>
                            <td>2016-01-08 10:19:25</td>
                            <td>成功</td>
                        </tr>
                        <tr>
                            <td>::1:57081</td>
                            <td>2016-01-06 10:35:12</td>
                            <td>成功</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">朕已阅</button>
                </div>
            </div>
        </div>
    </div>
    <!--微信二维码模态框-->
    <div class="modal fade user-select" id="WeChat" tabindex="-1" role="dialog" aria-labelledby="WeChatModalLabel">
        <div class="modal-dialog" role="document" style="margin-top:120px;max-width:280px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="WeChatModalLabel" style="cursor:default;">微信扫一扫</h4>
                </div>
                <div class="modal-body" style="text-align:center"> <img src="images/weixin.jpg" alt="" style="cursor:pointer"/> </div>
            </div>
        </div>
    </div>
    <!--提示模态框-->
    <div class="modal fade user-select" id="areDeveloping" tabindex="-1" role="dialog" aria-labelledby="areDevelopingModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="areDevelopingModalLabel" style="cursor:default;">该功能正在日以继夜的开发中…</h4>
                </div>
                <div class="modal-body"> <img src="images/baoman/baoman_01.gif" alt="深思熟虑" />
                    <p style="padding:15px 15px 15px 100px; position:absolute; top:15px; cursor:default;">很抱歉，程序猿正在日以继夜的开发此功能，本程序将会在以后的版本中持续完善！</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">朕已阅</button>
                </div>
            </div>
        </div>
    </div>
    <!--右键菜单列表-->
    <div id="rightClickMenu">
        <ul class="list-group rightClickMenuList">
            <li class="list-group-item disabled">欢迎访问异清轩博客</li>
            <li class="list-group-item"><span>IP：</span>172.16.10.129</li>
            <li class="list-group-item"><span>地址：</span>河南省郑州市</li>
            <li class="list-group-item"><span>系统：</span>Windows10 </li>
            <li class="list-group-item"><span>浏览器：</span>Chrome47</li>
        </ul>
    </div>
</div>