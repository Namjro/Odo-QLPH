<?php
namespace Longtt\Odo\Controllers\Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Room;


class CreateController extends Controller
{

    public function index()
    {
        $rooms=Room::all();
        return view('odo::room.create',["rooms"=>$rooms]);

    }

}
