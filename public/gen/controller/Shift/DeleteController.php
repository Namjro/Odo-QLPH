<?php
namespace Longtt\Odo\Controllers\Shift;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Shift;


class DeleteController extends Controller
{

    public $_shift;

    public function __construct(Shift $shift){
        $this->_shift=$shift;
    }

    public function index($id)
    {

        $this->_shift->find($id)->delete();
        return redirect()->route(
            'shift.index'
        )->with('status', 'Data deleted!');

    }

}
