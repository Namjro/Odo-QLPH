<?php
namespace Longtt\User\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\Test;

class IndexController extends Controller
{
    public function index()
    {
        $records=Test::paginate(3);
        return view('user::test.index', ['records' => $records]);
    }

}
