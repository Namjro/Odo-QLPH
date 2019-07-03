<?php
namespace Longtt\Odo\Controllers\Booking_calendar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Booking_calendar;


class CreateController extends Controller
{

    public function index()
    {
        $booking_calendar=Booking_calendar::all();
        return view('odo::booking_calendar.create',["booking_calendar"=>$booking_calendar]);

    }

}
