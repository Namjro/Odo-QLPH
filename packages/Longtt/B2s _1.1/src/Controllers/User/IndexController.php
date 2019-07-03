<?php
namespace Longtt\B2s\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\User;

class IndexController extends Controller
{
    public function index()
    {
        $records=User::paginate(3);
        return view('b2s::user.index', ['records' => $records]);
    }

}
