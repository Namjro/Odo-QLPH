<?php
namespace Longtt\Odo\Controllers\Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Room;

class EditController extends Controller
{

    public $room;

    public function __construct(Room $room){
        $this->room=$room;
    }

    public function index($id)
    {


        $room=$this->room->find($id);
        return view('odo::room.edit',[
            'room'=>$room,
        ]);

    }

}

