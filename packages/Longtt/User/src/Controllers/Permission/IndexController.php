<?php
namespace Longtt\User\Controllers\Permission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;
use Longtt\User\Model\Permission;
use Longtt\User\Model\Role;
use Longtt\User\Model\User;

class IndexController extends Controller
{
    public function index()
    {
        $routeCollection = \Illuminate\Support\Facades\Route::getRoutes();
        $records=array();
        foreach($routeCollection as $key => $value){
            $middleware=$value->middleware();
            if(in_array("checkPermission",$middleware)){
                $records[]=$value;
            }

        }
        $roles=Role::all();
        $permissions=Permission::all();
        $array=array();
        foreach($permissions as $permission){
            $array[]=$permission->permission;
        }
        //asort($array);
//        echo "<table style='width:100%'>";
//        echo "<tr>";
//        echo "<td width='10%'><h4>HTTP Method</h4></td>";
//        echo "<td width='10%'><h4>Route</h4></td>";
//        echo "<td width='10%'><h4>Name</h4></td>";
//        echo "<td width='70%'><h4>Corresponding Action</h4></td>";
//        echo "</tr>";
//        foreach ($routeCollection as $value) {
//            /* echo "<pre>";
//         var_dump(get_class_methods($value));
//         echo "</pre>";exit;*/
//            echo "<tr>";
//            echo "<td>" . $value->methods[0] . "</td>";
//            echo "<td>" . $value->uri . "</td>";
//            echo "<td>" . $value->getName() . "</td>";
//            echo "<td>" . $value->getActionName() . "</td>";
//            echo "</tr>";
//        }
//        echo "</table>";exit;
        return view('user::permission.index', ['records' => $records,
            'roles'=>$roles,
            'permissions'=>$array,
        ]);
    }

}
