<?php
namespace Longtt\User\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\Test;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');
        if ($query)
        {
            $records = Test::where('name', 'LIKE', "%$query%")
                     ->orWhere('id', 'LIKE', "%$query%")
         ->orWhere('name', 'LIKE', "%$query%")
         ->orWhere('age', 'LIKE', "%$query%")

            ->paginate(3);
        }
        else
        {
            $records = Test::orderBy('id', 'DESC')->paginate(3);
        }

        //$records=Test::paginate(15);
        return view('user::test.index', ['records' => $records]);
    }

}

