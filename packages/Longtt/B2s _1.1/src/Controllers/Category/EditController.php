<?php
namespace Longtt\B2s\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\Category;

class EditController extends Controller
{

    public $category;

    public function __construct(Category $category){
        $this->category=$category;
    }

    public function index($id)
    {


        $category=$this->category->find($id);
        return view('b2s::category.edit',[
            'category'=>$category,
        ]);

    }

}

