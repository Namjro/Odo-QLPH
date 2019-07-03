<?php
namespace Longtt\Odo\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Course;


class CreateController extends Controller
{

    public function index()
    {
        $courses=Course::all();
        return view('odo::course.create',["courses"=>$courses]);

    }

}
