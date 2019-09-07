<?php

use Illuminate\Database\Seeder;

class CarServiceRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $carservice = factory(App\CarServiceRecord::class, 70)->create();
    }
}
