<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            $table->timestamps();
        });
        
        Schema::create('permission_role', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("role_id")->unsigned()->index();
            $table->foreign("role_id")->references('id')->on('roles')->onDelete('cascade');
            $table->integer("permission_id")->unsigned()->index();
            $table->foreign("permission_id")->references('id')->on('permissions')->onDelete('cascade');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('permissions');
        Schema::drop('permission_role');
    }

}
