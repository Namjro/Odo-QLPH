<?php
namespace Longtt\B2s\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\Category;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');
        if ($query)
        {
            $records = Category::where('name', 'LIKE', "%$query%")
                     ->orWhere('id', 'LIKE', "%$query%")
         ->orWhere('name', 'LIKE', "%$query%")
         ->orWhere('code', 'LIKE', "%$query%")
         ->orWhere('parent_id', 'LIKE', "%$query%")
         ->orWhere('parent_code', 'LIKE', "%$query%")
         ->orWhere('created_at', 'LIKE', "%$query%")
         ->orWhere('updated_at', 'LIKE', "%$query%")

            ->paginate(3);
        }
        else
        {
            $records = Category::orderBy('id', 'DESC')->paginate(3);
        }

        //$records=Category::paginate(15);
        return view('b2s::category.index', ['records' => $records]);
    }

}

