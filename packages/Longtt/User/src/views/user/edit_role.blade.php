@extends('user::layout.master')
<!--index.blade.php-->
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
<?php

?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                {{__("edit")}} {{__("user")}}
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form action="{{url('config/user/update-edit-user-role')}}" method="post" role="form">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{__("Nhân Viên Vận Hành")}}</label>
                            <input type="text" name="name" value="{{$user->name}}" class="form-control" id="exampleInputEmail1" placeholder="Nhân Viên Vận Hành" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{__("Vai Trò")}}</label>
                            <select name="role_id" id="" class="form-control">
                                <?php \Longtt\User\Helper::optionSelect1($role,$user->role_id); ?>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-info">{{__("edit")}}</button>
                    </form>
                </div>

            </div>
        </section>

    </div>

</div>



@endsection
