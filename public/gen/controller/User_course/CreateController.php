<?php
namespace Longtt\Odo\Controllers\User_course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\User_course;


class CreateController extends Controller
{

    public function index()
    {
        $user_course=User_course::all();
        return view('odo::user_course.create',["user_course"=>$user_course]);

    }

}
