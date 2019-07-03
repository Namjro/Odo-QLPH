<?php
namespace Longtt\B2s\Controllers\Sp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\Product;

class EditController extends Controller
{

    public $product;

    public function __construct(Product $product){
        $this->product=$product;
    }

    public function index($id)
    {


        $product=$this->product->find($id);
        return view('b2s::sp.edit',[
            'product'=>$product,
        ]);

    }

}

