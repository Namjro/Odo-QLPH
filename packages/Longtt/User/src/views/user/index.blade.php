@extends('user::layout.master')

@section('css')

@endsection

@section('js_lib')
@endsection

@section('js_script')
@endsection


@section('content')
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
                <a href="{{url('config/user/create')}}" class="btn btn-primary">{{__("create")}}</a>
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
        {{__("list")}} {{__("user")}}
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
    </header>
    <div class="panel-body">
        <div class="row">
            <div id="tuananh" class="col-sm-4">
                <form action="{{url('config/user/search')}}">
                    <div class="input-group">
                        <input name="q" type="text" value="{{ Request::get('q') }}" class="form-control" placeholder="{{__("search")}}">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">{{__("search")}}</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <section id="unseen">
            <table class="table table-bordered table-striped table-condensed">
                <thead>
                <tr>
                    <th>{{__("name")}}</th>
                    <th>{{__("email")}}</th>
                    <th>{{__("roles")}}</th>
                    <th>{{__("updated date")}}</th>
                    <th>{{__("action")}}</th>
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
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{isset($user->role->name)?$user->role->name:""}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td>
                            <a class="btn btn-xs btn-primary" href="{{url('config/user/edit-user-role',['id'=>$user->id])}}">{{__("Phân Vai Trò")}}</a>
                            <a class="btn btn-xs btn-primary" href="{{url('config/user/edit',['id'=>$user->id])}}">{{__("edit")}}</a>
                            <a class="delete btn btn-xs btn-danger" href="{{url('config/user/delete',['id'=>$user->id])}}">{{__("delete")}}</a>
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
            {{ $users->links() }}
        </section>
    </div>
</section>

</div>
</div>






<!-- page end-->
</section>
</section>

@endsection
