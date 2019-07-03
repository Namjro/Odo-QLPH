<?php
namespace Longtt\Odo\Controllers\Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Room;

class IndexController extends Controller
{
    public function index()
    {
        $records=Room::paginate(3);
        return view('odo::room.index', ['records' => $records]);
    }

}
