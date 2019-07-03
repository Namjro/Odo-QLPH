<?php
namespace Longtt\User\Controllers\Log;

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Longtt\User\Controllers\Controller;
use Longtt\User\Helper;


class LogFrameWorkController extends Controller
{

    public function __construct(Application $app){
        parent::__construct($app);


    }

    public function index(Request $request)
    {
        //$array = explode("\n", file_get_contents(storage_path('logs').'/laravel.log'));

        $fh = fopen(storage_path('logs').'/laravel.log','r');
        while ($line = fgets($fh)) {
            // <... Do your work with the line ...>
            echo($line);
        }
        fclose($fh);


    }
    public function clear(Request $request)
    {
        //$array = explode("\n", file_get_contents(storage_path('logs').'/laravel.log'));
        $data=file_get_contents(storage_path('logs').'/laravel.log');
        file_put_contents(storage_path('logs').'/'.\Longtt\User\Helper::getCurrentDate().'laravel.log',$data);
        $fh = fopen(storage_path('logs').'/laravel.log','w');
        fclose($fh);


    }

    public function curlPost($url, $data=NULL, $headers = NULL) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_POST, 1);
        if(!empty($data)){
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }

        if (!empty($headers)) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }

        $response = curl_exec($ch);

        if (curl_error($ch)) {
            trigger_error('Curl Error:' . curl_error($ch));
        }

        curl_close($ch);
        return $response;
    }



}
