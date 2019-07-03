<?php
namespace Longtt\Odo\Controllers\Booking_calendar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Booking_calendar;

class IndexController extends Controller
{
    public function index()
    {
        $records=Booking_calendar::paginate(3);
        return view('odo::booking_calendar.index', ['records' => $records]);
    }

}
