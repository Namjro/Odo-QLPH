<?php
namespace Longtt\B2s\Controllers\sp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\Product;

class StoreController extends Controller
{


    public function __construct(){
    }

    public function index(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required|min:1|max:255|unique:products',
                'code' => 'required|min:1|max:255|unique:product',
                'price' => 'required|min:3|max:255|integer',
                'sku' => 'required|max:255',
                'qty' => 'required|min:1|integer',
                //'account' => 'required|max:255',
                //'email' => 'required|string|email|unique:users',
            ],

            [
                'required' => ' :attribute Không được để trống',
                'min' => ' :attribute Không được nhỏ hơn :min',
                'max' => ' :attribute Không được lớn hơn :max',
                //'email'=> ':attribute Không dúng định dạng mail',
                'unique'=> ':attribute Bị trùng',
                'integer' => ' :attribute Để dạng số',
            ]
        );
        $model=new Product();
                //$model->id=$request->input("id");
        $model->name=$request->input("name");
        $model->code=$request->input("code");
        $model->price=$request->input("price");
        $model->sku=$request->input("sku");
        $model->description=$request->input("description");
        $model->qty=$request->input("qty");
        $model->category_id=$request->input("category_id");
        $model->company_id=$request->input("company_id");
        //$model->avatar=$request->input("avatar");
        //$model->remember_token=$request->input("remember_token");
        $model->created_at=$request->input("created_at");
        $model->updated_at=$request->input("updated_at");

        $model->save();
        return redirect()->route(
            'sp.index'
        )->with('status', 'Data saved!');


    }

}

