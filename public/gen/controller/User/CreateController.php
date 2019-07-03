<?php
namespace Longtt\Odo\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\User;


class CreateController extends Controller
{

    public function index()
    {
        $users=User::all();
        return view('odo::user.create',["users"=>$users]);

    }

}
