<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="pull-xs-left">
        Notes
    </h1>
    <div class="pull-xs-right">
        <a class="btn btn-primary" href="<?php echo e(route('createNote',$notebook->id)); ?>" role="button">
            New Note +
        </a>
    </div>
    <div class="clearfix">
    </div>
    <!-- notes -->
    <div class="list-group notes-group">
        <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card card-block">
            <a href="<?php echo e(route('notes.show',$note->id)); ?>"><h4 class="card-title">
                <?php echo e(ucfirst($note->title)); ?>

            </h4></a>
            <p class="card-text">
                <?php echo e(str_limit($note->body,30)); ?>

            </p>
            <a class="btn btn-sm btn-info pull-xs-left" href="<?php echo e(route('notes.edit',$note->id)); ?>">
                Edit
            </a>
            <form class="pull-xs-right" action="<?php echo e(route('notes.destroy',$note->id)); ?>" method="POST">
                <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('DELETE')); ?>

                <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                
            </form>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>