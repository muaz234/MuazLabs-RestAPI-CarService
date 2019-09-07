<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CarDetail;
use Faker\Generator as Faker;

$factory->define(CarDetail::class, function (Faker $faker) {
    return [
        //

        'owner_name' => $faker->firstName,
        'plate_no' => $faker->userName,
        'bought_on' => $faker->year($max='now'),
        'in_use' => 1,
        'current_mileage' => $faker->numberBetween($min=0, $max=1000000),
        'road_tax_expiry' => $faker->date($format = 'Y-m-d', $max = 'now', $timezone= 'Asia/Kuala_Lumpur'),
    ];
});
