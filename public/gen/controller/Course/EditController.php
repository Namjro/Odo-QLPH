<?php
namespace Longtt\Odo\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Course;

class EditController extends Controller
{

    public $course;

    public function __construct(Course $course){
        $this->course=$course;
    }

    public function index($id)
    {


        $course=$this->course->find($id);
        return view('odo::course.edit',[
            'course'=>$course,
        ]);

    }

}

