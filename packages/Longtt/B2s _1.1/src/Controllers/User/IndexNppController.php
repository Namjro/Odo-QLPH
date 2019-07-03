<?php
namespace Longtt\B2s\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\User;

class IndexNppController extends Controller
{
    public function index()
    {
        $records=User::whereHas('role', function ($query) {
            $query->where('code', '=', 'nha_phan_phoi');
        })->paginate(20);;
        return view('b2s::user.index', ['records' => $records]);
    }

}
