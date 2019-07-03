<?php
namespace Longtt\User\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\Test;


class DeleteController extends Controller
{

    public $_test;

    public function __construct(Test $test){
        $this->_test=$test;
    }

    public function index($id)
    {

        $this->_test->find($id)->delete();
        return redirect()->route(
            'test.index'
        )->with('status', 'Data deleted!');

    }

}
