<?php
namespace Longtt\User\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\User;

class IndexController extends Controller
{

    public $_user;

    public function __construct(User $user){
        $this->_user=$user;
    }

    public function index()
    {
        /*echo "<pre>";
        var_dump(Auth::user());
        echo "</pre>";exit;*/
        $users=$this->_user->paginate(50);
        $users->setPath('');
        return view('user::user.index', ['users' => $users]);
    }

}
