<?php

namespace  Longtt\User\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Longtt\User\Model\Permission;
use Illuminate\Support\Facades\Route;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
       /* echo "<pre>";
        var_dump(Auth::user()->role_id."|".Route::getFacadeRoot()->current()->methods[0]."|".$currentPath= Route::getFacadeRoot()->current()->uri());
        var_dump($request->route()->uri());
        var_dump($currentPath= Route::getFacadeRoot()->current()->methods[0]);
        echo "</pre>";exit;*/
        /*echo "<pre>";
        var_dump(Permission::all()->toArray());
        echo "</pre>";exit;*/
        if (!Auth::check()) {
            //abort(403, 'Unauthorized action.');
            return redirect()->route('login');
        }else{
            if(Auth::user()->role_id==='1'){
                return $next($request);
            }
            $permissions=array();
            foreach(Permission::all() as $key=>$permission){
                $permissions[]=$permission->permission;
            }
            if(in_array(Auth::user()->role_id."|".Route::getFacadeRoot()->current()->methods[0]."|".$currentPath= Route::getFacadeRoot()->current()->uri(),$permissions)){
                return $next($request);
            }else{
                //abort(403, 'Unauthorized action.');
                return redirect()->route('user.home');
            }
        }

    }
}
