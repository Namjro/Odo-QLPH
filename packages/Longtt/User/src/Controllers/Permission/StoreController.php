<?php
namespace Longtt\Account\Controllers\Permission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\Permission;
use Longtt\User\Model\Role;
use Longtt\User\Model\User;

class StoreController extends Controller
{

    public $_user;

    public function __construct(User $user){
        $this->_user=$user;
    }

    public function index(Request $request)
    {
        DB::table('permissions')->truncate();
        foreach($request->input("permission") as $permission){
            $model=new Permission();
            $model->permission=$permission;
            $model->save();
        }
        return redirect()->route(
            'permission.index'
        )->with('status', 'Data saved!');
        //return view('user::user.create');

    }

}
