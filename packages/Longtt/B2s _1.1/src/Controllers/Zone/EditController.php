<?php
namespace Longtt\B2s\Controllers\Zone;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\Zone;

class EditController extends Controller
{

    public $zone;

    public function __construct(Zone $zone){
        $this->zone=$zone;
    }

    public function index($id)
    {


        $zone=$this->zone->find($id);
        return view('b2s::zone.edit',[
            'zone'=>$zone,
        ]);

    }

}

