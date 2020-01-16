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
        'fromDate'	=>	now()->subDays(random_int(1, 20))->format('Y-m-d'),
        'toDate'	=>	now()->addDays(random_int(1, 20))->format('Y-m-d'),
        'city'	=>	$code,
        'city_name'	=>	$cities[$code],
        'numberOfAdults'    =>  random_int(1, 2),
        'hotel'	=>	$faker->streetName(),
        'hotelRate'	=>	random_int(1, 5),
        'hotelFare'	=>	$faker->randomFloat(2, 20, 500),
        'data_provider'  =>  'Best Hotels',
        'roomAmenities'	=>	[
            'Random service',
            'anthoer random service',
        ]
    ];
});
