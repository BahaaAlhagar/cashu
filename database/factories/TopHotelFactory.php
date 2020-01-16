<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TopHotel;
use Faker\Generator as Faker;

$factory->define(TopHotel::class, function (Faker $faker) {
    $cities = [
        'CAI'	=>	'Cairo',
        'ALY'	=>	'Alexandria',
        'SSH'	=>	'Sharm El Sheikh'
    ];

    $code = array_rand($cities);

    return [
        'from'	=>	now()->subDays(random_int(1, 20))->startOfDay()->toIso8601ZuluString(),
        'to'	=>	now()->addDays(random_int(1, 20))->endOfDay()->toIso8601ZuluString(),
        'city'	=>	$code,
        'city_name'	=>	$cities[$code],
        'adultsCount'	=>	random_int(1, 2),
        'hotelName'	=>	$faker->streetName(),
        'rate'	=>	random_int(1, 5),
        'price'	=>	$faker->randomFloat(2, 20, 500),
        'discount'	=>	random_int(1, 10),
        'data_provider'  =>  'Top Hotels',
        'amenities'	=>	[
            'Random service',
            'anthoer random service',
        ]
    ];
});
