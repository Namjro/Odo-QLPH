<?php
namespace Longtt\B2s\Controllers\Zone;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\Zone;

class IndexController extends Controller
{
    public function index()
    {
        $records=Zone::paginate(30);
        return view('b2s::zone.index', ['records' => $records]);
    }

}
