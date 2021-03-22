<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="author" content="order by dede58.com"/>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>博客管理系统</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('back/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('back/css/style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('back/css/font-awesome.min.css')); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo e(asset('storage/images/icon/icon.png')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('storage/images/icon/favicon.ico')); ?>">
    <script src="<?php echo e(asset('back/js/jquery-3.2.1.min.js')); ?>"></script>
<!--[if gte IE 9]>
  <script src="<?php echo e(asset('back/js/html5shiv.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(asset('back/js/respond.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(asset('back/js/selectivizr-min.js')); ?>" type="text/javascript"></script>
<![endif]-->
    <!--[if lt IE 9]>
    <![endif]-->
</head>

<body class="user-select">
<section class="container-fluid">
    <?php echo $__env->make('Admin.layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('Admin.layout.left', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</section>
<?php echo $__env->yieldContent('content'); ?>
<script src="<?php echo e(asset('back/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('back/js/admin-scripts.js')); ?>"></script>
</body>
</html>
