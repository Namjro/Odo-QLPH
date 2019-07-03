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
                    THêm Sản Phẩm
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form action="<?php echo e(url('sp/store')); ?>" method="post" role="form">
                            <?php echo e(csrf_field()); ?>



                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                                <input type="text" name="name" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mã Sản Phẩm</label>
                                <input type="text" name="code" class="form-control" id="code">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá Sản Phẩm</label>
                                <input type="text" name="price" class="form-control" id="price">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phân Loại Sản Phẩm</label>
                                <input type="text" name="sku" class="form-control" id="sku">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mô tả Sản Phẩm</label>
                                <input type="text" name="description" class="form-control" id="description">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số Lượng</label>
                                <input type="text" name="qty" class="form-control" id="qty">
                            </div>
                            <div class="form-group">

                                <label>Ngành Hàng<select name="category_id" aria-controls="dataTable"
                                                       class="custom-select custom-select-sm form-control form-control-sm">
                                        <?php
                                        use Longtt\B2s\Model\Category;

                                        $categoris = Category::all();
                                        foreach ($categoris as $cate){ ?>
                                        <option value="<?php echo $cate['id']; ?>"><?php echo $cate['name']; ?></option>
                                        <?php }?>
                                    </select></label>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Công Ty</label>
                                <input type="text" name="company_id" class="form-control" id="company_id">
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