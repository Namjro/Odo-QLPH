<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Longtt\User\Model\Permission;


class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('permission')->unique();
            $table->timestamps();
        });


        $routeCollection = \Illuminate\Support\Facades\Route::getRoutes();
        $model=new Permission();
        $value = array();
        if($model->count('id') == 0)
        {
            foreach($routeCollection as $hon)
            {
                $value[]['permission'] = '1|'.$hon->methods[0].'|'.$hon->uri;
            }
        }
        $model->insert($value);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('permissions');
    }
}
