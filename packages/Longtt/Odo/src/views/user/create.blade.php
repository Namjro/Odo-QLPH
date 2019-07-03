@extends('user::layout.master')
<!--create.blade.php-->
@section('css')
    <!--<link href="{{getThemeUrl()}}bs3/css/custom.css" rel="stylesheet">-->
@endsection

@section('js_lib')
@endsection
@section('js_script')
@endsection
<?php
use Longtt\Odo\Model\Course;
$monhoc =Course::all();
?>
@section('content')
    <!-- page start-->
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm giảng viên
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form action="{{url('user/store')}}" method="post" role="form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên</label>
                                <input type="text" name="name" class="form-control" id="name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Số điện thoại</label>
                                <input type="text" name="phone" class="form-control" id="phone">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">email</label>
                                <input type="text" name="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label>Môn học<br>
                                    <?php foreach ($monhoc as $cate){ ?>
                                    <input type="checkbox" name="subject[]"
                                           value="<?php echo $cate['id'];?>"><?php echo $cate['name'];?> <br>
                                    <?php }?>
                                </label>

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
                            <button type="submit" class="btn btn-info">Thêm mới</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>

    </div>

@endsection
