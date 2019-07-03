<?php
namespace Longtt\Odo\Controllers\Booking_calendar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Booking_calendar;

class StoreController extends Controller
{


    public function __construct(){
    }

    public function index(Request $request)
    {
        $this->validate($request, [
            //'name' => 'required|unique:booking_calendar|max:255',
        ]);
        $model=new Booking_calendar();
                $model->id=$request->input("id");
        $model->id_lecture=$request->input("id_lecture");
        $model->id_room=$request->input("id_room");
        $model->id_shift=$request->input("id_shift");
        $model->created_at=$request->input("created_at");
        $model->updated_at=$request->input("updated_at");

        $model->save();
        return redirect()->route(
            'booking_calendar.index'
        )->with('status', 'Data saved!');


    }

}

