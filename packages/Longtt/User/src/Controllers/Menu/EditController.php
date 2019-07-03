<?php
namespace Longtt\User\Controllers\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\Menu;
use Longtt\User\Model\User;

class EditController extends Controller
{

    public $menu;

    public function __construct(Menu $menu){
        $this->menu=$menu;
    }

    public function index($id)
    {


        $menu=$this->menu->find($id);
        return view('user::menu.edit',[
            'menu'=>$menu,
        ]);

    }

}
