<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('status',['confirm','wait','refus']);
            $table->dateTime('pickUp');
            $table->dateTime('dropOff');
            $table->timestamps();


            $table->integer('car_id')->unsigned();
            $table->foreign('car_id')->references('id')->on('cars');

             $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
}
