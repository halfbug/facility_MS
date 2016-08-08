<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('desc',500);
            $table->string('address');
            $table->string('suburb',100);
            $table->string('state',20);
            $table->string('postcode',10);
            $table->string('phone',20);
            $table->string('web_url');
            $table->string('email',20);
            $table->integer('parent_id');
            $table->tinyInteger('tree_level');
            
            $table->timestamps();
        });
        
        Schema::create('facility_user',function (Blueprint $table) {
            $table->integer("user_id")->unsigned()->index();
            $table->foreign("user_id")->references('id')->on('users')->onDelete('cascade');
            $table->integer("facility_id")->unsigned()->index();
            $table->foreign("facility_id")->references('id')->on('facilities')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('facility');
         Schema::drop('facility_user');
    }
}
