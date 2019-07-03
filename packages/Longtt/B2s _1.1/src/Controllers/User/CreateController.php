<?php
namespace Longtt\B2s\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\User;


class CreateController extends Controller
{

    public function index()
    {
        $users=User::all();
        return view('b2s::user.create',["users"=>$users]);

    }

}
