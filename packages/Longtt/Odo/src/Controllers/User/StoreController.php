<?php

namespace Longtt\Odo\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Course;
use Longtt\Odo\Model\User;
use Longtt\Odo\Model\User_course;

class StoreController extends Controller
{


    public function __construct()
    {
    }

    public function index(Request $request)
    {
        $this->validate($request, [
            //'name' => 'required|unique:users|max:255',
        ]);
        $monhoc = $request->input("subject");

        $raw_password = substr(str_shuffle("123456789abcdefghjkmnpqrstuvxyz"), 0, 6);
        $password = bcrypt($raw_password);
        $model = new User();
        //$model->id=$request->input("id");
        $model->name = $request->input("name");
        $model->role_id = 2;
        $model->phone = $request->input("phone");
        //$model->user_name=$request->input("user_name");
        $model->email = $request->input("email");
        $model->password = $password;
        //$model->avatar=$request->input("avatar");
        //$model->address=$request->input("address");
        //$model->geolocation=$request->input("geolocation");
        //$model->subject=$cate;
        //$model->remember_token=$request->input("remember_token");
        //$model->note=$request->input("note");
        //$model->created_at=$request->input("created_at");
        //$model->updated_at=$request->input("updated_at");

        $model->save();
        foreach ($monhoc as $cate) {
            $mode2= new User_course();
            $mode2->user_id=$model->id;
            $mode2->course_id=$cate;
            $mode2->save();
        }

        return redirect()->route(
            'user.index'
        )->with('status', 'Data saved!');


    }
}

