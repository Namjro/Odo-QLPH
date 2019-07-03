<?php
/**
 * Created by PhpStorm.
 * b2s: long
 * Date: 2/7/17
 * Time: 4:23 PM
 */
namespace Longtt\B2s\Model;

use Illuminate\Database\Eloquent\Model;

class User extends \Longtt\User\Model\User {
    public function child_users()
    {
        return $this->belongsToMany('Longtt\B2s\Model\User','user_user','user_parent_id','user_child_id' );
    }

    public function parent_users()
    {
        return $this->belongsToMany('Longtt\B2s\Model\User','user_user','user_child_id','user_parent_id');
    }


}