<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CarBrandsSeeder::class);
        $this->call(InsuranceProvidersSeeder::class);
        $this->call(CarModelsSeeder::class);
        $this->call(CarDetailSeeder::class);
        $this->call(CarServiceCheckListSeeder::class);
        $this->call(CarServiceRecordSeeder::class);

    }
}
