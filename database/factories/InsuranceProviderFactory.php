<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\InsuranceProvider;
use Faker\Generator as Faker;

$factory->define(InsuranceProvider::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'short_name' => $faker->word(),
        'active' => 1
    ];
});
