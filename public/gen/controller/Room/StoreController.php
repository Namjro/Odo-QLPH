<?php
namespace Longtt\Odo\Controllers\Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Room;

class StoreController extends Controller
{


    public function __construct(){
    }

    public function index(Request $request)
    {
        $this->validate($request, [
            //'name' => 'required|unique:rooms|max:255',
        ]);
        $model=new Room();
                $model->id=$request->input("id");
        $model->name=$request->input("name");
        $model->code=$request->input("code");
        $model->address=$request->input("address");
        $model->created_at=$request->input("created_at");
        $model->updated_at=$request->input("updated_at");

        $model->save();
        return redirect()->route(
            'room.index'
        )->with('status', 'Data saved!');


    }

}

