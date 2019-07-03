<!--index.blade.php-->
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
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel-body">
                    <!--                <button type="button" class="btn btn-default">Default</button>-->
                    <a href="<?php echo e(url('npp/create_npp')); ?>" class="btn btn-primary">Thêm mới</a>
                    <!--                <button type="button" class="btn btn-success">Success</button>-->
                    <!--                <button type="button" class="btn btn-info">Info</button>-->
                    <!--                <button type="button" class="btn btn-warning">Warning</button>-->
                    <!--                <button type="button" class="btn btn-danger">Danger</button>-->
                </div>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Nhà Phân Phối
                    <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                </header>
                <div class="panel-body">
                    <div class="table">
                        <form action="<?php echo e(url('npp/search')); ?>">
                            <input class="" placeholder="search" type="text" name="q">
                            <input type="submit" value="Tìm Kiếm">
                        </form>

                    </div>
                    <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Tên</th>
                                <th>Vai Trò</th>
                                <th>email</th>
                                <th>created_at</th>
                                <th>updated_at</th>
                                <th>Action</th>
                                <!--<th class="numeric">Price</th>
                                <th class="numeric">Change</th>
                                <th class="numeric">Change %</th>
                                <th class="numeric">Open</th>
                                <th class="numeric">High</th>
                                <th class="numeric">Low</th>
                                <th class="numeric">Volume</th>-->
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($records as $record){ ?>
                            <tr>
                                <td><?php echo e($record->id); ?></td>
                                <td><?php echo e($record->name); ?></td>
                                <td><?php echo e($record->rolename); ?></td>
                                <td><?php echo e($record->email); ?></td>
                                    <td><?php echo e($record->created_at); ?></td>
                                <td><?php echo e($record->updated_at); ?></td>

                                <td>
                                    <a href="<?php echo e(url('npp/edit_npp',['id'=>$record->id])); ?>" class="btn btn-danger">Sửa</a>
                                    <a href="<?php echo e(url('npp/delete',['id'=>$record->id])); ?>" class="btn btn-danger"></span>
                                        Xóa</a>
                                </td>
                            </tr>
                            <?php } ?>


                            <!-- <tr>
                             <td>AGO</td>
                             <td>ATLAS IRON LIMITED</td>
                             <td class="numeric">$3.17</td>
                             <td class="numeric">-0.02</td>
                             <td class="numeric">-0.47%</td>
                             <td class="numeric">$3.11</td>
                             <td class="numeric">$3.22</td>
                             <td class="numeric">$3.10</td>
                             <td class="numeric">5,416,303</td>
                         </tr>-->
                            </tbody>
                        </table>
                    </section>
                    <?php echo e($records->appends(Request::only('q'))->links()); ?>

                </div>
            </section>

        </div>
    </div>






    <!-- page end-->
    </section>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user::layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>