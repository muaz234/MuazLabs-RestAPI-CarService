05<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('owner_name');
            $table->string('plate_no');
            $table->bigInteger('insurance_provider_id')->unsigned()->index();
            $table->bigInteger('car_model_id')->unsigned()->index();
            $table->foreign('insurance_provider_id')->references('id')->on('insurance_providers');
            $table->foreign('car_model_id')->references('id')->on('car_models');
            $table->year('bought_on');
            $table->integer('current_mileage');
            $table->date('road_tax_expiry');
            $table->tinyInteger('in_use')->default(1);
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('car_details');
        Schema::enableForeignKeyConstraints();
    }
}
