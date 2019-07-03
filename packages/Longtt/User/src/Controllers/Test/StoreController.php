<?php
namespace Longtt\User\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\Test;

class StoreController extends Controller
{


    public function __construct(){
    }

    public function index(Request $request)
    {
        $this->validate($request, [
            //'name' => 'required|unique:tests|max:255',
        ]);
        $model=new Test();
                $model->id=$request->input("id");
        $model->name=$request->input("name");
        $model->age=$request->input("age");

        $model->save();
        return redirect()->route(
            'test.index'
        )->with('status', 'Data saved!');


    }

}

