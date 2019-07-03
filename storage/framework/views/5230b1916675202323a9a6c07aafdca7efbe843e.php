<?php $__env->startSection('css'); ?>
<!--<link href="<?php echo e(getThemeUrl()); ?>bs3/css/custom.css" rel="stylesheet">-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js_lib'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js_script'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<!-- page start-->
<!-- page start-->
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo e(__("edit")); ?> <?php echo e(__("roles")); ?>

            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form action="<?php echo e(url('config/role/update')); ?>" method="post" role="form">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="id" value="<?php echo e($role->id); ?>">
                        <div class="form-group">
                            <label for="exampleInputEmail1"><?php echo e(__("name")); ?></label>
                            <input type="name" name="name" value="<?php echo e($role->name); ?>" class="form-control" id="exampleInputEmail1" placeholder="Name">
                        </div>
                        <button type="submit" class="btn btn-info"><?php echo e(__("edit")); ?></button>
                    </form>
                </div>

            </div>
        </section>

    </div>

</div>






<!-- page end-->
</section>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user::layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>