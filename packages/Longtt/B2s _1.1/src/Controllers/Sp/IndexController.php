<?php
namespace Longtt\B2s\Controllers\Sp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\Product;

class IndexController extends Controller
{
    public function index()
    {
        $records = Product::select('products.name as name','products.id as id', 'products.code as code','products.sku as sku','products.description as description','products.qty as qty','products.company_id as company_id','category.name as categoryname')->join('category', 'products.category_id', '=', 'category.id')
            ->paginate(20);

        //$records=Product::paginate(3);
        return view('b2s::sp.index', ['records' => $records]);
    }

}
