<?php
namespace Longtt\User\Controllers\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
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
        $this->validate($request, [
            'name' => 'required|unique:roles|max:255',
        ]);
        $model=new Role();
        $model->name=$request->input("name");
        $model->save();
        return redirect()->route(
            'role.index'
        )->with('status', 'Data saved!');
        //return view('user::user.create');

    }

}
