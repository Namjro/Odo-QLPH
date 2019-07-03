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
                    Chỉnh Sửa Nhà Phân Phối
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form action="{{url('sp/update')}}" method="post" role="form">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $product->id }}">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                                <input type="text" name="name" value="{{ $product->name }}" class="form-control" id="name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Mã Sản Phẩm</label>
                                <input type="text" name="code" value="{{ $product->code }}" class="form-control" id="code">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá Sản Phẩm</label>
                                <input type="text" name="price" value="{{ $product->price }}" class="form-control" id="price">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phân Loại Sản Phẩm</label>
                                <input type="text" name="sku" value="{{ $product->sku }}" class="form-control" id="sku">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mô tả Sản Phẩm</label>
                                <input type="text" name="description" value="{{ $product->description }}" class="form-control" id="description">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số Lượng</label>
                                <input type="text" name="qty" value="{{ $product->qty }}" class="form-control" id="qty">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ngành Hàng</label>
                                <input type="text" name="category_id" value="{{ $product->category_id }}" class="form-control" id="category_id">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Công Ty</label>
                                <input type="text" name="company_id" value="{{ $product->company_id }}" class="form-control" id="company_id">
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
