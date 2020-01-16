<?php

namespace App\HotelDataFetchers;

class BestHotelDataFetcher extends BaseFetcher
{
    protected $dataFile = 'best_hotels.json';

 
    /**
     * Search hotels based in stored data in the json file
     * @param  Requset $request
     * @return array
     */
    public function searchHotels($request) : array
    {
        return $this->getData()->toArray();
    }
}
