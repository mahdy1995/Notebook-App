<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Edit Notebook</h1>
        <form action="<?php echo e(route('notebooks.update',$notebook->id)); ?>" method="POST">
            <?php echo e(csrf_field()); ?>

            <?php echo method_field('PUT'); ?>
            <div class="forum-group">
                <label for="name">
                    Enter new name
                </label>
                <input class="forum-control" name="name" type="text">

            </div>
            <input class="btn btn-primary" type="submit" value="Update">
        </form>
    </div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>