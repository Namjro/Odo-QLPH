<?php
namespace Longtt\User\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\Test;

class EditController extends Controller
{

    public $test;

    public function __construct(Test $test){
        $this->test=$test;
    }

    public function index($id)
    {


        $test=$this->test->find($id);
        return view('user::test.edit',[
            'test'=>$test,
        ]);

    }

}

