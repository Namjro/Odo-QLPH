<?php
namespace Longtt\Odo\Controllers\Shift;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Shift;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');
        if ($query)
        {
            $records = Shift::where('name', 'LIKE', "%$query%")
                     ->orWhere('id', 'LIKE', "%$query%")
         ->orWhere('start_time', 'LIKE', "%$query%")
         ->orWhere('finish_time', 'LIKE', "%$query%")
         ->orWhere('created_at', 'LIKE', "%$query%")
         ->orWhere('updated_at', 'LIKE', "%$query%")

            ->paginate(3);
        }
        else
        {
            $records = Shift::orderBy('id', 'DESC')->paginate(3);
        }

        //$records=Shift::paginate(15);
        return view('odo::shift.index', ['records' => $records]);
    }

}

