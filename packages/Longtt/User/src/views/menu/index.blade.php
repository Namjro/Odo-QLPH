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
function getTree($collection,$parent_id,$dash){
    foreach($collection as $item){
        if($item->parent_id==$parent_id){
            ?>
            <tr>
                <td>{{$dash.$item->name}}</td>
                <td>{{$item->route}}</td>
                <td>{{$item->url}}</td>
                <td>{{$item->type}}</td>
                <td>
                    <a href="{{url('/menu/edit',['id'=>$item->id])}}">Edit</a>
                    <a href="{{url('/menu/delete',['id'=>$item->id])}}">Delete</a>
                </td>
            </tr>
<?php
            getTree($collection,$item->id,$dash."|--");
        }
    }

}

?>
<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Menus table
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
            </header>
            <div class="panel-body">
                <section id="unseen">
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>route</th>
                            <th>url</th>
                            <th>type</th>
                            <th>Action</th>
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
                        <?php getTree($records,0,"|--"); ?>

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
                </section>
            </div>
        </section>

    </div>
</div>






<!-- page end-->
</section>
</section>

@endsection
