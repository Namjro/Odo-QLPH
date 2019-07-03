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
        if ($query)
        {
            $records = Booking_calendar::where('name', 'LIKE', "%$query%")
                     ->orWhere('id', 'LIKE', "%$query%")
         ->orWhere('id_lecture', 'LIKE', "%$query%")
         ->orWhere('id_room', 'LIKE', "%$query%")
         ->orWhere('id_shift', 'LIKE', "%$query%")
         ->orWhere('created_at', 'LIKE', "%$query%")
         ->orWhere('updated_at', 'LIKE', "%$query%")

            ->paginate(3);
        }
        else
        {
            $records = Booking_calendar::orderBy('id', 'DESC')->paginate(3);
        }

        //$records=Booking_calendar::paginate(15);
        return view('odo::booking_calendar.index', ['records' => $records]);
    }

}

