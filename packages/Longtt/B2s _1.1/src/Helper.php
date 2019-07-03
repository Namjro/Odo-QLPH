<?php
namespace Longtt\B2s;

use Illuminate\Support\Facades\Storage;
/**
 * Created by PhpStorm.
 * User: long
 * Date: 2/9/17
 * Time: 1:18 PM
 */
class Helper{
    public static function buildTreeOption($zones,$parent_id,$prefix){

        foreach ($zones as $zone) {
            if ($zone->parent_id == $parent_id) {
                echo '<option value="'.$zone->id.'">'.$prefix.$zone->name.'</option>';
                self::buildTreeOption($zones, $zone->id,$prefix."--");
            }
        }
    }
    public static function buildTreeTable($zones,$parent_id,$prefix){

        $array=array();
        foreach ($zones as $zone) {
            if ($zone->parent_id == $parent_id) {
                $zone->name=$prefix.$zone->name;
                $array[]=$zone;
                $array=array_merge($array,self::buildTreeTable($zones, $zone->id,$prefix."--"));
                //array_merge($array,);
            }
        }
        return $array;
    }
}
