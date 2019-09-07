<?php

use Illuminate\Database\Seeder;

class InsuranceProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $insurance = factory(App\InsuranceProvider::class, 10)->create();
    }
}
