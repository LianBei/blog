<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <ul>
        <li><a href="/app/index/details?id=<?php echo e($row->id); ?>" ><span class="thumbnail">
<img class="thumb" src="<?php echo e(asset('storage/images/article/'.$row->pic)); ?>" alt=""  style="display: block;">
</span><span class="text"><?php echo e($row->title); ?></span><span class="muted"><i class="fa fa-clock-o"><?php echo e($row->created_at); ?></i>
                </span>
            </a>
    </ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>