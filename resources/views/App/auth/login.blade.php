
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>登录页面</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/denglu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/zhuce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/public.css')}}">
    <script type="text/javascript" src="{{asset('js/jquery-1.4.2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.SuperSlide.2.1.js')}}"></script>
</head>
<body>
<!--整体内容开始-->
<div class="denglu">
    <!--第一部分内容开始-->
    <div class="denglu-first1">
        <div class="denglu-first1-content">
            <div class="denglu-first1-content-left">
                <div class="logo">
                    <img src="img/denglu/1.png"  />
                </div>
                <div class="biaoti">
                    <p>3000多个实力品牌强势入驻</p>
                </div>
            </div>
            <div class="denglu-first1-content-right">
                <p class="jiamengrexian">快速代理加盟热线</p>
                <p class="dianhua">400-9955-520</p>
            </div>
        </div>
    </div>
    <!--第一部分内容结束-->
    <style>
        .carousel{width: 750px; height: 430px; float: left;}
        /* 本例子css */
        .focusBox{ margin:0 auto;  position:relative; width:750px; height:430px; margin-top: 50px; padding:5px; background:#f5f5f5; overflow:hidden; }
        .focusBox .hd{ height:22px; position:absolute; z-index:1; bottom:10px; right:10px; overflow:hidden;   }
        .focusBox .hd ul{ float:right;  overflow:hidden;  }
        .focusBox .hd li{ width:22px; height:22px; line-height:22px; text-align:center; background:#999; color:#fff; font-family:Arial; float:left; margin:0 1px; display:inline;
            -webkit-border-radius:22px; -moz-border-radius:22px; border-radius:22px; cursor:pointer;
        }
        .focusBox .hd li.on{ background:#c00; }
        .focusBox .bd li{ vertical-align:middle; }
        .focusBox .bd li img{ width:750px; height:430px; display:block;  background:url(img/loading.gif) center center no-repeat;  }
    </style>
    <!--第二部分内容开始-->
    <div class="denglu-frist2">
        <div class="denglu-first2-content">
            <div class="denglu-first2-content-top">
                <div class="carousel">
                    <div class="focusBox">
                        <div class="bd">
                            <ul>
                                <li><a  target="_blank" href="#"><img _src="img/denglu/bg.jpg" src="img/blank.png" /></a></li>
                                <li><a  target="_blank" href="#"><img _src="img/denglu/bg.jpg" src="img/blank.png" /></a></li>
                                <li><a  target="_blank" href="#"><img _src="img/denglu/bg.jpg" src="img/blank.png" /></a></li>
                                <li><a  target="_blank" href="#"><img _src="img/denglu/bg.jpg" src="img/blank.png" /></a></li>
                            </ul>
                        </div>
                        <div class="hd">
                            <ul></ul>
                        </div>
                    </div>

                    <script type="text/javascript">
                        jQuery(".focusBox").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"top", autoPlay:true, autoPage:true, switchLoad:"_src" });
                    </script>
                </div>
                <div class="denglu-top-contents">
                    <div class="denglu-top-contents-top">
                        <p><span>最新公告：</span>最新农家店加盟&nbsp;&nbsp;合肥市肥东县**&nbsp;&nbsp;恭喜李小姐加盟 !</p>
                    </div>
                    <div class="denglu-top-contents-bottom">
                        <div class="contents-bottom-neirong">
                            <div class="contents-bottom-neirong-first1">
                                <div class="hasMoreTab" style="margin:0 auto">
                                    <div class="hd">
                                        <ul>
                                            <li class="li1">使用本站账户</li>
                                            <li>注册</li>
                                        </ul>
                                    </div>
                                    <form action="/app/auth/login" method="post">
                                    <div class="bd">
                                        <div class="conWrap">
                                            <div class="con">
                                                <div class="yonghuming">
                                                    <input type="text" id="name" name="account" value="" placeholder="用户名" class="shurukuang">
                                                </div>
                                                <div class="yonghuming-mima">
                                                    <input type="password" id="name" name="password" value="" placeholder="密码" class="shurukuang">
                                                </div>
                                                {{--    必须要写的--}}
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <a href="/">
                                                    <div class="denglu1">
                                                        <p><input type="submit" value="提交" style="width: 100%;height: 50px;background: #bd0000"></p>
                                                    </div>
                                                </a>
                                    </form>
                                                <div class="zhuce">
                                                    <p>
                                                        还没有登录账号？
                                                        <a href="">
                                                            <span>注册</span>
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="xieyi">
                                                    <p>同意<span>《用户使用协议》</span></p>
                                                    <input type="checkbox" class="danxuan" />
                                                </div>
                                                <div class="qqdenglu">
                                                    <div class="qqdenglu-left">
                                                    </div>
                                                    <a href="#">
                                                        <div class="qqdenglu-middle">
                                                            使用第三方账号登录
                                                        </div>
                                                    </a>
                                                    <div class="qqdenglu-right">
                                                    </div>
                                                </div>
                                            </div>


                                <form action="/app/auth/registered" method="post" enctype="multipart/form-data">
                                            <div class="con">
                                                <div class="yonghuming">
                                                    <input type="text" id="name" name="account" value="" placeholder="请输入要注册的账号" class="shurukuang">
                                                </div>

                                                <div class="nicheng">
                                                    <input type="text" id="name" name="username" value="" placeholder="请输入要注册的昵称" class="shurukuang">
                                                </div>
                                                <div class="mima">
                                                    <input type="password" id="name" name="password" value="" placeholder="请输入要注册的密码" class="shurukuang">
                                                </div>
                                                <div class="yonghuming_mima1">
                                                    <div class="modal-body">图片:<input type="file" name="pic" id="pic"></div>
                                                </div>
                                                {{--    必须要写的--}}
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <a href="#">
                                                    <div class="denglu1">
                                                        <p><input type="submit" value="提交" style="width: 100%;height: 50px;background: #bd0000"></p>
                                                    </div>
                                                </a>
                                                <div class="qqdenglu">
                                                    <div class="qqdenglu-left">
                                                    </div>
                                                    <a href="#">
                                                        <div class="qqdenglu-middle">
                                                            使用第三方账号登录
                                                        </div>
                                                    </a>
                                                    <div class="qqdenglu-right">
                                                    </div>
                                                </div>
                                            </div>
                                </form>
                                        </div>

                                    </div>
                                </div>
                                <script type="text/javascript">
                                    jQuery(".hasMoreTab").slide({ mainCell:".conWrap", targetCell:".more a", effect:"fold"});
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="denglu-first2-content-bottom">
                <div class="bottom-left">
                    <div class="bottom-left-top">
                        <p>安全保障</p>
                    </div>
                    <div class="bottom-left-footer">
                        <p>
                            ****网站保障消费者账号密码等重要信息的安全
                        </p>
                    </div>
                </div>
                <div class="bottom-middle">
                    <div class="bottom-left-top">
                        <p>一键登录</p>
                    </div>
                    <div class="bottom-left-footer">
                        <p>
                            支持邮箱、手机号、昵称等多种其他账号登录，方便快捷
                        </p>
                    </div>
                </div>
                <div class="bottom-right">
                    <div class="bottom-left-top">
                        <p>贴心客服</p>
                    </div>
                    <div class="bottom-left-footer">
                        <p>
                            客服热线：400-9955-520
                        </p>
                        <p>
                            客服邮箱：********@qq.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--第二部分内容结束-->
</div>
<!--整体内容结束-->
<!--登录尾部内容开始-->
<div class="denglu-footer">
    <div class="denglu-footer-content">
        合肥市*****有限公司 版权所有 2015-2016  皖ICP备10216464645号&nbsp;&nbsp;
        <a href="#">关于万千E盟</a>&nbsp; |&nbsp;
        <a href="#">帮助中心</a> &nbsp;|&nbsp;
        <a href="#">网站合作</a>&nbsp;|&nbsp;
        <a href="#">版权说明</a>&nbsp;|&nbsp;
        <a href="#">诚聘英才</a>&nbsp;|&nbsp;
        <a href="#">联系我们</a>
    </div>
</div>
<!--登录尾部内容结束-->
</body>
</html>
