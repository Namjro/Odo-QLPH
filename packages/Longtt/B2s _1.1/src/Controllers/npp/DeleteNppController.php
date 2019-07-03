<?php
namespace Longtt\B2s\Controllers\npp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\User;


class DeleteNppController extends Controller
{

    public $_user;

    public function __construct(User $user){
        $this->_user=$user;
    }

    public function index($id)
    {

        $this->_user->find($id)->delete();
        return redirect()->route(
            'npp.index_npp'
        )->with('status', 'Data deleted!');

    }

}
