<!--edit.blade.php-->
<?php $__env->startSection('css'); ?>
    <!--<link href="<?php echo e(getThemeUrl()); ?>bs3/css/custom.css" rel="stylesheet">-->
<?php $__env->stopSection(); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<?php $__env->startSection('js_lib'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js_script'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <?php
    use Longtt\Odo\Model\User;
    use Longtt\Odo\Model\Shift;
    use Longtt\Odo\Model\Room;
    $user = User::select('name', 'id')
        ->get();
    $shift = Shift::select('start_time', 'finish_time', 'id')
        ->get();

    //dd($company);
    ?>
    <!-- page start-->
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Sửa đặt phòng
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form action="<?php echo e(url('booking_calendar/update')); ?>" method="post" role="form">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="id" value="<?php echo e($booking_calendar->id); ?>">

                            <div class="form-group">
                                <label>Người đặt<select id="name" name="name" aria-controls="dataTable"
                                                        class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="<?php echo e($booking_calendar->user_id); ?>"> <?php echo e($booking_calendar->user_name); ?></option>
                                        <?php foreach ($user as $cate){ ?>
                                        <option value="<?php echo $cate['id']; ?>"><?php echo $cate['name']; ?></option>
                                        <?php }?>
                                    </select></label>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ngày bắt đầu</label>
                                <input type="date" name="date" class="form-control" id="date"
                                       value="<?php echo e($booking_calendar->date); ?>">
                            </div>
                            <div class="form-group">
                                <label>Thời gian<select id="id_shift" name="id_shift" aria-controls="dataTable"
                                                        class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="<?php echo e($booking_calendar->id_shift); ?>"><?php echo e($booking_calendar->start_time); ?>

                                            -<?php echo e($booking_calendar->finish_time); ?></option>
                                        <?php foreach ($shift as $cate){ ?>
                                        <option value="<?php echo $cate['id']; ?>"><?php echo $cate['start_time'] . '-' . $cate['finish_time']; ?></option>
                                        <?php }?>
                                    </select></label>
                            </div>
                            <div class="form-group">
                                <label>Khóa học<select class="form-control" name="course">
                                    </select></label>
                            </div>
                            <div class="form-group">
                                <label>Phòng<select class="form-control" name="room">
                                    </select></label>
                            </div>
                            <button type="submit" class="btn btn-info">Cập nhập</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>

    </div>


    <script type="text/javascript">
        $("select[name='name']").change(function () {
            var id = $(this).val();
            //var date=$("input[name='date']").val();
            //var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo e(url('course-ajax')); ?>",
                method: 'POST',
                //dataType: "json",
                data: {id: id},
                success: function (data) {
                    $("select[name='course']").html('');
                    $.each(data, function (key, value) {
                        $("select[name='course']").append(
                            "<option value=" + value.id + ">" + value.name + "</option>"
                        );
                    });
                }
            });
        });
        $("input[name='date']").change(function () {
            var date = $(this).val();
            var id_shift = $("select[name='id_shift']").val();
            //var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo e(url('time-ajax')); ?>",
                method: 'POST',
                //dataType: "json",
                data: {id_shift: id_shift, date: date},
                success: function (data) {
                    $("select[name='room']").html('');
                    $.each(data, function (key, value) {
                        $("select[name='room']").append(
                            "<option value=" + value.id + ">" + value.name + "</option>"
                        );
                    });
                }
            });
        });
        $("select[name='id_shift']").change(function () {
            var id_shift = $(this).val();
            var date = $("input[name='date']").val();
            //var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo e(url('time-ajax')); ?>",
                method: 'POST',
                //dataType: "json",
                data: {id_shift: id_shift, date: date},
                success: function (data) {
                    $("select[name='room']").html('');
                    $.each(data, function (key, value) {
                        $("select[name='room']").append(
                            "<option value=" + value.id + ">" + value.name + "</option>"
                        );
                    });
                }
            });
        });
    </script>

        <!-- page end-->
        </section>
        </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user::layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>