<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
           
            $table->string('model');
            $table->enum('people',[2,3,4,5,6,7,8]);
            $table->enum('doors',[2,3,4,5]);
            $table->float('mileage');
            $table->float('price');
            $table->enum('transmission',['Automatic','Manual']);
            $table->string('photo');

            $table->integer('mark_id')->unsigned();
            $table->foreign('mark_id')->references('id')->on('marks');
            $table->softDeletes();

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
        Schema::dropIfExists('cars');
    }
}
