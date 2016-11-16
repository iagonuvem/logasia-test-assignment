<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefaultTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Vehicles type table
        Schema::create('vehicles_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
        });

        //Vehicles table
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->integer('vehicles_type_id')->unsigned();
            $table->foreign('vehicles_type_id')->references('id')->on('vehicles_type');
        });

        //Vehicles Price table
        Schema::create('vehicles_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->double('price', 9,2);
            $table->date('date');
            $table->integer('vehicles_id')->unsigned();
            $table->foreign('vehicles_id')->references('id')->on('vehicles');
        });

        //Vehicles Availability table
        Schema::create('vehicles_availability', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('available');
            $table->date('date');
            $table->integer('vehicles_id')->unsigned();
            $table->foreign('vehicles_id')->references('id')->on('vehicles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
