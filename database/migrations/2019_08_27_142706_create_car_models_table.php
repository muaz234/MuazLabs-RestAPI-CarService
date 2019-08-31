<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('car_detail_id')->unsigned()->index();
            $table->bigInteger('car_brand_id')->unsigned()->index();
            $table->foreign('car_detail_id')->references('id')->on('car_details');
            $table->foreign('car_brand_id')->references('id')->on('car_brands');
            
            $table->timestamps();
            $table->tinyInteger('active')->default(1);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_models');
    }
}
