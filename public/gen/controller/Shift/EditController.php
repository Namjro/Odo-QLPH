<?php
namespace Longtt\Odo\Controllers\Shift;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\Odo\Model\Shift;

class EditController extends Controller
{

    public $shift;

    public function __construct(Shift $shift){
        $this->shift=$shift;
    }

    public function index($id)
    {


        $shift=$this->shift->find($id);
        return view('odo::shift.edit',[
            'shift'=>$shift,
        ]);

    }

}

