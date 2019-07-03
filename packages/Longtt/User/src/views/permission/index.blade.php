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
<?php
/*echo "<pre>";
var_dump($users);
echo "</pre>";exit;*/
?>
<div class="row">
<div class="col-sm-12">
<section class="panel">
    <header class="panel-heading">
        {{__("list")}} {{__("permissions")}}
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
    </header>
    <form action="{{url('config/permission/store')}}" method="post">
        {{ csrf_field() }}
        <div class="panel-body">
            <section id="unseen">

                <table class="table table-bordered table-striped table-condensed">
                    <thead>
                    <tr>
                        <th>{{__("name")}}</th>
                        <?php foreach($roles as $role){ if($role->id==1){continue;} ?>
                            <th class="">{{$role->name}}</th>
                        <?php } ?>
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
                    <?php foreach($records as $record){  ?>
                        <tr>
                            <td>{{$record->methods[0]."|".$record->uri}}</td>
                            <?php foreach($roles as $role){ if($role->id==1){continue;}?>
                                <td class=""><input <?php if(in_array($role->id.'|'.$record->methods[0].'|'.$record->uri,$permissions)) echo 'checked' ?>  name="permission[]" value="{{$role->id.'|'.$record->methods[0].'|'.$record->uri}}" type="checkbox"></td>
                            <?php } ?>
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
                <input class="btn btn-primary" type="submit">
            </section>
        </div>
    </form>

</section>

</div>
</div>






<!-- page end-->
</section>
</section>

@endsection
