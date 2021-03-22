<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>登录页面</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/denglu.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/zhuce.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/public.css')); ?>">
    <script type="text/javascript" src="<?php echo e(asset('js/jquery-1.4.2.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/jquery.SuperSlide.2.1.js')); ?>"></script>
    <script language="JavaScript">
        function startTime()
        {
            var today=new Date();//定义日期对象
            var yyyy = today.getFullYear();//通过日期对象的getFullYear()方法返回年
            var MM = today.getMonth()+1;//通过日期对象的getMonth()方法返回年
            var dd = today.getDate();//通过日期对象的getDate()方法返回年
            var hh=today.getHours();//通过日期对象的getHours方法返回小时
            var mm=today.getMinutes();//通过日期对象的getMinutes方法返回分钟
            var ss=today.getSeconds();//通过日期对象的getSeconds方法返回秒
            // 如果分钟或小时的值小于10，则在其值前加0，比如如果时间是下午3点20分9秒的话，则显示15：20：09
            MM=checkTime(MM);
            dd=checkTime(dd);
            mm=checkTime(mm);
            ss=checkTime(ss);
            var day; //用于保存星期（getDay()方法得到星期编号）
            if(today.getDay()==0)   day   =   "星期日 "
            if(today.getDay()==1)   day   =   "星期一 "
            if(today.getDay()==2)   day   =   "星期二 "
            if(today.getDay()==3)   day   =   "星期三 "
            if(today.getDay()==4)   day   =   "星期四 "
            if(today.getDay()==5)   day   =   "星期五 "
            if(today.getDay()==6)   day   =   "星期六 "
            document.getElementById('nowDateTimeSpan').innerHTML=yyyy+"-"+MM +"-"+ dd +" " + hh+":"+mm+":"+ss+"   " + day;
            setTimeout('startTime()',1000);//每一秒中重新加载startTime()方法
        }

        function checkTime(i)
        {
            if (i<10){
                i="0" + i;
            }
            return i;
        }
    </script>
</head>
<body onload="startTime()">
<?php echo $__env->make('App.layout.prompt', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="denglu">
    <!--第一部分内容开始-->
    <div class="denglu-first1">
        <div class="denglu-first1-content">
            <div class="denglu-first1-content-left">
                <div class="logo">
                    <img src="<?php echo e(asset('storage/images/article/1.png')); ?>"  />
                </div>
                <div class="biaoti">
                    <p>3000多个实力品牌强势入驻</p>
                </div>
            </div>

            <div class="denglu-first1-content-right">
                <p class="jiamengrexian">快速代理加盟热线</p>
                <p class="dianhua">132-7595-2026</p>
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
                                <li><a  target="_blank"><img _src="<?php echo e(asset('storage/images/article/blank.png')); ?>" src="<?php echo e(asset('storage/images/article/blank.png')); ?>" /></a></li>
                                <li><a  target="_blank"><img _src="<?php echo e(asset('storage/images/article/blank1.png')); ?>" src="<?php echo e(asset('storage/images/article/blank1.png')); ?>" /></a></li>
                                <li><a  target="_blank"><img _src="<?php echo e(asset('storage/images/article/blank2.png')); ?>" src="<?php echo e(asset('storage/images/article/blank2.png')); ?>" /></a></li>
                                <li><a  target="_blank"><img _src="<?php echo e(asset('storage/images/article/blank3.png')); ?>" src="<?php echo e(asset('storage/images/article/blank3.png')); ?>" /></a></li>
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
                        <font style="text-align: center"><p id="nowDateTimeSpan"></p></font>
                        <p style="text-align: center"><span>最新公告：</span>最新大V加盟&nbsp;&nbsp;羊毛博客&nbsp;&nbsp;恭喜加盟 !</p>
                    </div>
                    <br>
                    <br>
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
                                                    <br>
                                                    <br>
                                                    <div class="yonghuming">
                                                        <input type="text" id="name" name="account" value="" placeholder="用户名" class="shurukuang">
                                                    </div>
                                                    <br>
                                                    <div class="yonghuming-mima">
                                                        <input type="password" id="name" name="password" value="" placeholder="密码" class="shurukuang">
                                                    </div>
                                                    
                                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                                    <a href="/">
                                                        <div class="denglu1">
                                                            <p><input type="submit" value="提交" style="width: 100%;height: 50px;background: #bd0000"></p>
                                                        </div>
                                                    </a>
                                    </form>
                                    <br>
                                    <br>
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
                                        
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
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
                羊毛博客网站保障消费者账号密码等重要信息的安全
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
                客服热线：132-7595-2026
            </p>
            <p>
                客服邮箱：2126234014@qq.com
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
        羊毛有限公司 版权所有&nbsp;&nbsp;
        <a href="#">关于万千E盟</a>&nbsp; |&nbsp;
        <a href="#">网站合作</a>&nbsp;|&nbsp;
        <a href="#">版权说明</a>&nbsp;|&nbsp;
        <a href="#">诚聘英才</a>&nbsp;|&nbsp;
        <a href="#">联系我们</a>
    </div>
</div>
<!--登录尾部内容结束-->
</body>
</html>