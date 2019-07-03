<?php
namespace Longtt\B2s\Controllers\Sp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\Product;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request,
            [
                'q' => 'required',

                //'account' => 'required|max:255',
                //'email' => 'required|string|email|unique:users',
            ],

            [
                'required' => ' Tìm kiếm không được để trống',

            ]
        );
        $query = $request->input('q');
        if ($query) {
            $records = Product::select('products.name as name','products.id as id', 'products.code as code','products.sku as sku','products.description as description','products.qty as qty','products.company_id as company_id','category.name as categoryname')
                ->join('category', 'products.category_id', '=', 'category.id')
                ->where(function ($records) use ($query) {
                    $records  ->Where('products.name', 'LIKE', "%$query%")
                        ->orWhere('products.code', 'LIKE', "%$query%")
                        ->orWhere('products.price', 'LIKE', "%$query%")
                        ->orWhere('products.sku', 'LIKE', "%$query%")
                        ->orWhere('products.description', 'LIKE', "%$query%")
                        ->orWhere('products.qty', 'LIKE', "%$query%")
                        ->orWhere('products.category_id', 'LIKE', "%$query%")
                        ->orWhere('products.company_id', 'LIKE', "%$query%")
                        ->orWhere('category.name', 'LIKE', "%$query%");
                        //->orWhere('avatar', 'LIKE', "%$query%")
                        //->orWhere('remember_token', 'LIKE', "%$query%")
                       // ->orWhere('created_at', 'LIKE', "%$query%")
                        //->orWhere('updated_at', 'LIKE', "%$query%");

                })->paginate(20);

        }
        else {
            $records = Product::join('category', 'products.category_id', '=', 'category.id');
        }
        //$records=User::paginate(15);
        return view('b2s::sp.index', ['records' => $records]);
    }

}

