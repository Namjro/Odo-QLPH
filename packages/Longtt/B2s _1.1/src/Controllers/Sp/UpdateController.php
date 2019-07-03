<?php

namespace Longtt\B2s\Controllers\Sp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\Product;

class UpdateController extends Controller
{

    public $_product;

    public function __construct(Product $product)
    {
        $this->_product = $product;
    }

    public function index(Request $request)
    {
        /*$this->validate($request, [
            'email' => 'required|unique:users|max:255',
        ]);*/
        $id = $request->input('id');
        $model = $this->_product->find($id);
        $model->id = $request->input("id");
        $model->name = $request->input("name");
        $model->code = $request->input("code");
        $model->price = $request->input("price");
        $model->sku = $request->input("sku");
        $model->description = $request->input("description");
        $model->qty = $request->input("qty");
        $model->category_id = $request->input("category_id");
        $model->company_id = $request->input("company_id");
        //$model->avatar=$request->input("avatar");
        //$model->remember_token=$request->input("remember_token");
        $model->created_at = $request->input("created_at");
        $model->updated_at = $request->input("updated_at");

        $model->save();
        $model->save();
        return redirect()->route(
            'sp.index'
        )->with('status', 'Data updated!');

    }

}

