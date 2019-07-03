<?php
namespace Longtt\User\Controllers\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\Menu;
use Longtt\User\Model\User;

class StoreController extends Controller
{

    public $_user;

    public function __construct(User $user){
        $this->_user=$user;
    }

    public function index(Request $request)
    {
        /*$this->validate($request, [
            'name' => 'required|unique:menus|max:255',
        ]);*/
        $model=new Menu();
        $model->name=$request->input("name");
        $model->url=$request->input("url");
        $model->route=$request->input("route");
        $model->type=$request->input("type");
        $model->parent_id=$request->input("parent_id");
        $model->user_id=Auth::user()->id;
        $model->icon_code=$request->input("icon_code");
        $model->save();
        return redirect()->route(
            'menu.index'
        )->with('status', 'Data saved!');
        //return view('user::user.create');

    }

}
