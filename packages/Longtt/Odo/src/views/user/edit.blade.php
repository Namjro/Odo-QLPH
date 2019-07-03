@extends('user::layout.master')
<!--edit.blade.php-->
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
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Basic Forms
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form action="{{url('user/update')}}" method="post" role="form">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên</label>
                                <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số điện thoại</label>
                                <input type="text" name="phone" value="{{ $user->phone }}" class="form-control"
                                       id="phone">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">email</label>
                                <input type="text" name="email" value="{{ $user->email }}" class="form-control"
                                       id="email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">created_at</label>
                                <input type="text" name="created_at" value="{{ $user->created_at }}"
                                       class="form-control" id="created_at">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">updated_at</label>
                                <input type="text" name="updated_at" value="{{ $user->updated_at }}"
                                       class="form-control" id="updated_at">
                            </div>

                            <button type="submit" class="btn btn-info">Cập nhập</button>
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
