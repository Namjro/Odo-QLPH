<?php

namespace Longtt\B2s\Controllers\npp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\User;

class SearchNppController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');
        if ($query) {
            $records = User::select('users.name as name','users.id as id', 'users.email','users.created_at as created_at','users.updated_at as update_at','roles.name as rolename')->join('roles', 'users.role_id', '=', 'roles.id')
                ->where('roles.code',  '=', 'nha_phan_phoi')
                ->where(function ($records) use ($query) {
                    $records->where('users.name', 'LIKE', "%$query%")
                        ->orWhere('users.email', 'LIKE', "%$query%");
                })->paginate(20);
        } else {
            $records = User::join('roles', 'users.role_id', '=', 'roles.id')
                ->where('roles.code',  '=', 'nha_phan_phoi')->paginate(3);
        }

        //$records=User::paginate(15);
        return view('b2s::npp.index_npp', ['records' => $records]);
    }

}

