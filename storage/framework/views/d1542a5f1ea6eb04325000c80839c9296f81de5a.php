    
    <?php $__env->startSection('content'); ?>

                <!-- Main component for call to action -->
                <div class="container text-center">
                    <!-- heading -->
                    <h1 class="pull-xs-left">
                        Your Notebooks
                    </h1>
                    <div class="pull-xs-right">
                    <a class="btn btn-primary" href="<?php echo e(route('notebooks.create')); ?>" role="button">
                            New NoteBook +
                        </a>
                    </div>

                    <div class="clearfix">
                    </div>
                    <br>

                    <!-- ================ Notebooks==================== -->
                    <!-- notebook1 -->
                    <?php $__currentLoopData = $notebooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notebook): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-6 col-md-3">
                            <div class="card">
                                <div class="card-block">
                                <a href="<?php echo e(route('notebooks.show',$notebook->id)); ?>">
                                        <h4 class="card-title">
                                            <?php echo e($notebook->name); ?>

                                        </h4>
                                    </a>
                                </div>
                                <a href="#">
                                    <img alt="Responsive image" class="img-fluid" src="dist/img/notebook.jpg"/>
                                </a>
                                <div class="card-block">
                                <a class="card-link" href="<?php echo e(route('notebooks.edit',$notebook->id)); ?>">
                                        Edit
                                    </a>
                                <form action="/notebooks/<?php echo e($notebook->id); ?>" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                                    <?php echo e(csrf_field()); ?>

                                    <?php echo method_field('DELETE'); ?>
                                        <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <!-- /container -->
                <script src="dist/js/jquery3.min.js">
                </script>
                <script src="dist/js/bootstrap.js">
                </script>
            </div>
        </body>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>