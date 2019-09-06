<?php

// use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarBrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $car_model = factory(App\CarBrand::class, 1000)->create();
        // DB::table('car_brands')->insert([
        //     'brand_name' => Str::random(10),
        //      'active'  => 1,
        // ]);
    }
}
