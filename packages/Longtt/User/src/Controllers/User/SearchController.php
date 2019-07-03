<?php
namespace Longtt\User\Controllers\User;

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
            $users = User::where('email', 'LIKE', "%$query%")->orderBy('id','desc')->paginate(15);
        }
        else
        {
            $users = User::orderBy('id','desc')->paginate(15);
        }
//        echo "<pre>";
//        print_r($users->toArray());
//        echo "</pre>";
//        die();
        return view('user::user.index', ['users' => $users]);
    }

}
