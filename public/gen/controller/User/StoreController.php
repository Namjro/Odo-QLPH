<?php
namespace Longtt\Odo\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\User;

class StoreController extends Controller
{


    public function __construct(){
    }

    public function index(Request $request)
    {
        $this->validate($request, [
            //'name' => 'required|unique:users|max:255',
        ]);
        $model=new User();
                $model->id=$request->input("id");
        $model->name=$request->input("name");
        $model->role_id=$request->input("role_id");
        $model->phone=$request->input("phone");
        $model->user_name=$request->input("user_name");
        $model->email=$request->input("email");
        $model->password=$request->input("password");
        $model->avatar=$request->input("avatar");
        $model->address=$request->input("address");
        $model->geolocation=$request->input("geolocation");
        $model->subject=$request->input("subject");
        $model->remember_token=$request->input("remember_token");
        $model->note=$request->input("note");
        $model->created_at=$request->input("created_at");
        $model->updated_at=$request->input("updated_at");

        $model->save();
        return redirect()->route(
            'user.index'
        )->with('status', 'Data saved!');


    }

}

