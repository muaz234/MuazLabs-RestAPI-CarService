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
            $table->unsignedBigInteger('car_brand_id')->unsigned();
            $table->unsignedBigInteger('car_model_id')->unsigned();
            $table->year('bought_on');
            $table->integer('current_mileage');
            $table->date('road_tax_expiry');
            $table->unsignedBigInteger('insurance_provider_id')->unsigned();
            $table->tinyInteger('in_use')->default(1);
            $table->timestamps();
        });

        Schema::table('car_details', function($table) {
            $table->foreign('car_brand_id')->references('id')->on('car_brands')->onDelete('cascade');
            $table->foreign('car_model_id')->references('id')->on('car_models')->onDelete('cascade');
            $table->foreign('insurance_provider_id')->references('id')->on('insurance_providers')->onDelete('cascade');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_details');
    }
}
