<?php
namespace Longtt\Odo\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\User;

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
         ->orWhere('phone', 'LIKE', "%$query%")
         ->orWhere('user_name', 'LIKE', "%$query%")
         ->orWhere('email', 'LIKE', "%$query%")
         ->orWhere('password', 'LIKE', "%$query%")
         ->orWhere('avatar', 'LIKE', "%$query%")
         ->orWhere('address', 'LIKE', "%$query%")
         ->orWhere('geolocation', 'LIKE', "%$query%")
         ->orWhere('subject', 'LIKE', "%$query%")
         ->orWhere('remember_token', 'LIKE', "%$query%")
         ->orWhere('note', 'LIKE', "%$query%")
         ->orWhere('created_at', 'LIKE', "%$query%")
         ->orWhere('updated_at', 'LIKE', "%$query%")

            ->paginate(3);
        }
        else
        {
            $records = User::orderBy('id', 'DESC')->paginate(3);
        }

        //$records=User::paginate(15);
        return view('odo::user.index', ['records' => $records]);
    }

}

