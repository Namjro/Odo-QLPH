<?php
namespace Longtt\Odo\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\User;

class EditController extends Controller
{

    public $user;

    public function __construct(User $user){
        $this->user=$user;
    }

    public function index($id)
    {


        $user=$this->user->find($id);
        return view('odo::user.edit',[
            'user'=>$user,
        ]);

    }

}

