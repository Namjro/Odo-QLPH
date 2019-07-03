<?php
namespace Longtt\B2s\Controllers\Zone;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\Zone;

class StoreController extends Controller
{


    public function __construct(){
    }

    public function index(Request $request)
    {
        $this->validate($request, [
            //'name' => 'required|unique:zones|max:255',
        ]);
        $model=new Zone();
        $model->name=$request->input("name");
        $model->code=$request->input("code");
        $model->parent_id=$request->input("parent_id");
        $model->company_id=Auth::user()->id;

        $model->save();
        return redirect()->route(
            'zone.index'
        )->with('status', 'Thêm mới thành công');


    }

}

