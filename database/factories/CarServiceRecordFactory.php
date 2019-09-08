<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
// use Storage;
use App\CarServiceRecord;
use Faker\Generator as Faker;

$factory->define(CarServiceRecord::class, function (Faker $faker) {
    $file = '../../public/css';
    return [
        //
        'part_changed' => $faker->word ,
        'total_cost' => $faker->randomFloat($nbDigits=2, $min=1.00, $max = NULL),
        // 'receipt' => $faker->file($sourceDirectory = '/tmp/', $targetDirectory = '/Library/WebServer/Documents/CarServiceRestAPI/public/css', $fullPath = true),
        // 'receipt' => $faker->image('/tmp', '100', '100', 'cats', true, true, 'Faker'),
        'receipt' => $faker->unique(true)->file($sourceDir='/tmp/downloads/', $targetDir='/tmp/destination', false),
        'mileage' => $faker->numberBetween($min=0, $max=999999),
        'service_on' => $faker->date($format='Y-m-d', $max='now', $timezone='Asia/Kuala_Lumpur'),
        'remarks' => $faker->state,
        'car_detail_id' => $faker->numberBetween($min=1, $max=50),
    ];
});
