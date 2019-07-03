<?php
namespace Longtt\B2s\Controllers\Sp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\Product;


class CreateController extends Controller
{

    public function index()
    {
        $products=Product::all();
        return view('b2s::sp.create',["products"=>$products]);

    }

}
