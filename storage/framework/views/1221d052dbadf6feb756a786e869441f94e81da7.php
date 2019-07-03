<!--create.blade.php-->
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
                    Thêm Nhà Phân Phối
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form action="<?php echo e(url('npp/store')); ?>" method="post" role="form">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên</label>
                                <input type="text" name="name" class="form-control" id="name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">email</label>
                                <input type="text" name="email" class="form-control" id="email">
                            </div>



                            <!-- <div class="form-group">
                                 <label for="exampleInputFile">File input</label>
                                 <input type="file" id="exampleInputFile">
                                 <p class="help-block">Example block-level help text here.</p>
                             </div>
                             <div class="checkbox">
                                 <label>
                                     <input type="checkbox"> Check me out
                                 </label>
                             </div>-->
                            <button type="submit" class="btn btn-info">Gửi</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user::layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>