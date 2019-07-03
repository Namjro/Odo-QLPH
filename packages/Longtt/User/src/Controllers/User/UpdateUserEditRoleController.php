<?php
namespace Longtt\User\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\Role;
use Longtt\User\Model\User;

class UpdateUserEditRoleController extends Controller
{
    public $_user;

    public function __construct(User $user){
        $this->_user=$user;
    }

    public function index(Request $request)
    {
        $model = $this->_user->find($request->input('id'));
//        $model->name = $request->name;
        $model->role_id = $request->role_id;
        $model->save();

        return redirect()->back()->with('status','Phân vai Trò Thành Công');

    }

}
