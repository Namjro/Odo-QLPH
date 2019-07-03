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
<?php $user =\Illuminate\Support\Facades\Auth::user() ?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo e(__("Thông tin cá nhân")); ?>

            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form action="" method="post" role="form">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="exampleInputEmail1"><?php echo e(__("Email")); ?></label>
                            <input type="email" name="email" value="<?php echo  is_object($user)?$user->email:""; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>

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