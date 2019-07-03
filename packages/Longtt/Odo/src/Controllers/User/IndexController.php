<?php
namespace Longtt\Odo\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\User;

class IndexController extends Controller
{
    public function index()
    {
        $records=User::paginate(3);
        return view('odo::user.index', ['records' => $records]);
    }

}
