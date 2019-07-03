<?php
namespace Longtt\User\Controllers\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\Role;
use Longtt\User\Model\User;

class CreateController extends Controller
{

    public function index()
    {
        $roles=Role::all();
        return view('user::role.create',["roles"=>$roles]);

    }

}
