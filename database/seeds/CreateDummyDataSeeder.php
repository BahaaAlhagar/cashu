<?php

use App\TopHotel;
use App\BestHotel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CreateDummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Generate a random arrays using PHP faker and add it to a json files
     *
     * @return void
     */
    public function run()
    {
        $bestHotelsData = factory(BestHotel::class, 30)->make()->toArray();

        Storage::put('best_hotels.json', json_encode($bestHotelsData));

        $topHotelsData = factory(TopHotel::class, 30)->make()->toArray();
        dump($bestHotelsData, $topHotelsData);

        Storage::put('top_hotels.json', json_encode($topHotelsData));
    }
}
