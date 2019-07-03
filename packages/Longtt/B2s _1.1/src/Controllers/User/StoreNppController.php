<?php
namespace Longtt\B2s\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\User;
use Longtt\User\Model\Role;

class StoreNppController extends Controller
{


    public function __construct(){
    }

    public function index(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);
        $model=new User();
        $model->name=$request->input("name");
        $model->phone=$request->input("phone");
        $model->role_id=Role::where('code','=','nha_phan_phoi')->first()->id;
        $model->email=$request->input("email");
        $model->user_name=$request->input("email");
        $model->address=$request->input("address");
        //$model->password=$request->input("password");
        $model->save();

        $user=User::find(Auth::user()->id);
        $user->child_users()->attach([$model->id]);

        //tạo mật khẩu và gửi về email cho nhà phân phối

        return redirect()->route(
            'user.index'
        )->with('status', 'Tạo nhà phân phối thành công');


    }

    public function newUserNpp(){

    }
    public function existUserNpp(){

    }
    public function createPassword(User $user){
        $password=bcrypt(substr(str_shuffle("123456789abcdefghjkmnpqrstuvxyz"),0,6));
        //send password to email
    }

}

