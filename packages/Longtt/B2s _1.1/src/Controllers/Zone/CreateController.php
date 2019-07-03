<?php
namespace Longtt\B2s\Controllers\Zone;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\Zone;


class CreateController extends Controller
{

    public function index()
    {
        $zones=Zone::all();
        return view('b2s::zone.create',["zones"=>$zones]);

    }

}
