<?php
namespace Longtt\User\Controllers\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\Role;
use Longtt\User\Model\User;

class EditController extends Controller
{

    public $role;

    public function __construct(Role $role){
        $this->role=$role;
    }

    public function index($id)
    {


        $role=$this->role->find($id);
        return view('user::role.edit',[
            'role'=>$role,
        ]);

    }

}
