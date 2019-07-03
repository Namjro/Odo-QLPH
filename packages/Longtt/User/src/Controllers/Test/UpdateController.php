<?php
namespace Longtt\User\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\Test;

class UpdateController extends Controller
{

    public $_test;

    public function __construct(Test $test){
        $this->_test=$test;
    }

    public function index(Request $request)
    {
        /*$this->validate($request, [
            'email' => 'required|unique:users|max:255',
        ]);*/
        $id=$request->input('id');
        $model=$this->_test->find($id);
                $model->id=$request->input("id");
        $model->name=$request->input("name");
        $model->age=$request->input("age");

        $model->save();
        return redirect()->route(
            'test.index'
        )->with('status', 'Data updated!');

    }

}

