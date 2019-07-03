<?php
namespace Longtt\User\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\User;

class ProfileController extends Controller
{

    public $_user;

    public function __construct(){

    }

    public function index()
    {
        /*echo "<pre>";
        var_dump(Auth::user());
        echo "</pre>";exit;*/

        return view('user::auth.profile');
    }

}
