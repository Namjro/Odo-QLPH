<?php
namespace Longtt\Odo\Controllers\Shift;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Shift;


class CreateController extends Controller
{

    public function index()
    {
        $shifts=Shift::all();
        return view('odo::shift.create',["shifts"=>$shifts]);

    }

}
