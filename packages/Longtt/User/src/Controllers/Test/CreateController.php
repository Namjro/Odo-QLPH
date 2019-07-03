<?php
namespace Longtt\User\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\Test;


class CreateController extends Controller
{

    public function index()
    {
        $tests=Test::all();
        return view('user::test.create',["tests"=>$tests]);

    }

}
