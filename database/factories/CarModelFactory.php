<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\CarModel::class, function (Faker $faker) {
    return [
       'name' => $faker->userName,
       'active' => 1,
    //    'car_brand_id' =>
    ];
});
