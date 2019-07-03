<?php
namespace Longtt\Odo\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Course;


class DeleteController extends Controller
{

    public $_course;

    public function __construct(Course $course){
        $this->_course=$course;
    }

    public function index($id)
    {

        $this->_course->find($id)->delete();
        return redirect()->route(
            'course.index'
        )->with('status', 'Data deleted!');

    }

}
