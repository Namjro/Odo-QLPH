<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Longtt\User\Model\Role;

class CreateGroupRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('roles');
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('code')->unique();
            $table->timestamps();
        });
        $data = [
            ["id"=>1,'name'=>"Admin","code"=>"admin",'created_at'=>new DateTime(),'updated_at'=>new DateTime()],
            ["id"=>2,'name'=>"Khach","code"=>"khach",'created_at'=>new DateTime(),'updated_at'=>new DateTime()],
          ];

        DB::table('roles')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
