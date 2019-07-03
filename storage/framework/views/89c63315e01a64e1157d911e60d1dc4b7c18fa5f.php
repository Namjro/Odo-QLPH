<!--edit.blade.php-->
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
                Chỉnh Sửa Nhà Phân Phối
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form action="<?php echo e(url('npp/update')); ?>" method="post" role="form">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="id" value="<?php echo e($user->id); ?>">

         <div class="form-group">
            <label for="exampleInputEmail1">Tên</label>
            <input type="text" name="name" value="<?php echo e($user->name); ?>" class="form-control" id="name">
         </div>

         <div class="form-group">
            <label for="exampleInputEmail1">email</label>
            <input type="text" name="email" value="<?php echo e($user->email); ?>" class="form-control" id="email">
         </div>
                        <button type="submit" class="btn btn-info">Gửi</button>
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