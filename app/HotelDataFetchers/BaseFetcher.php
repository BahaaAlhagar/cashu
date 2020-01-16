<?php

namespace App\HotelDataFetchers;

use Illuminate\Support\Facades\Storage;

/**
 * Base data fetcher class
 */
abstract class BaseFetcher
{
    /**
     * stored json data file name
     * @var string
     */
    protected $dataFile;

    /**
     * Fetch the data from $dataFile
     * @return Illuminate\Support\Collection
     */
    protected function getData()
    {
        return collect(json_decode(Storage::get($this->dataFile)) ?? []);
    }

    /**
     * Search hotels based in stored data in the json file
     * @param  Requset $request
     * @return array
     */
    abstract public function searchHotels($request) : array;
}
