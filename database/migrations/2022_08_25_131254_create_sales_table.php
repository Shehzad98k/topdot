<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); //buyer id
            $table->unsignedBigInteger('car_model_id'); //car model id
            $table->unsignedBigInteger('state_id');// state to devliver the car
            $table->integer('price')->nullable();//deal closing price
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade'); //buyer foreign key
            $table->foreign('car_model_id')->references('id')->on('car_models')->onUpdate('cascade')->onDelete('cascade'); //car model foreign key
            $table->foreign('state_id')->references('id')->on('states')->onUpdate('cascade')->onDelete('cascade'); //delivery state id foreign key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
