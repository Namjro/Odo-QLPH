<?php
namespace Longtt\Odo\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Course;

class IndexController extends Controller
{
    public function index()
    {
        $records=Course::paginate(3);
        return view('odo::course.index', ['records' => $records]);
    }

}
