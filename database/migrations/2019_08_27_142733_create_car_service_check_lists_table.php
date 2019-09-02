<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarServiceCheckListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_service_checklists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->integer('expected_mileage');
            $table->string('time_interval');
            $table->bigInteger('car_detail_id')->unsigned();
            $table->string('due_on');
            $table->tinyInteger('completed');
            $table->string('remarks');
            $table->timestamps();
        });


        Schema::table('car_service_checklists', function ($table){
            $table->foreign('car_detail_id')->references('id')->on('car_details')->onDelete('cascade');
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
        Schema::dropIfExists('car_service_checklists');
        Schema::enableForeignKeyConstraints();

    }
}
