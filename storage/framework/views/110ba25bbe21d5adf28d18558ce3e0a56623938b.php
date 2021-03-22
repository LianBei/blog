<?php $__env->startSection('content'); ?>
    <section class="container">
        <?php echo $__env->make('App.layout.prompt', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="content-wrap">
            <div class="content">
                <div class="title">
                    <h3 style="line-height: 1.3">热门博客</h3>
                </div>
                <?php $__currentLoopData = $new_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="excerpt excerpt-5"><a class="focus" href="/app/index/details?id=<?php echo e($user->id); ?>" ><img class="thumb" src="<?php echo e(asset('storage/images/article/'.$user->pic)); ?>" style="display: inline;"></a>
                        <header>
                            <h2><a href="/app/index/details?id=<?php echo e($user->id); ?>" ><?php echo e($user->title); ?></a></h2>
                        </header>
                        <p class="meta">
                            <time class="time"><i class="fa fa-clock-o"></i> <?php echo e($user->created_at); ?></time>
                            <a class="comment" title="评论" ><i class="fa fa-comments"></i> 4</a></p>
                        <p class="note"><?php echo mb_substr("$user->content", 0, 150);?></p>
                        <div style="float: right">
                            <button style="width: 80px;height: 30px"><a href="/app/edit?id=<?php echo e($user->id); ?>">编辑</a></button>
                            <button style="width: 80px;height: 30px"><a href="/app/delete?id=<?php echo e($user->id); ?>">删除</a></button>
                        </div>
                    </article>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <aside class="sidebar">
            <div class="fixed">
                <div class="widget widget_search">
                    <form class="navbar-form" action="/app/index/list" method="get">
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control" size="35" placeholder="请输入关键字" maxlength="15" autocomplete="off">
                            <span class="input-group-btn">
		<button class="btn btn-default btn-search" type="submit" >搜索</button>
		</span> </div>
                    </form>
                </div>
            </div>
            <div class="widget widget_hot">
                <h3>最新评论文章</h3>
                <?php echo $__env->make('App.layout.left' , ['data' => $new_data ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>

        </aside>
    </section>
    <footer class="footer">
        <div class="container">
            <p>Copyright &copy; 2016.Company name All rights reserved.More Templates  - Collect from </p>
        </div>
        <div id="gotop"><a class="gotop"></a></div>
    </footer>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('App.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>