<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
@include('user::layout.head')
<body>

<section id="container" >
<!--header start-->
@include('user::layout.header')
<!--header end-->

<!--sidebar start-->
@include('user::layout.sidebar')
<!--sidebar end-->
<!--main content start-->
    <section id="main-content" class="">

        <section class="wrapper">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if (\Illuminate\Support\Facades\Session::has('status_array'))
                <?php $status_array = \Illuminate\Support\Facades\Session::get('status_array'); ?>
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($status_array as $key => $value)
                        <li>{{$key}} => {{ $value }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <!-- page start-->
            <!-- page start-->


            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            @yield('content')
        </section>
    </section>



<!--main content end-->

<!--right sidebar start-->
@include('user::layout.rightsidebar')
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
<script src="{{url('/js/index.js')}}"></script>
@yield('js_lib')
@yield('js_script')
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
