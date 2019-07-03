<?php
namespace Longtt\User\Controllers\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\Menu;
use Longtt\User\Model\User;

class IndexController extends Controller
{
    public function index()
    {
        $records=Menu::paginate(15);
        return view('user::menu.index', ['records' => $records]);
    }

}
