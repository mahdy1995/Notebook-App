<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Create Notebook</h1>
        <form action="/notebooks" method="POST">
            <?php echo e(csrf_field()); ?>

            <div class="forum-group">
                <label for="name">
                    Enter Name
                </label>
                <input class="forum-control" name="name" type="text">

            </div>
            <input class="btn btn-primary" type="submit" value="Done">
        </form>
    </div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>