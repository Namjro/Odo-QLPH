<?php
namespace Longtt\B2s\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\Category;

class StoreController extends Controller
{


    public function __construct(){
    }

    public function index(Request $request)
    {
        $this->validate($request, [
            //'name' => 'required|unique:category|max:255',
        ]);
        $model=new Category();
                $model->id=$request->input("id");
        $model->name=$request->input("name");
        $model->code=$request->input("code");
        $model->parent_id=$request->input("parent_id");
        $model->parent_code=$request->input("parent_code");
        $model->created_at=$request->input("created_at");
        $model->updated_at=$request->input("updated_at");

        $model->save();
        return redirect()->route(
            'category.index'
        )->with('status', 'Data saved!');


    }

}

