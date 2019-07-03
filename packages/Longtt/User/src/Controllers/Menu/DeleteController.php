<?php
namespace Longtt\User\Controllers\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\Menu;
use Longtt\User\Model\User;

class DeleteController extends Controller
{

    public $_menu;

    public function __construct(Menu $menu){
        $this->_menu=$menu;
    }

    public function index($id)
    {

        $user=$this->_menu->find($id)->delete();
        return redirect()->route(
            'menu.index'
        )->with('status', 'Data deleted!');

    }

}
