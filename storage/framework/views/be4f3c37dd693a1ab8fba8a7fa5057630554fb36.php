<?php $__env->startSection('content'); ?>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
        <?php echo $__env->make('Admin.layout.prompt', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <h1 class="page-header">状态</h1>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <tbody>
                <tr>
                    <td>登录者: <span><?php echo e(session('admin_name')); ?></span>,欢迎回来</td>
                </tr>
                <tr>
                    <td>上次登录时间: <span><?php echo e(session('admin_created_at')); ?></span> </td>
                </tr>
                </tbody>
            </table>
        </div>
        <h1 class="page-header">系统信息</h1>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <tr> </tr>
                </thead>
                <tbody>
                <tr>
                    <td>管理员个数:</td>
                    <td>2 人</td>
                    <td>服务器软件:</td>
                    <td>Apache/2.4.10 (Win32) OpenSSL/1.0.1i mod_fcgid/2.3.9</td>
                </tr>
                <tr>
                    <td>浏览器:</td>
                    <td>Chrome47</td>
                    <td>PHP版本:</td>
                    <td>5.6.1</td>
                </tr>
                <tr>
                    <td>操作系统:</td>
                    <td>Windows 10</td>
                    <td>PHP运行方式:</td>
                    <td>CGI-FCGI</td>
                </tr>
                <tr>
                    <td>登录者IP:</td>
                    <td>::1:55570</td>
                    <td>MYSQL版本:</td>
                    <td>5.5.40</td>
                </tr>
                <tr>
                    <td>程序版本:</td>
                    <td class="version">YlsatCMS v 1.0 <font size="-6" color="#BBB">(20160108160215)</font></td>
                    <td>上传文件:</td>
                    <td>可以 <font size="-6" color="#BBB">(最大文件：2M ，表单：8M )</font></td>
                </tr>
                <tr>
                    <td>程序编码:</td>
                    <td>UTF-8</td>
                    <td>当前时间:</td>
                    <td>2016-01-08 15:50:30</td>
                </tr>
                </tbody>
                <tfoot>
                <tr></tr>
                </tfoot>
            </table>
        </div>
        <footer>
            <h1 class="page-header">程序信息</h1>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <tbody>
                    <tr>
                        <td><span style="display:inline-block; width:8em">版权所有</span> POWERED BY WY ALL RIGHTS RESERVED</td>
                    </tr>
                    <tr>
                        <td><span style="display:inline-block;width:8em">页面加载时间</span> PROCESSED IN 1.0835s  SECONDS</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </footer>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>