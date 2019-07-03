<?php
namespace Longtt\User\Controllers\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\Menu;
use Longtt\User\Model\User;

class CreateController extends Controller
{

    public function index()
    {
        $menus=Menu::all();
        $menu_option= view("user::menu.menu_tree_option",["menus"=>$menus]);

        return view('user::menu.create',["menus"=>$menus,"menu_option"=>$menu_option]);

    }

}
