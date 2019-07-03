<?php
namespace Longtt\Odo\Controllers\User_course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\User_course;


class DeleteController extends Controller
{

    public $_user_course;

    public function __construct(User_course $user_course){
        $this->_user_course=$user_course;
    }

    public function index($id)
    {

        $this->_user_course->find($id)->delete();
        return redirect()->route(
            'user_course.index'
        )->with('status', 'Data deleted!');

    }

}
