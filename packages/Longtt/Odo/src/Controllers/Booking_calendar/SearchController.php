<?php

namespace Longtt\Odo\Controllers\Booking_calendar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Booking_calendar;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');
        if ($query) {
            $records = Booking_calendar::select('Booking_calendar.date as date', 'Booking_calendar.id as id', 'users.name as name', 'rooms.name as room', 'shifts.start_time as start_time', 'shifts.finish_time as finish_time', 'courses.name as course')
                ->leftjoin('users', 'users.id', '=', 'Booking_calendar.user_id')
                ->leftjoin('rooms', 'rooms.id', '=', 'Booking_calendar.id_room')
                ->leftjoin('shifts', 'shifts.id', '=', 'Booking_calendar.id_shift')
                ->leftJoin('user_course', 'users.id', '=', 'user_course.user_id')
                ->leftJoin('courses', 'courses.id', '=', 'user_course.course_id')
                ->orWhere('users.name', 'LIKE', "%$query%")
                ->orWhere('rooms.name', 'LIKE', "%$query%")
                ->orWhere('shifts.start_time', 'LIKE', "%$query%")
                ->orWhere('shifts.finish_time', 'LIKE', "%$query%")
                ->orWhere('courses.name', 'LIKE', "%$query%")
                ->paginate(30);
        } else {
            $records = Booking_calendar::select('Booking_calendar.date as date', 'Booking_calendar.id as id', 'users.name as name', 'rooms.name as room', 'shifts.start_time as start_time', 'shifts.finish_time as finish_time', 'courses.name as course')
                ->leftjoin('users', 'users.id', '=', 'Booking_calendar.user_id')
                ->leftjoin('rooms', 'rooms.id', '=', 'Booking_calendar.id_room')
                ->leftjoin('shifts', 'shifts.id', '=', 'Booking_calendar.id_shift')
                ->leftJoin('user_course', 'users.id', '=', 'user_course.user_id')
                ->leftJoin('courses', 'courses.id', '=', 'user_course.course_id')
                ->paginate(30);
        }

        //$records=Booking_calendar::paginate(15);
        return view('odo::booking_calendar.index', ['records' => $records]);
    }

}

