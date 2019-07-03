<?php
namespace Longtt\B2s\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\Category;


class CreateController extends Controller
{

    public function index()
    {
        $category=Category::all();
        return view('b2s::category.create',["category"=>$category]);

    }

}
