<?php
namespace Longtt\User\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\Role;
use Longtt\User\Model\User;

class UserEditRoleController extends Controller
{
    public $_user;

    public function __construct(User $user){
        $this->_user=$user;
    }

    public function index($id)
    {

        $role = Role::all();
        $user=$this->_user->find($id);

        return view('user::user.edit_role',[
            'role'=>$role,'user'=>$user
        ]);

    }

}
