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
                Create menu
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form action="{{url('menu/store')}}" method="post" menu="form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Menu Name</label>
                            <input type="text" name="name" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Fix Url</label>
                            <input type="text" name="url" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Route</label>
                            <input type="text" name="route" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">type</label>
<!--                            <input type="text" name="name" class="form-control" id="">-->
                            <select class="form-control" name="type">
                                <option value="1">fix menu</option>
                                <option value="2">route menu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Parent</label>
<!--                            <input type="text" name="name" class="form-control" id="">-->
                            <select class="form-control" name="parent_id">
                                <option value="0">--root--</option>
                                <?php echo $menu_option; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">icon_code</label>
                            <input type="text" name="icon_code" class="form-control" id="">
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
