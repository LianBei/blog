<?php if(session('error')): ?>
    <div class="alert alert-danger" role="alert">
        <a href="#" class="alert-link"><<h2><?php echo e(session('error')); ?></h2></a>
    </div>
<?php endif; ?>
<?php if(session('success')): ?>
    <div class="alert alert-success" role="alert">
        <a href="#" class="alert-link"><h2><?php echo e(session('success')); ?></h2></a>
    </div>
<?php endif; ?>
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>