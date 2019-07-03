<?php
namespace Longtt\Odo\Controllers\Shift;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Shift;

class IndexController extends Controller
{
    public function index()
    {
        $records=Shift::paginate(3);
        return view('odo::shift.index', ['records' => $records]);
    }

}
