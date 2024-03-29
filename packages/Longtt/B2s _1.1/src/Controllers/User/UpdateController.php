<?php
namespace Longtt\B2s\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\User;

class UpdateController extends Controller
{

    public $_user;

    public function __construct(User $user){
        $this->_user=$user;
    }

    public function index(Request $request)
    {
        /*$this->validate($request, [
            'email' => 'required|unique:users|max:255',
        ]);*/
        $id=$request->input('id');
        $model=$this->_user->find($id);
                $model->id=$request->input("id");
        $model->name=$request->input("name");
        $model->role_id=$request->input("role_id");
        $model->account=$request->input("account");
        $model->email=$request->input("email");
        $model->password=$request->input("password");
        $model->facebook_id=$request->input("facebook_id");
        $model->facebook_token=$request->input("facebook_token");
        $model->facebook_token_expire_time=$request->input("facebook_token_expire_time");
        $model->avatar=$request->input("avatar");
        $model->remember_token=$request->input("remember_token");
        $model->created_at=$request->input("created_at");
        $model->updated_at=$request->input("updated_at");

        $model->save();
        return redirect()->route(
            'user.index'
        )->with('status', 'Data updated!');

    }

}

