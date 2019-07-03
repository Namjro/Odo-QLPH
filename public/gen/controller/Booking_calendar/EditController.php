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


        $booking_calendar=$this->booking_calendar->find($id);
        return view('odo::booking_calendar.edit',[
            'booking_calendar'=>$booking_calendar,
        ]);

    }

}

