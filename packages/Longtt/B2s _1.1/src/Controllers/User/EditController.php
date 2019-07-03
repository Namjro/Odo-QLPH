<?php
namespace Longtt\B2s\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\User;

class EditController extends Controller
{

    public $user;

    public function __construct(User $user){
        $this->user=$user;
    }

    public function index($id)
    {


        $user=$this->user->find($id);
        return view('b2s::user.edit',[
            'user'=>$user,
        ]);

    }

}

