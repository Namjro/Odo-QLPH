<?php
namespace Longtt\Odo\Controllers\Shift;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Shift;

class UpdateController extends Controller
{

    public $_shift;

    public function __construct(Shift $shift){
        $this->_shift=$shift;
    }

    public function index(Request $request)
    {
        /*$this->validate($request, [
            'email' => 'required|unique:users|max:255',
        ]);*/
        $id=$request->input('id');
        $model=$this->_shift->find($id);
                $model->id=$request->input("id");
        $model->start_time=$request->input("start_time");
        $model->finish_time=$request->input("finish_time");
        $model->created_at=$request->input("created_at");
        $model->updated_at=$request->input("updated_at");

        $model->save();
        return redirect()->route(
            'shift.index'
        )->with('status', 'Data updated!');

    }

}

