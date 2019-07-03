<?php
namespace Longtt\B2s\Controllers\Sp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\Product;


class DeleteController extends Controller
{

    public $_product;

    public function __construct(Product $product){
        $this->_product=$product;
    }

    public function index($id)
    {

        $this->_product->find($id)->delete();
        return redirect()->route(
            'sp.index'
        )->with('status', 'Data deleted!');

    }

}
