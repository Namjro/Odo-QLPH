<?php
namespace Longtt\B2s\Controllers\Zone;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\Zone;

class UpdateController extends Controller
{

    public $_zone;

    public function __construct(Zone $zone){
        $this->_zone=$zone;
    }

    public function index(Request $request)
    {
        /*$this->validate($request, [
            'email' => 'required|unique:users|max:255',
        ]);*/
        $id=$request->input('id');
        $model=$this->_zone->find($id);
                $model->id=$request->input("id");
        $model->name=$request->input("name");
        $model->code=$request->input("code");
        $model->parent_id=$request->input("parent_id");
        $model->created_at=$request->input("created_at");
        $model->updated_at=$request->input("updated_at");
        $model->company_id=$request->input("company_id");

        $model->save();
        return redirect()->route(
            'zone.index'
        )->with('status', 'Data updated!');

    }

}

