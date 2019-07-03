<?php $__env->startSection('css'); ?>

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

/*echo "<pre>";
var_dump($users);
echo "</pre>";exit;*/
?>
<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <div class="panel-body">
<!--                <button type="button" class="btn btn-default">Default</button>-->
                <a href="<?php echo e(url('config/user/create')); ?>" class="btn btn-primary"><?php echo e(__("create")); ?></a>
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
        <?php echo e(__("list")); ?> <?php echo e(__("user")); ?>

                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
    </header>
    <div class="panel-body">
        <div class="row">
            <div id="tuananh" class="col-sm-4">
                <form action="<?php echo e(url('config/user/search')); ?>">
                    <div class="input-group">
                        <input name="q" type="text" value="<?php echo e(Request::get('q')); ?>" class="form-control" placeholder="<?php echo e(__("search")); ?>">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><?php echo e(__("search")); ?></button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <section id="unseen">
            <table class="table table-bordered table-striped table-condensed">
                <thead>
                <tr>
                    <th><?php echo e(__("name")); ?></th>
                    <th><?php echo e(__("email")); ?></th>
                    <th><?php echo e(__("roles")); ?></th>
                    <th><?php echo e(__("updated date")); ?></th>
                    <th><?php echo e(__("action")); ?></th>
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
                <?php foreach($users as $user){
                    /*echo "<pre>";
                    var_dump(123);
                    var_dump($user->role);
                    echo "</pre>";exit;*/
                    ?>
                    <tr>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e(isset($user->role->name)?$user->role->name:""); ?></td>
                        <td><?php echo e($user->updated_at); ?></td>
                        <td>
                            <a class="btn btn-xs btn-primary" href="<?php echo e(url('config/user/edit-user-role',['id'=>$user->id])); ?>"><?php echo e(__("Phân Vai Trò")); ?></a>
                            <a class="btn btn-xs btn-primary" href="<?php echo e(url('config/user/edit',['id'=>$user->id])); ?>"><?php echo e(__("edit")); ?></a>
                            <a class="delete btn btn-xs btn-danger" href="<?php echo e(url('config/user/delete',['id'=>$user->id])); ?>"><?php echo e(__("delete")); ?></a>
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
            <?php echo e($users->links()); ?>

        </section>
    </div>
</section>

</div>
</div>






<!-- page end-->
</section>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user::layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>