<?php
namespace Longtt\Odo\Controllers\User_course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\User_course;

class EditController extends Controller
{

    public $user_course;

    public function __construct(User_course $user_course){
        $this->user_course=$user_course;
    }

    public function index($id)
    {


        $user_course=$this->user_course->find($id);
        return view('odo::user_course.edit',[
            'user_course'=>$user_course,
        ]);

    }

}

