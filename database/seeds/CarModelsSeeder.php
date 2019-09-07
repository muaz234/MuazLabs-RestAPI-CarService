<?php

use Illuminate\Database\Seeder;

class CarModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // //
        $data = factory(App\CarModel::class, 10)->create([
            'car_brand_id' => $this->randomCarBrand(),
        ]);

    }

    public function randomCarBrand() {
        $brand = \App\CarBrand::inRandomOrder()->first();
        return $brand;
    }
}
