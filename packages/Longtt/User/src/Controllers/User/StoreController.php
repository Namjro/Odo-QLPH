<?php
namespace Longtt\User\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
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
            'email' => 'required|unique:users|max:255',
            'password' => 'required',
        ]);
        $model=new User();
        $model->name=$request->input("email");
        $model->account=$request->input("email");
        $model->email=$request->input("email");
        $model->role_id=$request->input("role_id");
        $model->password= Hash::make($request->input("password"));
        $model->save();
        return redirect()->route(
            'user.index'
        )->with('status', 'Data saved!');
        //return view('user::user.create');

    }

}
