<?php
namespace Longtt\User\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\User;

class EditController extends Controller
{

    public $_user;

    public function __construct(User $user){
        $this->_user=$user;
    }

    public function index($id)
    {

        $user=$this->_user->find($id);
        $user=$this->_user->find($id);
        return view('user::user.edit',['user'=>$user]);

    }

}
