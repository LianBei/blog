<?php $__env->startSection('content'); ?>
    <section class="container">
        <div class="content-wrap">
            <?php echo $__env->make('App.layout.prompt', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="content">
                <div class="title">
                    <h1 style="line-height: 1.8;text-align: center">新增文章</h1>
                </div>
                <div class="container" style="width: 100%; background-color: white" >
                    <div class="row">
                        <br><br>
                        <form action="/app/add" enctype="multipart/form-data" method="post" class="form-group col-md-12 form-inline">
                            <div class="col-md-12"><label class="" for="">标题：</label></div>
                            <div class="col-md-12"><input type="text" name="title" placeholder="请输入标题" class="form-control" style="width: 100%;"></div>
                            <div class="col-md-12"><label for="">内容：</label></div>
                            <div class="col-md-12"><textarea class="form-control" name="article" id="article" cols="30" rows="10" style="width: 100%"></textarea></div>
                            <div class="col-md-12"><label for="">图片：</label></div>
                            <div class="col-md-12"><input type="file" name="pic" id="pic"></div>
                            
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <div class="col-md-12" style="text-align: center">
                                <button type="submit" style="width: 50px">提交</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <aside class="sidebar">
            <div class="widget widget_hot">
                <h3>最新评论文章</h3>
                <?php $__currentLoopData = $new_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <ul>
                        <li><a href="/app/index/details?id=<?php echo e($row->id); ?>"><span class="thumbnail">
<img class="thumb" src="<?php echo e(asset('storage/images/article/'.$row->pic)); ?>" alt="" style="display: block;">
</span><span class="text"><?php echo e($row->title); ?></span><span class="muted"><i class="fa fa-clock-o"></i>
<?php echo e($row->created_at); ?>

</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i></span></a></li>
                    </ul>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </aside>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('App.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>