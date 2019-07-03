<?php
namespace Longtt\B2s\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\User;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');
        if ($query)
        {
            $records = User::where('name', 'LIKE', "%$query%")
                     ->orWhere('id', 'LIKE', "%$query%")
         ->orWhere('name', 'LIKE', "%$query%")
         ->orWhere('role_id', 'LIKE', "%$query%")
         ->orWhere('account', 'LIKE', "%$query%")
         ->orWhere('email', 'LIKE', "%$query%")
         ->orWhere('password', 'LIKE', "%$query%")
         ->orWhere('facebook_id', 'LIKE', "%$query%")
         ->orWhere('facebook_token', 'LIKE', "%$query%")
         ->orWhere('facebook_token_expire_time', 'LIKE', "%$query%")
         ->orWhere('avatar', 'LIKE', "%$query%")
         ->orWhere('remember_token', 'LIKE', "%$query%")
         ->orWhere('created_at', 'LIKE', "%$query%")
         ->orWhere('updated_at', 'LIKE', "%$query%")

            ->paginate(3);
        }
        else
        {
            $records = User::orderBy('id', 'DESC')->paginate(3);
        }

        //$records=User::paginate(15);
        return view('b2s::user.index', ['records' => $records]);
    }

}

