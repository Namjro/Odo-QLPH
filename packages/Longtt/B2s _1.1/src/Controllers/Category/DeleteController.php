<?php
namespace Longtt\B2s\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\Category;


class DeleteController extends Controller
{

    public $_category;

    public function __construct(Category $category){
        $this->_category=$category;
    }

    public function index($id)
    {

        $this->_category->find($id)->delete();
        return redirect()->route(
            'category.index'
        )->with('status', 'Data deleted!');

    }

}
