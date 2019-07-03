<?php
namespace Longtt\B2s\Controllers\npp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\User;

class EditNppController extends Controller
{

    public $user;

    public function __construct(User $user){
        $this->user=$user;
    }

    public function index($id)
    {

        $user=$this->user->find($id);
       // $user->role_id;
        return view('b2s::npp.edit_npp',[
            'user'=>$user,
        ]);

    }

}

