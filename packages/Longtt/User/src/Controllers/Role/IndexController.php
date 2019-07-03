<?php
namespace Longtt\User\Controllers\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\Role;
use Longtt\User\Model\User;

class IndexController extends Controller
{
    public function index()
    {
        $records=Role::paginate(20);
        $records->setPath("");
        return view('user::role.index', ['records' => $records]);
    }

}
