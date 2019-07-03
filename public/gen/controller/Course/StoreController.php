<?php
namespace Longtt\Odo\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Course;

class StoreController extends Controller
{


    public function __construct(){
    }

    public function index(Request $request)
    {
        $this->validate($request, [
            //'name' => 'required|unique:courses|max:255',
        ]);
        $model=new Course();
                $model->id=$request->input("id");
        $model->name=$request->input("name");
        $model->created_at=$request->input("created_at");
        $model->updated_at=$request->input("updated_at");

        $model->save();
        return redirect()->route(
            'course.index'
        )->with('status', 'Data saved!');


    }

}

