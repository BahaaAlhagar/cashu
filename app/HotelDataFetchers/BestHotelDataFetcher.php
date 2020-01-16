<?php

namespace App\HotelDataFetchers;

use Carbon\Carbon;

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
        $from = Carbon::parse($request->from)->format('Y-m-d');
        $to = Carbon::parse($request->to)->format('Y-m-d');

        return $this->getData()
                    ->filter(function ($item) use ($request) {
                        return ($item->fromDate <= $request->from && $item->toDate <= $request->to);
                    })
                    ->where('city', $request->city)
                    ->where('numberOfAdults', $request->adults_count)
                    ->toArray();
    }
}
