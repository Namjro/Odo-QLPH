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

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel-body">
                    <!--                <button type="button" class="btn btn-default">Default</button>-->
                    <a href="{{url('booking_calendar/create')}}" class="btn btn-primary">Thêm mới</a>
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
                    Booking_calendars table
                    <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                </header>
                <div class="panel-body">
                    <div class="table">
                        <form action="{{url('booking_calendar/search')}}">
                            <input class="" placeholder="search" type="text" name="q">
                            <input type="submit" value="Tìm Kiếm">
                        </form>

                    </div>
                    <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th>Người đặt</th>
                                <th>Phòng</th>
                                <th>Thời gian bắt đầu</th>
                                <th>Thời gian kết thúc</th>
                                <th>Khóa học</th>
                                <th>Ngày</th>
                                <th>Hành động</th>
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
                            <?php  foreach($records as $record){ ?>
                            <tr>
                                <td>{{$record->name}}</td>
                                <td>{{$record->room}}</td>
                                <td>{{$record->start_time}}</td>
                                <td>{{$record->finish_time}}</td>
                                <td>{{$record->course}}</td>
                                <td>{{$record->date}}</td>

                                <td>
                                    <a href="{{url('booking_calendar/edit',['id'=>$record->id])}}">Sửa</a>
                                    <a href="{{url('booking_calendar/delete',['id'=>$record->id])}}">Xóa</a>
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
                    </section>
                    {{--{{ $records->appends(Request::only('q'))->links() }}--}}
                </div>
            </section>

        </div>
    </div>






    <!-- page end-->
    </section>
    </section>

@endsection
