<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Test user can search hotels
     *
     * @return void
     */
    public function test_user_can_search_hotels()
    {
        $this->seed();

        $params = [
            'from'	=>	now()->format('Y-m-d'),
            'to'	=>	now()->addDay()->format('Y-m-d'),
            'city'	=>	'CAI',
            'adults_count'	=>	1
        ];

        $response = $this->getJson(route('hotels.index', $params));

        $response->assertStatus(200)
            ->assertJsonStructure([
                "data" => [
                    [
                        "city_code",
                        "city",
                        "provider",
                        "hotel_name",
                        "fare",
                        "discount",
                        "hotel_rate",
                        "adults_count",
                        "amenities" => [
                        ]
                    ]
                ]

            ]);
    }
}
