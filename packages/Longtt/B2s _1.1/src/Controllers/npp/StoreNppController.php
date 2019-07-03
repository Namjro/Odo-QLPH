<?php
namespace Longtt\B2s\Controllers\npp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\User;
use Illuminate\Support\Facades\DB;

class StoreNppController extends Controller
{


    public function __construct(){
    }

    public function index(Request $request)
    {
        $npp = DB::table('roles')->where('code','nha_phan_phoi')->value('id');

        $this->validate($request,
            [
                'name' => 'required|min:1|max:255',
                //'account' => 'required|max:255',
                'email' => 'required|string|email|unique:users',
            ],

            [
                'required' => ':attribute Không được để trống',
                'min' => ':attribute Không được nhỏ hơn :min',
                'max' => ':attribute Không được lớn hơn :max',
                'email'=> ':không dúng định dạng mail',
                'unique'=> ':email bị trùng'
            ]
            );
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $model=new User();
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
        $model->created_at=date('Y-m-d H:i:s');
        $model->updated_at=date('Y-m-d H:i:s');

        $model->save();
        return redirect()->route(
            'npp.index_npp'
        )->with('status', 'Data saved!');


    }

}

