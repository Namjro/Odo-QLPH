<?php
namespace Longtt\User;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
/**
 * Created by PhpStorm.
 * User: long
 * Date: 2/9/17
 * Time: 1:18 PM
 */
class Helper{
    /**
     * @param $array 1 chieu
     * @return array
     */
    public static function convertValueOfArray($array){
        return array_map(function($val) { return (string)$val; }, $array);;
    }

    /**
     * @param $array 2 chieu
     * @return array
     */
    public static function convertValueOfArray2Dimension($array){
        $array1=array();
        foreach($array as $key => $value){
            $array1[]= array_map(function($val) { return (string)$val; }, $value);;
        }
        return $array1;
    }
    /**
     * @param $array 2 chieu
     * @return array
     */
    public static function convertValueOfArrayNDimension($array){
        if($array==null){
            return "";
        }
        if(is_object($array)){
            $array=$array->toArray();
        }
        if(is_array($array)){
            foreach($array as $key => $value){
                if(is_object($value)){
                    $value=(array)$value;
                }
                if(is_array($value)){
                    $array[$key]=self::convertValueOfArrayNDimension($value);
                }else{
                    $array[$key]=(string)$value;
                }
            }
        }
        return $array;
    }
    public static function removeKey($array,$keys){
        foreach($array as $key=>$value)
        {
            if(in_array($key, $keys)) {
                unset($array[$key]);
            }
        }
        return $array;
    }


    /**
     * @param $values collection
     * @param $selected collection
     */
    public static function optionSelect($values,$selected){
        $array_select=array();
        foreach($selected as $key1 => $s){
            $array_select[]=$s->id;

        }
        foreach ($values as $key => $value ){
            if(in_array($value->id,$array_select)){
                $flag="selected";
            }else{
                $flag="";
            }
            echo "<option $flag value=\"".$value->id."\">$value->name</option>";
        }
    }

    /**
     * @param $values collection
     * @param $selected string
     */
    public static function optionSelect1($values,$selected){

        foreach ($values as $key => $value ){
            if($value->id==$selected){
                $flag="selected";
            }else{
                $flag="";
            }
            echo "<option $flag value=\"".$value->id."\">$value->name</option>";
        }
    }

    /**
     * @param $values array
     * @param $selected string
     */
    public static function optionSelect2($values,$selected){
        if(!is_array($values)&&!is_object($values)){
            $values=(array)json_decode($values);
        }
        foreach ($values as $key => $value ){
            if($key==$selected){
                $flag="selected";
            }else{
                $flag="";
            }
            echo "<option $flag value=\"".$key."\">$value</option>";
        }

    }

    public static function checkResult($result){
        if($result){
           return Response::$success_array;
        }else{
            return Response::$error_array;
        }

    }


    public static function displayInStatus($status,$array){
        if(!in_array($status,$array)){
            echo "style=\"display: none\"";
        }
    }
    public static function hideInStatus($status,$array){
        if(in_array($status,$array)){
            echo "style=\"display: none\"";
        }
    }

    public static function getCurrentDate(){
        date_default_timezone_set('Asia/Bangkok');
        return date("Y-m-d");
    }

    public static function getCurrentDateDMY(){
        date_default_timezone_set('Asia/Bangkok');
        return date("d-m-Y");
    }

    public static function getSubDate($date,$number){
        date_default_timezone_set('Asia/Bangkok');
        $date = date_create($date);
        date_sub($date,  date_interval_create_from_date_string($number.' days'));
        return date_format($date, 'Y-m-d');
    }
    public static function getAddDate($date,$number){
        date_default_timezone_set('Asia/Bangkok');
        $date = date_create($date);
        date_add($date,  date_interval_create_from_date_string($number.' days'));
        return date_format($date, 'Y-m-d');
    }
    public static function getAddDate2($date,$number){
        date_default_timezone_set('Asia/Bangkok');
        $date = date_create($date);
        date_add($date,  date_interval_create_from_date_string($number.' days'));
        return date_format($date, 'Y-m-d H:i:s');
    }
    public static function getCurrentDateTime(){
        date_default_timezone_set('Asia/Bangkok');
        return date("Y-m-d H:i:s");
    }
    public static function getDateTime($timestamp){
        date_default_timezone_set('Asia/Bangkok');
        return date("Y-m-d H:i:s",$timestamp);
    }
    public static function getLinuxTImeStampFromDateTime($date){
        date_default_timezone_set('Asia/Bangkok');
        //2017-10-21 16:03:41
        $date = \DateTime::createFromFormat('Y-m-d H:i:s', $date);
        $date->setTimeZone(new \DateTimeZone('Asia/Bangkok'));
        return $date->getTimestamp();
    }

    public static function getPhotoLocal($image_name)
    {
        if(!$image_name){
            return "";
        }
        $path = storage_path().'/app/images/' . $image_name;
        if (file_exists($path)) {
            $file = File::get($path);
            $type = File::mimeType($path);
            $response =\Illuminate\Support\Facades\Response::make($file, 200);
            $response->header("Content-Type", $type);
            return $response;
        }else{
            return abort(404);
        }


    }
    public static function uploadPhoto($request,$key){
        $file_names=array();
        if($request->hasFile($key))
        {
            $files=$request->file($key);
            $i=0;
            foreach ($files as $file) {

                $rules = array($key => 'required|mimes:png,gif,jpeg,txt,pdf,doc,mp4,jpeg,jpg'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
                $validator = Validator::make(array($key=>$file), $rules);
//                echo "<pre>";
//                var_dump($files);
//                var_dump($validator->passes());
//                echo "</pre>";exit;
                if(1||$validator->passes()){
                    /* echo "<pre>";
                     var_dump($file);
                     echo "</pre>";exit;*/
                    $file_name=time()."_".$i++.'.'.$file->getClientOriginalExtension();
                    $path = $file->storeAs('images', $file_name);
                    $url = Storage::url($path);
                    $file_names[]=$file_name;
                    //Image::create(['loaner_id'=>$loaner->id,'images'=>$file_name]);
                    $image =new Image();
                    $image->images=$file_name;
                    $image->save();
                    $i++;

                }
            }
        }

        return $file_names;
    }


    public static function strFomat($str)
    {
        if(!$str) return false;
        $utf8 = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'd'=>'đ|Đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
        foreach($utf8 as $ascii=>$uni) $str = preg_replace("/($uni)/i",$ascii,$str);

        $result = self::strToCode($str);
        return $result;
    }

    public static function strToCode($text){
        $text = strtolower(($text));
        $text = str_replace( "ß", "ss", $text);
        $text = str_replace( "%", "", $text);
        $text = preg_replace("/[^_a-zA-Z0-9 -] /", "",$text);
        $text = str_replace(array('%20', ' '), '_', $text);
        $text = str_replace("----","-",$text);
        $text = str_replace("---","-",$text);
        $text = str_replace("--","-",$text);
        return $text;
    }

    public static function fomatRateFollowDay($rate)
    {
        return $rate*1000000/360/100;
    }

    public static function criptAlert($message)
    {
        echo "<script>alert('$message')</script>";
    }

    public static function saveLogApi($data){
        //$csv_filename = public_path().'/save_log_api'.".log";
        //file_put_contents($csv_filename, print_r(Helper::getCurrentDateTime(), true), FILE_APPEND);
        //file_put_contents($csv_filename, print_r($data, true), FILE_APPEND);
        Log::info(print_r($data,true));
    }

    public static function debugLog($data){
        //$csv_filename = public_path().'/debug_log_1'.".log";
        //file_put_contents($csv_filename, print_r(Helper::getCurrentDateTime(), true), FILE_APPEND);
        //file_put_contents($csv_filename, print_r($data, true), FILE_APPEND);
        Log::info(print_r($data,true));
    }

}