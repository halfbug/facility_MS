<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicationforms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',50);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('h_address',100);
            $table->string('h_suburb',100);
            $table->string('h_state',20);
            $table->string('h_postcode',10);
            $table->string('h_email',100);
            $table->string('h_phone',20);
            $table->date('date_of_birth');
            $table->string('gp_fullname');
            $table->string('gp_address',100);
            $table->string('gp_suburb',100);
            $table->string('gp_state',20);
            $table->string('gp_postcode',10);
            $table->string('gp_phone_1',20);
            $table->string('gp_phone_2',20);
            $table->integer('facility_id');
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
        Schema::drop('applicationforms');
    }
}
