<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CarServiceCheckList;
use Faker\Generator as Faker;

$factory->define(CarServiceCheckList::class, function (Faker $faker) {
    return [
        //

        'title' => $faker->sentence($nb = 2, $variableNbWords= true ),
        'expected_mileage' => $faker->numberBetween($min = 0, $max= 900000),
        'time_interval' => $faker->dayOfMonth($max = 'now')." ".$faker->monthName($max = 'now'),
        'car_detail_id' => $faker->numberBetween($min = 1, $max=50),
        'due_on' => $faker->date($format='Y-m-d', $timezone='Asia/Kuala_Lumpur', $max =' now'),
        'completed' => 1,
        'remarks' => $faker->safeColorName, 
    ];
});
