<?php $__env->startSection('content'); ?>
<div class="container text-center">
    <form action="<?php echo e(route('notes.update',$note->id)); ?>" method="POST">
        <?php echo e(method_field('PUT')); ?>

        <div class="form-group">
            <label for="title">
                Note Title
            </label>
            <input class="form-control" name="title" placeholder="Note Title" type="text">
            
        </div>

        <div class="form-group">
            <label for="body">
                Notes
            </label>
            <input class="form-control" name="body" placeholder="Notes" type="textarea" rows="3">
        </div>
        
<?php echo e(csrf_field()); ?>

        <input type="submit" class="btn btn-primary" value="Done">
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>