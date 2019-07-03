<?php
namespace Longtt\B2s\Controllers\npp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\User;
use Illuminate\Support\Facades\Validator;

class UpdateNppController extends Controller
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
        $npp = DB::table('roles')->where('code','nha_phan_phoi')->value('id');
        $id=$request->input('id');
        $model=$this->_user->find($id);
                $model->id=$request->input("id");
        $model->name=$request->input("name");
        $model->role_id=$npp;
        $model->account=$request->input("email");
        $model->email=$request->input("email");
        $model->password=$request->input("password");
        $model->facebook_id=$request->input("facebook_id");
        $model->facebook_token=$request->input("facebook_token");
        $model->facebook_token_expire_time=$request->input("facebook_token_expire_time");
        $model->avatar=$request->input("avatar");
        $model->remember_token=$request->input("remember_token");
        //$model->created_at=$request->input("created_at");
        $model->updated_at=date('Y-m-d H:i:s');

        $model->save();
        return redirect()->route(
            'npp.index_npp'
        )->with('status', 'Data updated!');

    }



}
