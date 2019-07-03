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
                        <form action="<?php echo e(url('sp/update')); ?>" method="post" role="form">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="id" value="<?php echo e($product->id); ?>">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                                <input type="text" name="name" value="<?php echo e($product->name); ?>" class="form-control" id="name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Mã Sản Phẩm</label>
                                <input type="text" name="code" value="<?php echo e($product->code); ?>" class="form-control" id="code">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá Sản Phẩm</label>
                                <input type="text" name="price" value="<?php echo e($product->price); ?>" class="form-control" id="price">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phân Loại Sản Phẩm</label>
                                <input type="text" name="sku" value="<?php echo e($product->sku); ?>" class="form-control" id="sku">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mô tả Sản Phẩm</label>
                                <input type="text" name="description" value="<?php echo e($product->description); ?>" class="form-control" id="description">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số Lượng</label>
                                <input type="text" name="qty" value="<?php echo e($product->qty); ?>" class="form-control" id="qty">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ngành Hàng</label>
                                <input type="text" name="category_id" value="<?php echo e($product->category_id); ?>" class="form-control" id="category_id">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Công Ty</label>
                                <input type="text" name="company_id" value="<?php echo e($product->company_id); ?>" class="form-control" id="company_id">
                            </div>
                            <button type="submit" class="btn btn-info">Submit</button>
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