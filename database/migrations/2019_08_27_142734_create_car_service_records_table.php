<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarServiceRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_service_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('car_detail_id');
            $table->string('part_changed');
            $table->double('total_cost');
            $table->string('receipt');
            $table->integer('mileage');
            $table->date('service_on');
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
        Schema::dropIfExists('car_service_records');
    }
}
