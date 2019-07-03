<?php
namespace Longtt\User\Controllers\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\Role;
use Longtt\User\Model\User;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');
        if ($query)
        {
            $records = Role::where('name', 'LIKE', "%$query%")->paginate(20);
        }
        else
        {
            $records = Role::orderBy('id', 'DESC')->paginate(20);
        }

        //$records=Role::paginate(15);
        return view('user::role.index', ['records' => $records]);
    }

}
