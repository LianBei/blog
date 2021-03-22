
<?php $__env->startSection('content'); ?>
	<section class="container">
		<?php echo $__env->make('App.layout.prompt', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="content-wrap">
			<div class="content">
				<div id="focusslide" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#focusslide" data-slide-to="0" class="active"></li>
						<li data-target="#focusslide" data-slide-to="1"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<a href="/">
								<img src="<?php echo e(asset('storage/images//201610181557196870.jpg')); ?>" alt="羊毛博客网源码" class="img-responsive"></a>
						</div>
						<div class="item">
							<a href="/"   title="专业网站建设" >
								<img src="<?php echo e(asset('storage/images//201610241227558789.jpg')); ?>" alt="专业网站建设" class="img-responsive"></a>
						</div>
					</div>
					<a class="left carousel-control" href="#focusslide" role="button" data-slide="prev" rel="nofollow"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">上一个</span> </a> <a class="right carousel-control" href="#focusslide" role="button" data-slide="next" rel="nofollow"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">下一个</span> </a> </div>
				<article class="excerpt-minic excerpt-minic-index">
					<h2><span class="red">【推荐】</span><a href="/app/index/details?id=<?php echo e($first_data->id); ?>"><?php echo e($first_data->title); ?></a>
					</h2>
					<p class="note"><?php echo e(mb_substr("$first_data->content", 0, 150)); ?></p>
				</article>
				<div class="title">
					<h3>最新发布</h3>
				</div>
				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<article class="excerpt excerpt-1" style="">
						<a class="focus" href="/app/index/details?id=<?php echo e($user->id); ?>"   ><img class="thumb" src="<?php echo e(asset('storage/images/article/'.$user->pic)); ?>" style="display: inline;"></a>
						<header><a class="cat" href="#" >作者：<?php echo e($user->username); ?><i></i></a>
							
							<h2><a href="/app/index/details?id=<?php echo e($user->id); ?>"   ><?php echo e($user->title); ?></a>
							</h2>
						</header>
						<p class="meta">
							<time class="time"><i class="fa fa-clock-o"></i> <?php echo e($user->created_at); ?></time>
							<a class="comment" title="评论"><i class="fa fa-comments">评论数：<?php echo e($user->count); ?></i></a>
						</p>
						<p class="note"><?php echo mb_substr("$user->content", 0, 150);?></p>
					</article>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
				<?php if($keyword): ?>
					<?php echo e($data->appends(['keyword'=>$keyword])->links()); ?>

				<?php else: ?>
					<?php echo e($data->links()); ?>

				<?php endif; ?>
			</div>
		</div>
		<aside class="sidebar">
			<div class="fixed">
				<div class="widget widget-tabs">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#notice" aria-controls="notice" role="tab" data-toggle="tab" >统计信息</a></li>
						<li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab" >联系站长</a></li>
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
							<h2>QQ:2126234014
								<a href=""   rel="nofollow" data-toggle="tooltip" data-placement="bottom" title=""  data-original-title="QQ:"></a>
							</h2>
							<h2>Email:2126234014@qq.com
								<a href="#"   data-toggle="tooltip" rel="nofollow" data-placement="bottom" title=""  data-original-title="#"></a></h2>
						</div>
					</div>
				</div>
				<div class="widget widget_search">
					<form class="navbar-form" action="/app/index/list" method="get">
						<div class="input-group">
							<input type="text" name="keyword" class="form-control" size="35" placeholder="请输入关键字" maxlength="15" autocomplete="off">
							<span class="input-group-btn">
		<button class="btn btn-default btn-search" type="submit">搜索</button>
		</span> </div>
					</form>
				</div>
			</div>
			<div class="widget widget_hot">
				<h3>最新评论文章</h3>
				<?php echo $__env->make('App.layout.left' , ['new_data' => $data], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('App.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>