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
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                {{__("edit")}} {{__("roles")}}
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form action="{{url('config/role/update')}}" method="post" role="form">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$role->id}}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{__("name")}}</label>
                            <input type="name" name="name" value="{{$role->name}}" class="form-control" id="exampleInputEmail1" placeholder="Name">
                        </div>
                        <button type="submit" class="btn btn-info">{{__("edit")}}</button>
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
