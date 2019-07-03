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
<?php
/*echo "<pre>";
var_dump($users);
echo "</pre>";exit;*/
?>
<div class="row">
<div class="col-sm-12">
<section class="panel">
    <header class="panel-heading">
        <?php echo e(__("list")); ?> <?php echo e(__("permissions")); ?>

                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
    </header>
    <form action="<?php echo e(url('config/permission/store')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <div class="panel-body">
            <section id="unseen">

                <table class="table table-bordered table-striped table-condensed">
                    <thead>
                    <tr>
                        <th><?php echo e(__("name")); ?></th>
                        <?php foreach($roles as $role){ if($role->id==1){continue;} ?>
                            <th class=""><?php echo e($role->name); ?></th>
                        <?php } ?>
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
                    <?php foreach($records as $record){  ?>
                        <tr>
                            <td><?php echo e($record->methods[0]."|".$record->uri); ?></td>
                            <?php foreach($roles as $role){ if($role->id==1){continue;}?>
                                <td class=""><input <?php if(in_array($role->id.'|'.$record->methods[0].'|'.$record->uri,$permissions)) echo 'checked' ?>  name="permission[]" value="<?php echo e($role->id.'|'.$record->methods[0].'|'.$record->uri); ?>" type="checkbox"></td>
                            <?php } ?>
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
                <input class="btn btn-primary" type="submit">
            </section>
        </div>
    </form>

</section>

</div>
</div>






<!-- page end-->
</section>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user::layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>