<?php
namespace Longtt\B2s\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\Category;

class IndexController extends Controller
{
    public function index()
    {
        $records=Category::paginate(3);
        return view('b2s::category.index', ['records' => $records]);
    }

}
