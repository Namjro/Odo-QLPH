<?php
namespace Longtt\User\Controllers\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\Menu;
use Longtt\User\Model\User;

class UpdateController extends Controller
{

    public $_user;
    public $_menu;

    public function __construct(User $user,Menu $menu){
        $this->_user=$user;
        $this->_menu=$menu;
    }

    public function index(Request $request)
    {
        /*$this->validate($request, [
            'email' => 'required|unique:users|max:255',
        ]);*/
        $id=$request->input('id');
        $model=$this->_menu->find($id);
        $model->name=$request->input("name");
        /*$model->account=$request->input("email");
        $model->email=$request->input("email");*/
        $model->save();
        return redirect()->route(
            'menu.index'
        )->with('status', 'Data updated!');
        //return view('user::user.create');

    }

}
