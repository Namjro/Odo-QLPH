<?php
namespace Longtt\Odo\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Course;

class UpdateController extends Controller
{

    public $_course;

    public function __construct(Course $course){
        $this->_course=$course;
    }

    public function index(Request $request)
    {
        /*$this->validate($request, [
            'email' => 'required|unique:users|max:255',
        ]);*/
        $id=$request->input('id');
        $model=$this->_course->find($id);
                $model->id=$request->input("id");
        $model->name=$request->input("name");
        $model->created_at=$request->input("created_at");
        $model->updated_at=$request->input("updated_at");

        $model->save();
        return redirect()->route(
            'course.index'
        )->with('status', 'Data updated!');

    }

}

