<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// use App\CarBrand;
use Faker\Generator as Faker;

$factory->define(App\CarBrand::class, function (Faker $faker) {
    return [
        //
        'brand_name' => $faker->name,
        'active' => 1
    ];
});
