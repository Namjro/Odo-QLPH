<?php
namespace Longtt\User\Controllers\Log;

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\User\Controllers\Controller;
use Longtt\User\Helper;

class LogAPIController extends Controller
{

    public function __construct(Application $app){
        parent::__construct($app);


    }

    public function index(Request $request)
    {
        //$array = explode("\n", file_get_contents(storage_path('logs').'/laravel.log'));
        $file_path = public_path()."/save_log_api.log";
        $fh = fopen($file_path,'r');
        while ($line = fgets($fh)) {
            // <... Do your work with the line ...>
            echo($line);
        }
        fclose($fh);


    }
    public function clear(Request $request)
    {
        //$array = explode("\n", file_get_contents(storage_path('logs').'/laravel.log'));
        $file_path = public_path()."/save_log_api.log";
        $data=file_get_contents($file_path);
        file_put_contents($file_path,$data);
        $fh = fopen($file_path,'w');
        fclose($fh);
    }



}
