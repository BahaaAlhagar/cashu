<?php

namespace App\HotelDataFetchers;

class TopHotelDataFetcher extends BaseFetcher
{
    protected $dataFile = 'top_hotels.json';

 
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
