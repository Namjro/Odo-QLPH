<?php
namespace Longtt\Odo\Controllers\Booking_calendar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Booking_calendar;


class DeleteController extends Controller
{

    public $_booking_calendar;

    public function __construct(Booking_calendar $booking_calendar){
        $this->_booking_calendar=$booking_calendar;
    }

    public function index($id)
    {

        $this->_booking_calendar->find($id)->delete();
        return redirect()->route(
            'booking_calendar.index'
        )->with('status', 'Data deleted!');

    }

}
