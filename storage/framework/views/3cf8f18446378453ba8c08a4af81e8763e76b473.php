<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<?php echo $__env->make('user::layout.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>

<section id="container" >
<!--header start-->
<?php echo $__env->make('user::layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!--header end-->

<!--sidebar start-->
<?php echo $__env->make('user::layout.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!--sidebar end-->
<!--main content start-->
    <section id="main-content" class="">

        <section class="wrapper">
            <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <?php endif; ?>

            <?php if(\Illuminate\Support\Facades\Session::has('status_array')): ?>
                <?php $status_array = \Illuminate\Support\Facades\Session::get('status_array'); ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $status_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($key); ?> => <?php echo e($value); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>


            <!-- page start-->
            <!-- page start-->


            <?php if(session('status')): ?>
            <div class="alert alert-success">
                <?php echo e(session('status')); ?>

            </div>
            <?php endif; ?>

            <?php echo $__env->yieldContent('content'); ?>
        </section>
    </section>



<!--main content end-->

<!--right sidebar start-->
<?php echo $__env->make('user::layout.rightsidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!--right sidebar end-->

</section>

<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
<script src="<?php echo getUrl('/'); ?>/BucketAdmin/html/js/jquery.js"></script>
<script src="<?php echo getUrl('/'); ?>/BucketAdmin/html/bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="<?php echo getUrl('/'); ?>/BucketAdmin/html/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo getUrl('/'); ?>/BucketAdmin/html/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo getUrl('/'); ?>/BucketAdmin/html/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="<?php echo getUrl('/'); ?>/BucketAdmin/html/js/jquery.nicescroll.js"></script>
<!--Easy Pie Chart-->
<script src="<?php echo getUrl('/'); ?>/BucketAdmin/html/js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="<?php echo getUrl('/'); ?>/BucketAdmin/html/js/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="<?php echo getUrl('/'); ?>/BucketAdmin/html/js/flot-chart/jquery.flot.js"></script>
<script src="<?php echo getUrl('/'); ?>/BucketAdmin/html/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo getUrl('/'); ?>/BucketAdmin/html/js/flot-chart/jquery.flot.resize.js"></script>
<script src="<?php echo getUrl('/'); ?>/BucketAdmin/html/js/flot-chart/jquery.flot.pie.resize.js"></script>

<script src="<?php echo getUrl('/'); ?>/BucketAdmin/html/js/iCheck/jquery.icheck.js"></script>

<script type="text/javascript" src="<?php echo getUrl('/'); ?>/BucketAdmin/html/js/ckeditor/ckeditor.js"></script>

<!--common script init for all pages-->
<script src="<?php echo getUrl('/'); ?>/BucketAdmin/html/js/scripts.js"></script>

<script src="<?php echo getUrl('/'); ?>/vendor/user/js/index.js"></script>

<!--icheck init -->
<script src="<?php echo getUrl('/'); ?>/BucketAdmin/html/js/icheck-init.js"></script>
<script src="<?php echo e(url('/js/index.js')); ?>"></script>
<?php echo $__env->yieldContent('js_lib'); ?>
<?php echo $__env->yieldContent('js_script'); ?>
<script>
    $(document).ready(function(){
        var sub_menu= $(".sub-menu");
        console.log(sub_menu)
        sub_menu.each(function(){
            var sub= $(this).find('.sub');
            if(sub.length ==0){
                $( this ).hide();
            }
        });

    });
</script>
</body>
</html>
