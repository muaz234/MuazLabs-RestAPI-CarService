<?php

use Illuminate\Database\Seeder;

class CarDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = factory(App\CarDetail::class, 50)->create([
            'insurance_provider_id' => $this->InsuranceProvider(),
            'car_model_id' => $this->CarModel(),
        ]);
    }

    public function InsuranceProvider() {
        $insurance = App\InsuranceProvider::inRandomOrder()->first();
        return $insurance;
    }

    public function CarModel() {
        $carModel = App\CarModel::inRandomOrder()->first();
        return $carModel;
    }




}
