<?php
namespace Longtt\B2s\Controllers\Zone;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\Zone;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');
        if ($query)
        {
            $records = Zone::where('name', 'LIKE', "%$query%")
                     ->orWhere('id', 'LIKE', "%$query%")
         ->orWhere('name', 'LIKE', "%$query%")
         ->orWhere('code', 'LIKE', "%$query%")
         ->orWhere('parent_id', 'LIKE', "%$query%")
         ->orWhere('created_at', 'LIKE', "%$query%")
         ->orWhere('updated_at', 'LIKE', "%$query%")
         ->orWhere('company_id', 'LIKE', "%$query%")

            ->paginate(3);
        }
        else
        {
            $records = Zone::orderBy('id', 'DESC')->paginate(3);
        }

        //$records=Zone::paginate(15);
        return view('b2s::zone.index', ['records' => $records]);
    }

}

