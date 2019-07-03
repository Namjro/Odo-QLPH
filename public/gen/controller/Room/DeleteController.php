<?php
namespace Longtt\Odo\Controllers\Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Room;


class DeleteController extends Controller
{

    public $_room;

    public function __construct(Room $room){
        $this->_room=$room;
    }

    public function index($id)
    {

        $this->_room->find($id)->delete();
        return redirect()->route(
            'room.index'
        )->with('status', 'Data deleted!');

    }

}
