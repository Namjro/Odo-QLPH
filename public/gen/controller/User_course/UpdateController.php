<?php
namespace Longtt\Odo\Controllers\User_course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\User_course;

class UpdateController extends Controller
{

    public $_user_course;

    public function __construct(User_course $user_course){
        $this->_user_course=$user_course;
    }

    public function index(Request $request)
    {
        /*$this->validate($request, [
            'email' => 'required|unique:users|max:255',
        ]);*/
        $id=$request->input('id');
        $model=$this->_user_course->find($id);
                $model->id=$request->input("id");
        $model->user_id=$request->input("user_id");
        $model->course_id=$request->input("course_id");
        $model->created_at=$request->input("created_at");
        $model->updated_at=$request->input("updated_at");

        $model->save();
        return redirect()->route(
            'user_course.index'
        )->with('status', 'Data updated!');

    }

}

