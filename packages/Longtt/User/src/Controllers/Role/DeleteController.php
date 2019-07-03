<?php
namespace Longtt\User\Controllers\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\Role;
use Longtt\User\Model\User;

class DeleteController extends Controller
{

    public $_role;

    public function __construct(Role $role){
        $this->_role=$role;
    }

    public function index($id)
    {

        $user=$this->_role->find($id)->delete();
        return redirect()->route(
            'role.index'
        )->with('status', 'Data deleted!');

    }

}
