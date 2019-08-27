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
        Schema::create('car_service_check_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->integer('expected_mileage');
            $table->string('time_interval');
            $table->integer('car_detail_id');
            $table->string('due_on');
            $table->tinyInteger('completed');
            $table->string('remarks');
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
        Schema::dropIfExists('car_service_check_lists');
    }
}
