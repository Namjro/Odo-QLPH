<?php
namespace Longtt\User\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\User;

class UpdateController extends Controller
{

    public $_user;

    public function __construct(User $user){
        $this->_user=$user;
    }

    public function index(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|unique:users|max:255',
        ]);
        $id=$request->input('id');
        $model=User::find($id);
        $model->name=$request->input("email");
        $model->account=$request->input("email");
        $model->email=$request->input("email");
        $model->save();
        return redirect()->route(
            'user.index'
        )->with('status', 'Data updated!');
        //return view('user::user.create');

    }

}
