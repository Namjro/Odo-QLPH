<?php
namespace Longtt\Odo\Controllers\Booking_calendar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Booking_calendar;

class EditController extends Controller
{

    public $booking_calendar;

    public function __construct(Booking_calendar $booking_calendar){
        $this->booking_calendar=$booking_calendar;
    }

    public function index($id)
    {


        //$booking_calendar=$this->booking_calendar->find($id);
        $booking_calendar = Booking_calendar::select('Booking_calendar.*','users.name as user_name','rooms.name as room_name','shifts.start_time as start_time','shifts.finish_time as finish_time','courses.name as course_name')
            ->leftjoin('users', 'users.id','=', 'Booking_calendar.user_id')
            ->leftjoin('rooms', 'rooms.id','=', 'Booking_calendar.id_room')
            ->leftjoin('shifts', 'shifts.id','=', 'Booking_calendar.id_shift')
            ->leftJoin('user_course','users.id','=','user_course.user_id')
            ->leftJoin('courses','courses.id','=','user_course.course_id')
        ->where('Booking_calendar.id','=',$id)->first();
        return view('odo::booking_calendar.edit',[
            'booking_calendar'=>$booking_calendar,
        ]);

    }

}

