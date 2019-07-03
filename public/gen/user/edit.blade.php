

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
            <label for="exampleInputEmail1">id</label>
            <input type="text" name="id" value="{{ $user->id }}" class="form-control" id="id">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">name</label>
            <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="name">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">role_id</label>
            <input type="text" name="role_id" value="{{ $user->role_id }}" class="form-control" id="role_id">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">phone</label>
            <input type="text" name="phone" value="{{ $user->phone }}" class="form-control" id="phone">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">user_name</label>
            <input type="text" name="user_name" value="{{ $user->user_name }}" class="form-control" id="user_name">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">email</label>
            <input type="text" name="email" value="{{ $user->email }}" class="form-control" id="email">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">password</label>
            <input type="text" name="password" value="{{ $user->password }}" class="form-control" id="password">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">avatar</label>
            <input type="text" name="avatar" value="{{ $user->avatar }}" class="form-control" id="avatar">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">address</label>
            <input type="text" name="address" value="{{ $user->address }}" class="form-control" id="address">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">geolocation</label>
            <input type="text" name="geolocation" value="{{ $user->geolocation }}" class="form-control" id="geolocation">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">subject</label>
            <input type="text" name="subject" value="{{ $user->subject }}" class="form-control" id="subject">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">remember_token</label>
            <input type="text" name="remember_token" value="{{ $user->remember_token }}" class="form-control" id="remember_token">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">note</label>
            <input type="text" name="note" value="{{ $user->note }}" class="form-control" id="note">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">created_at</label>
            <input type="text" name="created_at" value="{{ $user->created_at }}" class="form-control" id="created_at">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">updated_at</label>
            <input type="text" name="updated_at" value="{{ $user->updated_at }}" class="form-control" id="updated_at">
         </div>

                        <button type="submit" class="btn btn-info">Submit</button>
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
