<?php

namespace App\HotelDataFetchers;

use Carbon\Carbon;
use App\HotelDataWrappers\TopHotelDataWrapper;

class TopHotelDataFetcher extends BaseFetcher
{
    /**
     * stored json data file name
     * @var string
     */
    protected $dataFile = 'top_hotels.json';

 
    /**
     * Search hotels based in stored data in the json file
     * @param  Requset $request
     * @return array
     */
    public function searchHotels($request) : array
    {
        $from = Carbon::parse($request->from)->toIso8601ZuluString();
        $to = Carbon::parse($request->to)->toIso8601ZuluString();

        $data = $this->getData()
            ->filter(function ($item) use ($from, $to) {
                return $item->from <= $from && $item->to >= $to;
            })
            ->where('city', $request->city)
            ->where('adultsCount', $request->adults_count);

        return wrapHotelData($data, TopHotelDataWrapper::class)->toArray();
    }
}
