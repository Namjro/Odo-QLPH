<?php
namespace Longtt\B2s\Controllers\Zone;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\B2s\Model\Zone;


class DeleteController extends Controller
{

    public $_zone;

    public function __construct(Zone $zone){
        $this->_zone=$zone;
    }

    public function index($id)
    {

        $this->_zone->find($id)->delete();
        return redirect()->route(
            'zone.index'
        )->with('status', 'Data deleted!');

    }

}
