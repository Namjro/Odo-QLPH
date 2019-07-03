<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 2/7/17
 * Time: 4:23 PM
 */
namespace Longtt\User\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {
    public function user(){
        return $this->hasMany('Longtt\User\Model\User');
    }

}