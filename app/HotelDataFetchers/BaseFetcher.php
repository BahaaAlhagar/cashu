<?php

namespace App\HotelDataFetchers;

use Illuminate\Support\Facades\Storage;

/**
 * Base data fetcher class
 */
abstract class BaseFetcher
{
    protected $dataFile;

    protected function getData()
    {
        return collect(json_encode(Storage::get($this->dataFile)) ?? []);
    }

    /**
     * Search hotels based in stored data in the json file
     * @param  Requset $request
     * @return array
     */
    abstract public function searchHotels($request) : array;
}
