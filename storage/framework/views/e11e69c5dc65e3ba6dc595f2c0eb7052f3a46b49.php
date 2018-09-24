<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>
        Create Note
    </h1>

    <?php if(count($errors)>0): ?>

        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <li class="alert alert-danger"><?php echo e($error); ?></li>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>
        
    <?php endif; ?>

    <form action="<?php echo e(route('notes.store')); ?>" method="POST">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <label for="title">
                Note Title
            </label>
            <input class="form-control" name="title" type="text">
            
        </div>
        <div class="form-group">
            <label for="body">
                Note Body
            </label>
            <input class="form-control" name="body" type="text">
            
        </div>

        <input type="hidden" name="notebook_id" value="<?php echo e($id); ?>">
        
        <input class="btn btn-primary" type="submit" value="Done">
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>