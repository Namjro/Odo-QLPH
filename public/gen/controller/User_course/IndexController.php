<?php
namespace Longtt\Odo\Controllers\User_course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\User_course;

class IndexController extends Controller
{
    public function index()
    {
        $records=User_course::paginate(3);
        return view('odo::user_course.index', ['records' => $records]);
    }

}
