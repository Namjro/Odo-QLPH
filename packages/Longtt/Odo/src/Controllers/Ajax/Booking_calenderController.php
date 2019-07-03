<?php

namespace Longtt\Odo\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Booking_calendar;
use Longtt\Odo\Model\Room;
use Longtt\Odo\Model\Course;


class Booking_calenderController extends Controller

{
    public function timeAjax(Request $request)
    {
        if ($request->ajax()) {

            $roms = Booking_calendar::select('id_room')
                ->where('date', '=', $request->date)
                ->where('id_shift', '=', $request->id_shift)
                ->get();
            //dd($roms);
            $rooms = Room::select('id', 'name')->get();
            foreach ($roms as $rom) {
                //dd($rom);
                $rooms = $rooms->where('id', '!=', $rom->id_room);
            }

            return response()->json($rooms);
        }

    }

    public function courseAjax(Request $request)
    {
        if ($request->ajax()) {
            $courses = Course::select('courses.id as id', 'courses.name as name')
                ->join('user_course', 'user_course.course_id', '=', 'courses.id')
                ->where('user_course.user_id', '=', 4)
                ->get();
            //dd($courses);
            return response()->json($courses);
        }
    }
}

