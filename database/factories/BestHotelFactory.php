<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BestHotel;
use Faker\Generator as Faker;

$factory->define(BestHotel::class, function (Faker $faker) {
    $cities = [
        'CAI'	=>	'Cairo',
        'ALY'	=>	'Alexandria',
        'SSH'	=>	'Sharm El Sheikh'
    ];

    $code = array_rand($cities);

    return [
        'fromDate'	=>	'2020-1-1',
        'toDate'	=>	now()->format('Y-m-d'),
        'city_code'	=>	$code,
        'city_name'	=>	$cities[$code],
        'hotel'	=>	$faker->streetName(),
        'hotelRate'	=>	random_int(1, 5),
        'hotelFare'	=>	$faker->randomFloat(2, 20, 500),
        'roomAmenities'	=>	[
            'Random service',
            'anthoer random service',
        ]
    ];
});
