<?php

namespace Longtt\Odo\Controllers\Booking_calendar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Booking_calendar;

class StoreController extends Controller
{


    public function __construct()
    {
    }

    public function index(Request $request)
    {
        $this->validate($request, [
            //'name' => 'required|unique:booking_calendar|max:255',
        ]);

        if ($request->input("week") > 0) {
            for ($i = 1; $i <= $request->input("week"); $i++) {
                $date=$request->input("date");
                $date=date_create($date);
                //dd($i);

                date_add($date,date_interval_create_from_date_string($i*7 .' days'));
                date_format($date, 'Y-m-d');
                $model = new Booking_calendar();
                //$model->id=$request->input("id");
                $model->user_id = $request->input("name");
                $model->id_room = $request->input("room");
                $model->id_shift = $request->input("id_shift");
                $model->id_course = $request->input("course");
                $model->date = $date;

                //$model->created_at=$request->input("created_at");
                //model->updated_at=$request->input("updated_at");

                $model->save();
        }
        } else {
            $model = new Booking_calendar();
            //$model->id=$request->input("id");
            $model->user_id = $request->input("name");
            $model->id_room = $request->input("room");
            $model->id_shift = $request->input("id_shift");
            $model->date = $request->input("date");
            $model->id_course = $request->input("course");

            //$model->created_at=$request->input("created_at");
            //model->updated_at=$request->input("updated_at");

            $model->save();
        }
        return redirect()->route(
            'booking_calendar.index'
        )->with('status', 'Data saved!');


    }

}

