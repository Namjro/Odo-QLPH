@extends('user::layout.master')

@section('css')
<!--<link href="{{getThemeUrl()}}bs3/css/custom.css" rel="stylesheet">-->
@endsection

@section('js_lib')
@endsection

@section('js_script')
@endsection


@section('content')
<!-- page start-->
<!-- page start-->
<?php $user =\Illuminate\Support\Facades\Auth::user() ?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                {{__("Thông tin cá nhân")}}
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form action="" method="post" role="form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{__("Email")}}</label>
                            <input type="email" name="email" value="<?php echo  is_object($user)?$user->email:""; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>

                    </form>
                </div>

            </div>
        </section>

    </div>

</div>






<!-- page end-->
</section>
</section>

@endsection
